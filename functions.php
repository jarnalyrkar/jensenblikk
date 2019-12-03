<?php

$base_dir = get_stylesheet_directory();
// Enqueue dist/css and dist/js
//   do not change this without also changing gulpfile.js and webpack.config.js to match
require_once($base_dir . 'inc/functions/enqueue_scripts.php');
// Remove emojis
require_once($base_dir . 'inc/functions/disable_emojis.php');
// Remove jquery by default
require_once($base_dir . 'inc/functions/deregister_jquery.php');
// Add markup to allow for responsive oembeds
require_once($base_dir . 'inc/functions/add_responsive_embed.php');
// Add BEM-style classes to menus
require_once($base_dir . 'inc/functions/add_bem_menu_classes.php');

/* Add default main menu */
function create_main_menu() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
} add_action('init', 'create_main_menu');

/* Custom Gutenberg blocks */
require_once trailingslashit(get_stylesheet_directory()) . 'inc/acf-blocks.php';
