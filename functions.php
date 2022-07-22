<?php
/**
 * Theme functions and definitions.
 */
function apartio_child_enqueue_styles() {

    if ( SCRIPT_DEBUG ) {
        wp_enqueue_style( 'apartio-style' , get_template_directory_uri() . '/style.css' );
    } else {
        wp_enqueue_style( 'apartio-minified-style' , get_template_directory_uri() . '/style.min.css' );
    }

    wp_enqueue_style( 'apartio-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'apartio-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action(  'wp_enqueue_scripts', 'apartio_child_enqueue_styles' );