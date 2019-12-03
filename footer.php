<?php
$context = array();
$context['wp_footer'] = wp_footer();

Timber::render('footer.twig', $context);