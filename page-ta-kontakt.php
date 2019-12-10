<?php
$context = Timber::get_context();
$context['post'] = new Timber\Post();

Timber::render('pages/ta-kontakt.twig', $context);