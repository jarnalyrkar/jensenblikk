<?php
$context = array();

get_header();
Timber::render('front-page.twig', $context);
get_footer();
