<?php
$context = Timber::context();
$context['block'] = $block; // Store block values.
$context['fields'] = get_fields(); // Store field values.
$context['is_preview'] = $is_preview; // Store $is_preview value.
Timber::render('views/block/block-example.twig', $context); // Render the block
