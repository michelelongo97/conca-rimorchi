<?php
function conca_rimorchi_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'conca_rimorchi_setup');

function conca_rimorchi_scripts() {
  wp_enqueue_style(
    'conca-rimorchi-style',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    '1.0'
  );
  wp_enqueue_script(
    'conca-rimorchi-script',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'conca_rimorchi_scripts');
