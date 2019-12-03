<?php
$context = array();
$context['title'] = Timber::get_the_title();
$context['content'] = Timber::get_the_content();

get_header();
Timber::render('index.twig', $context);
get_footer();