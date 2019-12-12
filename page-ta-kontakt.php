<?php
$context = Timber::context();
$context['post'] = new Timber\Post();

$context['logo_vertical'] = get_stylesheet_directory_uri() . "/assets/img/logostorvertikal.svg";

Timber::render('pages/ta-kontakt.twig', $context);