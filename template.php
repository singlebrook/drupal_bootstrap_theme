<?php

/**
 * Preprocess variables for page template.
 */
function drupal_streamline_theme_preprocess_page(&$vars) {
  /**
   * insert grid variables into page template.
   */
  if($vars['page']['sidebar_first'] && $vars['page']['sidebar_second']) {
    $vars['sidebar_first_grid_class'] = 'col-md-2 col-md-pull-8';
    $vars['sidebar_second_grid_class'] = 'col-md-2';
    $vars['main_grid_class'] = 'col-md-8 col-md-push-2';
  }
  elseif ($vars['page']['sidebar_first'] && !$vars['page']['sidebar_second']) {
    $vars['sidebar_first_grid_class'] = 'col-md-3 col-md-pull-9';
    $vars['main_grid_class'] = 'col-md-9 col-md-push-3';
  }
  elseif ($vars['page']['sidebar_second'] && ! $vars['page']['sidebar_first']) {
    $vars['sidebar_second_grid_class'] = 'col-md-3';
    $vars['main_grid_class'] = 'col-md-9';
  }
  else {
    $vars['main_grid_class'] = 'col-md-12';
  }

  $vars['page']['subfooter'][] = array('#markup' => '<div class="legal"><span class="copyright">&copy; ' . ' ' . date('Y') . ' ' . theme_get_setting('copyright_notice') . '</span></div>');
}


function drupal_streamline_theme_preprocess_html(&$vars) {
  /**
   * Add default icon
   **/
  $apple_icon =  array(

    '#tag' => 'link',
    '#attributes' => array(
      'href' => '/'.path_to_theme() .'/apple-touch-icon.png',
      'rel' => 'apple-touch-icon-precomposed',
    ),
  );

  /**
   * Loop through to add various sizes
   **/
  $apple_icon_sizes = array(57,72,114,144);

  foreach($apple_icon_sizes as $size){
    $apple = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => '/'.path_to_theme().'/apple-touch-icon-'.$size.'x'.$size.'.png',
        'rel' => 'apple-touch-icon-precomposed',
        'sizes' => $size . 'x' . $size,
      ),
    );
    drupal_add_html_head($apple, 'apple-touch-icon-'.$size);
  }
}

/**
 * Adds Bootstrap classes to menus
 */
function drupal_streamline_theme_menu_tree($vars) {
  return '<ul class="nav navbar-nav">' . $vars['tree'] . '</ul>';
}
