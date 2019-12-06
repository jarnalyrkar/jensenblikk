<?php
$context = Timber::context();

$context['post'] = new Timber\Post();

Timber::render('pages/single-post.twig', $context);
