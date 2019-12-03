<?php
$context = array();
$context['nav'] = wp_nav_menu(array(
  'menu' => 'headerMenuLocation',
  'echo' => false,
  'container' => '',
  'menu_class' => 'main-nav'
  )
);

Timber::render('header.twig', $context);
