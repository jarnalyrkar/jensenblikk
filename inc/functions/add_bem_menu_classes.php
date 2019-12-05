<?php
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'mainNav__link--active ';
  }
  return $classes;
} add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);