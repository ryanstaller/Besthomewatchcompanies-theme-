<?php
function brbo_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);
}
add_action('after_setup_theme', 'brbo_theme_setup');

function brbo_enqueue_styles() {
    wp_enqueue_style('brbo-theme', get_stylesheet_uri(), [], '1.0');
}
add_action('wp_enqueue_scripts', 'brbo_enqueue_styles');

function brbo_body_classes($classes) {
    return array_merge($classes, ['brbo-site']);
}
add_filter('body_class', 'brbo_body_classes');
