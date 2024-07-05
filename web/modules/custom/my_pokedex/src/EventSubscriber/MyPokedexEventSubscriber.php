<?php

namespace Drupal\my_pokedex\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Redirects to the same page with additional URL parameters.
 */
class MyPokedexEventSubscriber implements EventSubscriberInterface
{

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents()
  {
    // Subscribe to the Kernel Request event.
    return [
      KernelEvents::REQUEST => 'onKernelRequest',
    ];
  }

  /**
   * Redirects to the same page with additional context parameters.
   *
   * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
   *   The event to process.
   */
  public function onKernelRequest(RequestEvent $event)
  {
    $request = $event->getRequest();

    // Check if this is a front-end page request.
    if (!$request->isXmlHttpRequest() && $request->getMethod() == 'GET') {
      $route = \Drupal::routeMatch();
      if ($route->getRouteName() == 'view.pokemon_diary.page_1') {
        // Get current user.
        $current_user = \Drupal::currentUser();
        if ($current_user->id()) {
          // Get the current context parameters.
          $context_user_id = $route->getParameter('arg_0');
          if (empty($context_user_id) && $context_user_id !== '0') {
            // Build the new URL with parameters.
            $new_url = $request->getBaseUrl() . $request->getPathInfo() . '/' . $current_user->id();

            // Create a redirect response to the new URL.
            $response = new RedirectResponse($new_url);

            // Set the response and stop further processing.
            $event->setResponse($response);
          } else {
            $user = \Drupal\user\Entity\User::load($context_user_id);
            // Check if the user entity exists and is active.
            if ($user && $user->isActive()) {
              
            }
            else {
              $response = new RedirectResponse($request->getBaseUrl() . '/404', 301);
              $event->setResponse($response);              
            }
          }
        }
      }
    }
  }
}
