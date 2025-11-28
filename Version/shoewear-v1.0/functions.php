<?php

// Add theme support for WooCommerce
add_action('after_setup_theme', function () {
    add_theme_support('woocommerce');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 85,
        'width' => 180,
        'flex-height' => true,
        'flex-width' => true,
    ));

    register_nav_menus(array(
        'menu-1' => esc_html__('Primary Menu', 'shoewear'),
        'footer-shop' => esc_html__('Footer Shop Menu', 'shoewear'),
        'footer-support' => esc_html__('Footer Support Menu', 'shoewear'),
        'footer-company' => esc_html__('Footer Company Menu', 'shoewear'),
    ));
});

// Enqueue scripts and styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('shoewear-style', get_stylesheet_uri());
    // Enqueue FontAwesome for icons (using a CDN for simplicity)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    // Enqueue Main Script
    wp_enqueue_script('shoewear-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
});

?>