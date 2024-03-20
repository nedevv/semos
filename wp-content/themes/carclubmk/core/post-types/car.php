<?php

add_action('init', 'create_cpt');

function create_cpt() {
    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        'public' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-editor-customchar',
    );
    register_post_type('car', $args);
    
    if (! post_type_exists('car')){
    
        post_type_exists('car', $args);

        register_taxonomy('brand', 'car', array(
            'labels' => array(
                'name' => 'Brands',
                'singular_name' => 'Brands',
            ),
            'public' => true,
        ));

        flush_rewrite_rules();
    };
}