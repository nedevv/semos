<?php

if( function_exists('theme_setup_functions')) {

    function theme_setup_functions() {

    }
    
    add_action( 'after_setup_theme', 'theme_setup_functions' );
}

add_action( 'wp_enqueue_scripts', 'carclub_enqueue_scripts');

function carclub_enqueue_scripts() {
    wp_enqueue_style(
        'carclub-styles',
        get_template_directory_uri() . '/assets/css/style.css');
}