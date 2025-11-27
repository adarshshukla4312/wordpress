<?php

// Add theme support for WooCommerce
add_action( 'after_setup_theme', function() {
    add_theme_support( 'woocommerce' );
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'shoewear' ),
    ) );
} );

// Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'shoewear-style', get_stylesheet_uri() );
} );

?>