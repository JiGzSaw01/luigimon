<?php

namespace Drupal\pokeapi_integration\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\ClientInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Psr\Log\LoggerInterface;
use Drupal\file\Entity\File;

/**
 * Class PokeApiController.
 */
class PokeApiController extends ControllerBase {

  /**
   * The HTTP client.
   *
   * @var \GuzzleHttp\ClientInterface
   */
  protected $httpClient;

  /**
   * The logger service.
   *
   * @var \Psr\Log\LoggerInterface
   */
  protected $logger;

  /**
   * Constructs a PokeApiController object.
   *
   * @param \GuzzleHttp\ClientInterface $http_client
   *   The HTTP client.
   * @param \Psr\Log\LoggerInterface $logger
   *   The logger service.
   */
  public function __construct(ClientInterface $http_client, LoggerInterface $logger) {
    $this->httpClient = $http_client;
    $this->logger = $logger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_client'),
      $container->get('logger.factory')->get('pokeapi_integration')
    );
  }

  /**
   * Handles the autocomplete request.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The JSON response.
   */
  public function autocomplete(Request $request) {
    //  $test =  [['value'=>'Pikachu', 'label' => 'Pikachu'], ['normal'=>'ditto']];
    //  return new JsonResponse($test);
    $matches = [];
    $input = $request->query->get('q');

    if ($input) {
      $response = $this->httpClient->request('GET', 'https://pokeapi.co/api/v2/pokemon?limit=9999');
      $data = json_decode($response->getBody()->getContents(), TRUE);
      $this->logger->info('PokéAPI response: @response', ['@response' => print_r($data, TRUE)]);
      
      foreach ($data['results'] as $pokemon) {
        if (stripos($pokemon['name'], $input) === 0) {
          // Fetch detailed information for each matching Pokémon
          $details_response = $this->httpClient->request('GET', $pokemon['url']);
          $details = json_decode($details_response->getBody()->getContents(), TRUE);
          $this->logger->info('Pokémon details: @details', ['@details' => print_r($details, TRUE)]);
          
          // Add the detailed information to matches
          $type = $details['types'][0]['type']['name'];
          $pokemonName = ucfirst($pokemon['name']);
          $terms = \Drupal::entityTypeManager()
            ->getStorage('taxonomy_term')
            ->loadByProperties([
                    'vid'  => 'type',
                    'name' => $type,
                ]);
                $term = reset(array_keys($terms));

          $matches[] = [
            'value'     => $pokemonName,
            'label'     => $pokemonName,
            'type_ID'   => $term,
            'type_name' => $type,
            'img'       =>  $details['sprites']['other']['showdown']['front_default'],
          ];
        }
      }
    }

    $this->logger->info('Autocomplete matches: @matches', ['@matches' => print_r($matches, TRUE)]);
    return new JsonResponse($matches);
  }

  public function saveImage(Request $request) {
    \Drupal::logger('pokeapi_integration')->notice('Request content: ' . $request->getContent());
    
    // Retrieve JSON data from the request
    $data = json_decode($request->getContent(), true);

    \Drupal::logger('pokeapi_integration')->notice('Json data: ' . print_r($data, true));

    // Check if the necessary data is present
    $image_url = isset($data['image_url']) ? $data['image_url'] : null;
    $pokemon_name = isset($data['pokemon_name']) ? $data['pokemon_name'] : null;

    // Ensure both image URL and Pokemon name are provided
    if ($image_url && $pokemon_name) {
      // Check if the file already exists based on URI
      $existing_file = $this->findExistingFile($image_url);
      if ($existing_file) {
          // Return success response with existing file ID and name
          return new JsonResponse([
              'status' => 'success',
              'file_id' => $existing_file->id(),
              'file_name' => $pokemon_name,
          ]);
      }
        // Prepare file name and directory
        $file_name = 'public://' . basename($image_url);
        // $file_system = \Drupal::service('file_system');
        // $file_system->prepareDirectory('public://', FileSystemInterface::CREATE_DIRECTORY);

        // Save image data to file
        if (file_put_contents($file_name, $image_data) !== false) {
            // Create and save the file entity
            $file = File::create([
                'uri' => $file_name,
                'status' => 1,
            ]);
            $file->save();

            // Return success response with file ID and name
            return new JsonResponse([
                'status' => 'success',
                'file_id' => $file->id(),
                'file_name' => $pokemon_name,
            ]);
        } else {
            // Error handling if file_put_contents fails
            return new JsonResponse(['status' => 'error', 'message' => 'Failed to save image data'], 500);
        }
    }

    // Return error response if input data is invalid or incomplete
    return new JsonResponse(['status' => 'error', 'message' => 'Invalid input'], 400);
  }

   /**
  * Helper function to find existing file entity by URI.
  *
  * @param string $image_url
  *   The URL of the image to check.
  *
  * @return \Drupal\file\FileInterface|false
  *   The existing file entity if found, false otherwise.
  */
  private function findExistingFile($image_url) {
    $file_uri = 'public://' . basename($image_url);
    $query = \Drupal::entityQuery('file')
        ->condition('uri', $file_uri)
        ->accessCheck(FALSE); // Disable access checks for this query

    $file_ids = $query->execute();
    if (!empty($file_ids)) {
        return File::load(reset($file_ids));
    }
    return false;
  }

}
