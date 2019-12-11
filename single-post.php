<?php
$context = Timber::context();

$context['post'] = new Timber\Post();
// nextPost-permalink
// nextPost-title
$nextPost = new Timber\Post();

var_dump($context['post']);

Timber::render('pages/single-post.twig', $context);
