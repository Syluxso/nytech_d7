<?php
module_load_include('inc', 'nytech_master', 'nytech_master.forms');

function screen_site_settings() {
  $form = drupal_get_form('nytech_master_site_settings_form');
  return drupal_render($form);
}

function api_home() {
  $destination = 'login';
  if(user_is_logged_in()) {
    $destination = variable_get('nytech_postauth_home', 'account');
  }
  drupal_goto($destination);
}
