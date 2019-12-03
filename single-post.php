<?php
$context = Timber::context();

$context['post'] = new Timber\Post();

get_header();
Timber::render('single-post.twig', $context);
get_footer();