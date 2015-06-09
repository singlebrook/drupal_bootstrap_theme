<?php
function drupal_streamline_theme_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['theme_settings']['social_links'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Profile Links'),
    '#description' => t("Social links displayed in the footer.")
  );
  $form['theme_settings']['social_links']['facebook_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Profile URL'),
    '#default_value' => theme_get_setting('facebook_url'),
  );
  $form['theme_settings']['social_links']['twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Profile Url'),
    '#default_value' => theme_get_setting('twitter_url'),
  );
  $form['theme_settings']['copyright_notice'] = array(
    '#type' => 'textfield',
    '#title' => t('Copyright Notice'),
    '#default_value' => theme_get_setting('copyright_notice'),
  );
}
