<?php

function vejthani_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/dist/css/style.css', ['parent-style'], wp_get_theme()->get('Version'));

    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/dist/js/main.js', [], wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'vejthani_child_enqueue_styles');

?>