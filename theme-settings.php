<?php

/**
 * @file
 * Provides form elements for theme settings alter.
 */


/**
 * Implements hook_form_system_theme_settings_alter().
 */
function bootstrap_form_system_theme_settings_alter(&$form, $form_state) {
  // Bootstrap Path settings.
  $form['path'] = array(
    '#type' => 'fieldset',
    '#title' => t('Paths'),
  );
  $form['path']['bootstrap_path_css'] = array(
    '#type' => 'textfield',
    '#title' => t('CSS'),
    '#default_value' => theme_get_setting('bootstrap_path_css'),
  );
  $form['path']['bootstrap_path_css_responsive'] = array(
    '#type' => 'textfield',
    '#title' => t('CSS (Responsive)'),
    '#default_value' => theme_get_setting('bootstrap_path_css_responsive'),
  );
  $form['path']['bootstrap_path_js'] = array(
    '#type' => 'textfield',
    '#title' => t('JS'),
    '#default_value' => theme_get_setting('bootstrap_path_js'),
  );

  // Bootstrap Scaffolding settings.
  $form['scaffolding'] = array(
    '#type' => 'fieldset',
    '#title' => t('Scaffolding'),
  );
  $form['scaffolding']['bootstrap_responsive'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable responsive grid'),
    '#default_value' => theme_get_setting('bootstrap_responsive'),
  );

  // Bootstrap Navbar settings.
  $form['navbar'] = array(
    '#type' => 'fieldset',
    '#title' => t('Navbar'),
  );
  $form['navbar']['bootstrap_navbar'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable navbar'),
    '#default_value' => theme_get_setting('bootstrap_navbar'),
  );
  $form['navbar']['bootstrap_navbar_fixed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable fixed navbar'),
    '#default_value' => theme_get_setting('bootstrap_navbar_fixed'),
  );

  // Bootstrap Subnav settings.
  $form['subnav'] = array(
    '#type' => 'fieldset',
    '#title' => t('Subnav'),
  );
  $form['subnav']['bootstrap_subnav'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable subnav'),
    '#default_value' => theme_get_setting('bootstrap_subnav'),
  );

  // Breadcrumb settings.
  $form['breadcrumb'] = array(
    '#type' => 'fieldset',
    '#title' => t('Breadcrumb'),
  );
  $form['breadcrumb']['bootstrap_breadcrumb'] = array(
    '#type' => 'select',
    '#title' => t('Breadcrumb Visibility'),
    '#default_value' => theme_get_setting('bootstrap_breadcrumb'),
    '#options' => array(
      'yes' => t('Yes'),
      'admin' => t('Only in admin section'),
      'no' => t('No'),
    ),
  );
  $form['breadcrumb']['bootstrap_breadcrumb_divider'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb Divider'),
    '#description' => t('The divider to separate the breadcrumb items.'),
    '#default_value' => theme_get_setting('bootstrap_breadcrumb_divider'),
    '#size' => 5,
    '#maxlength' => 10,
  );
  
  // Bootstrap Form settings
  $form['forms'] = array(
      '#type' => 'fieldset',
      '#title' => t('Forms'),
  );
  $form['forms']['bootstrap_horizontal_forms'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use horizontal forms'),
      '#description' => t('Caution: This setting introduces new elements in a form\'s DOM structure. It\'s possible that some modules relying on jQuery might not like it as the hierarchy changes.'),
      '#default_value' => theme_get_setting('bootstrap_horizontal_forms'),
  );
}
