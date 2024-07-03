<?php

namespace Drupal\pokeapi_integration\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\ClientInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Psr\Log\LoggerInterface;

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
        if (stripos($pokemon['name'], $input) !== FALSE) {
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

}
