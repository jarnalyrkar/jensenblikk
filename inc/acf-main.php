<?php
/**
 * In this example, "main" is an Advanced Custom Field
 * of the type Flexible Content. We loop through it, and for every row (content-type)
 * we include specific controllers
 */
$context = Timber::context();

while (have_rows('main')) { the_row();
  $layout = get_row_layout();
  include get_template_directory() . '/inc/acf-controllers/acf-' . $layout . '.php';
  wp_reset_postdata();
}

