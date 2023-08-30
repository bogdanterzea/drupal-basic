<?php declare(strict_types = 1);

/**
 * @file
 * Theme settings form for CustomOlivero theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function customolivero_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['customolivero'] = [
    '#type' => 'details',
    '#title' => t('CustomOlivero'),
    '#open' => TRUE,
  ];

  $form['customolivero']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
