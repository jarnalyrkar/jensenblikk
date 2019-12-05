<?php
$context = Timber::get_context();
$context['post'] = new Timber\Post();
$context['is_front_page'] = is_front_page();
$context['bg_path'] = get_template_directory_uri() . '/assets/img/BigBlueBg.jpg';


Timber::render('pages/front-page.twig', $context);