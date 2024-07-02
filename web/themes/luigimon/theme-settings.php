<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for Luigimon theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function luigimon_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['luigimon'] = [
    '#type' => 'details',
    '#title' => t('Luigimon'),
    '#open' => TRUE,
  ];

  $form['luigimon']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
