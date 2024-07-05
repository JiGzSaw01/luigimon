<?php

namespace Drupal\pokeapi_integration\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\ClientInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Psr\Log\LoggerInterface;
use Drupal\file\Entity\File;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\Cache\Cache;

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

          $typeString = "";
          foreach($details['types'] as $typeKey => $type) {
            $typeName = $type['type']['name'];
            $terms = \Drupal::entityTypeManager()
            ->getStorage('taxonomy_term')
            ->loadByProperties([
                'vid'  => 'type',
                'name' => $typeName,
            ]);
            $typeTermId = reset(array_keys($terms));
            if ($typeString) {
              $typeString .= ', ';
            }
            $typeString .= $typeName . ' (' . $typeTermId . ')';
          }
          $typeString = trim($typeString);
          
          // Add the detailed information to matches
          $id = (int)$details['id'];
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
            'type_string' => $typeString,
            'id' => $id
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

      $image_data = file_get_contents($image_url);
      $base_name = basename($image_url);
      $file_repository = \Drupal::service('file.repository');

      $file = $file_repository->writeData($image_data, "public://" . $base_name, FileSystemInterface::EXISTS_REPLACE);

      return new JsonResponse([
        'status' => 'success',
        'file_id' => $file->id(),
        'file_name' => $pokemon_name,
      ]);

    // Error handling if file_put_contents fails
    return new JsonResponse(['status' => 'error', 'message' => 'Failed to save image data'], 500);
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

  public function autocompleteLocation(Request $request) {
    $matches = [];
    $input = $request->query->get('q');
    if (!$input) {
      return new JsonResponse([], 400);
    }
    $input = strtolower($input);

    $locations = $this->getLocations();
    $matches = [];
    foreach($locations as $location) {
      if (stripos($location['name'], $input) === 0) {
        $name = $this->formatLocation($location['name']);
        $matches[] = [
          'value' => $name,
          'label' => $name
        ];
      }
    }

    return new JsonResponse($matches);
  }

  protected function getLocations() {
    $cacheId = 'pokemon_locations_cid';
    $cache = \Drupal::cache();
    $locations = $cache->get($cacheId);
    if ($locations->data) {
      return $locations->data;
    }
    $response = $this->httpClient->request('GET', 'https://pokeapi.co/api/v2/location?limit=9999');
    if (!$response || !$response['results']) {
      return [];
    }
    $locations = json_decode($response->getBody()->getContents(), TRUE);
    \Drupal::cache()->set($cacheId, $locations['results'], Cache::PERMANENT);
    return $locations['results'];
  }

  protected function formatLocation($str) {
    // Split the string into an array using "-" as delimiter
    $parts = explode("-", $str);
    
    // Initialize an empty array to store capitalized words
    $capitalized_words = array();
    
    // Capitalize each word and add it to the array
    foreach ($parts as $part) {
        $capitalized_words[] = ucwords($part);
    }
    
    // Join the capitalized words with a space and return the result
    return implode(" ", $capitalized_words);
}

}
