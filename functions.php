<?php

function css_learning_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);
}
add_action('after_setup_theme', 'css_learning_theme_setup');




function adesign_theme_setup() {
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('site-icon');
}
add_action('after_setup_theme', 'adesign_theme_setup');

function css_learning_assets() {

    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/assets/css/reset.css',
        [],
        '1.0'
    );

    // wp_enqueue_script(
    //     'theme-script',
    //     get_template_directory_uri() . '/assets/js/main.js',
    //     [],
    //     '1.0',
    //     true
    // );
}
add_action('wp_enqueue_scripts', 'css_learning_assets');