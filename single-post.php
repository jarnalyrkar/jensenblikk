<?php
$context = Timber::context();

$context['post'] = new Timber\Post();

get_header();
Timber::render('pages/single-post.twig', $context);
get_footer();