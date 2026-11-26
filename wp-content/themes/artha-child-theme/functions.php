<?php
function twentytwentyfive_child_enqueue_assets() {

    // Load child theme's style.css (required by WordPress for theme metadata or overrides)
    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );
 }
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_assets');

function artha_enqueue_theme_styles() {
    // Load Google Fonts
    wp_enqueue_style( 'artha-google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Serif+Display:ital@0;1&display=swap', array(), null );
    
    // Load Font Awesome
    wp_enqueue_style( 'artha-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
    
    // Load your main style.css (loads AFTER fonts)
    wp_enqueue_style( 'artha-main-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array('artha-google-fonts', 'artha-fontawesome'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'artha_enqueue_theme_styles' );






/**
 * Register navigation menus for the theme.
 */
function mytheme_register_menus() {
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'mytheme' ),
        'footer'    => __( 'Footer Menu', 'mytheme' ),
        'mobile'    => __( 'Mobile Menu', 'mytheme' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );