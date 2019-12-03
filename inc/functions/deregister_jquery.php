<?php
// Remove jquery from non-admin pages. Comment out require_once in functions.php if you actually need jquery.
function deregister_jquery( &$scripts ){
  if (!is_admin()) {
      $scripts->remove( 'jquery');
      $scripts->remove( 'jquery-core');
      $scripts->remove( 'jquery-migrate');
      // $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
  }
}
add_filter( 'wp_enqueue_scripts', 'deregister_jquery', PHP_INT_MAX );