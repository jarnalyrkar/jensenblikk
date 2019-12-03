<?php
// Add default BEM-friendly classes to menus
function add_menuclass($ulclass) {
  return preg_replace('/<a /', '<a class="c-main-nav__link"', $ulclass);
} add_filter('wp_nav_menu','add_menuclass');

function add_menu_item_class($classes, $item, $args) {
 $classes[] = 'c-main-nav__item';
 return $classes;
} add_filter('nav_menu_css_class', 'add_menu_item_class', 1, 3);