<?php

$base_dir = get_stylesheet_directory();
// Enqueue dist/css and dist/js
//   do not change this without also changing gulpfile.js and webpack.config.js to match
require_once($base_dir . '/inc/functions/enqueue_scripts.php');
// Remove emojis
require_once($base_dir . '/inc/functions/disable_emojis.php');
// Remove jquery by default
require_once($base_dir . '/inc/functions/deregister_jquery.php');
// Add markup to allow for responsive oembeds
require_once($base_dir . '/inc/functions/add_responsive_embed.php');
// Add BEM-style classes to menus
require_once($base_dir . '/inc/functions/add_bem_menu_classes.php');

/* Add default main menu */
function create_main_menu() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
} add_action('init', 'create_main_menu');

function add_to_context($data) {
  $data['nav'] = new Timber\Menu('headerMenuLocation');

  /* Icons and logos used in header and footer */
  $data['facebook_icon'] = get_stylesheet_directory_uri() . "/assets/img/facebookikon.svg";
  $data['logo_small'] = get_stylesheet_directory_uri() . "/assets/img/logoliten.svg";
  $data['logo_big_horizontal'] = get_template_directory_uri() . "/assets/img/logostorhorisontal.svg";
  $data['logo_big_negative'] = get_stylesheet_directory_uri() . "/assets/img/logostornegativ.svg";
  $data['logo_big_vertical'] = get_stylesheet_directory_uri() . "/assets/img/logostorvertikal.svg";
  $data['map_icon'] = get_stylesheet_directory_uri() . "/assets/img/lokasjonikon.svg";
  $data['mail_icon'] = get_stylesheet_directory_uri() . "/assets/img/mailikon.svg";
  $data['phone_icon'] = get_stylesheet_directory_uri() . "/assets/img/telefonikon.svg";
  $data['mestermerke_icon'] = get_stylesheet_directory_uri() . "/assets/img/mestermerke.svg";
  $data['sentraltgodkjent_icon'] = get_stylesheet_directory_uri() . "/assets/img/sentraltgodkjent.svg";
  $data['startbank_icon'] = get_stylesheet_directory_uri() . "/assets/img/startbank.svg";
  $data['tool_icon_1'] = get_stylesheet_directory_uri() . "/assets/img/verktoy1.svg";
  $data['tool_icon_2'] = get_stylesheet_directory_uri() . "/assets/img/verktoy2.svg";
  $data['tool_icon_3'] = get_stylesheet_directory_uri() . "/assets/img/verktoy3.svg";
  $data['tool_icon_4'] = get_stylesheet_directory_uri() . "/assets/img/verktoy4.svg";
  /* * */

  return $data;
} add_filter( 'timber/context', 'add_to_context' );


// Ettersom kunden kun skal ha referanser endrer vi navnet fra Post til Referanse
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Referanser';
        $labels->singular_name = 'Referanse';
        $labels->add_new = 'Legg til Referanse';
        $labels->add_new_item = 'Legg til ny Referanse';
        $labels->edit_item = 'Endre Referanse';
        $labels->new_item = 'Referanser';
        $labels->view_item = 'Se Referanse';
        $labels->search_items = 'Søk i Referanser';
        $labels->not_found = 'Ingen Referanser funnet';
        $labels->not_found_in_trash = 'Ingen Referanser funnet i søppelbøtta';
        $labels->all_items = 'Alle Referanser';
        $labels->menu_name = 'Referanser';
        $labels->name_admin_bar = 'Referanser';
} add_action( 'init', 'cp_change_post_object' );
// Legge til mulighet for featured images på posts
add_theme_support('post-thumbnails');

/* Custom Gutenberg blocks */
require_once trailingslashit(get_stylesheet_directory()) . 'inc/acf-blocks.php';