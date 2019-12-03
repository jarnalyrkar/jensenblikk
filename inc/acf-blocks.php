<?php
add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    // Check if the register block function exists (If ACF is active)
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name'            => 'example',
            'title'           => 'Example',
            'description'     => __('An example block'),
            'render_callback' => 'block_render_callback',
            'category'        => 'common',
            'icon'            => 'heart',
            'mode'            => 'edit',
            'keywords'        => array('recommendation', 'link'),
        ));
    }
}

function block_render_callback($block) {
    $name = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("inc/block-controllers/block-{$name}.php"))) {
        include(get_theme_file_path("inc/block-controllers/block-{$name}.php"));
    }
}