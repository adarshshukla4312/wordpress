<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="masthead" class="site-header">
        <div class="header-container">

            <!-- Mobile Menu Toggle (Left on Mobile) -->
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Logo (Left on Desktop, Center on Mobile) -->
            <div class="site-branding">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                            rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                }
                ?>
            </div>

            <!-- Desktop Navigation (Center) -->
            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                ));
                ?>
            </nav>

            <!-- Header Icons (Right) -->
            <div class="header-icons">
                <!-- Search -->
                <div class="header-icon search-icon">
                    <a href="#" id="search-toggle"><i class="fas fa-search"></i></a>
                    <div class="search-dropdown">
                        <?php get_search_form(); ?>
                    </div>
                </div>

                <!-- User Account -->
                <div class="header-icon account-icon">
                    <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">
                        <i class="far fa-user"></i>
                    </a>
                </div>

                <!-- Wishlist (Placeholder) -->
                <div class="header-icon wishlist-icon">
                    <!DOCTYPE html>
                    <html <?php language_attributes(); ?>>

                    <head>
                        <meta charset="<?php bloginfo('charset'); ?>">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <?php wp_head(); ?>
                    </head>

                    <body <?php body_class(); ?>>
                        <header id="masthead" class="site-header">
                            <div class="header-container">

                                <!-- Mobile Menu Toggle (Left on Mobile) -->
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                    <i class="fas fa-bars"></i>
                                </button>

                                <!-- Logo (Left on Desktop, Center on Mobile) -->
                                <div class="site-branding">
                                    <?php
                                    if (has_custom_logo()) {
                                        the_custom_logo();
                                    } else {
                                        ?>
                                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                rel="home"><?php bloginfo('name'); ?></a></p>
                                        <?php
                                    }
                                    ?>
                                </div>

                                <!-- Desktop Navigation (Center) -->
                                <nav id="site-navigation" class="main-navigation">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'menu-1',
                                        'menu_id' => 'primary-menu',
                                        'container' => false,
                                        'menu_class' => 'nav-menu',
                                    ));
                                    ?>
                                </nav>

                                <!-- Header Icons (Right) -->
                                <div class="header-icons">
                                    <!-- Search -->
                                    <div class="header-icon search-icon">
                                        <a href="#" id="search-toggle"><i class="fas fa-search"></i></a>
                                        <div class="search-dropdown">
                                            <?php get_search_form(); ?>
                                        </div>
                                    </div>

                                    <!-- User Account -->
                                    <div class="header-icon account-icon">
                                        <a
                                            href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>">
                                            <i class="far fa-user"></i>
                                        </a>
                                    </div>

                                    <!-- Wishlist (Placeholder) -->
                                    <div class="header-icon wishlist-icon">
                                        <a href="#">
                                            <i class="far fa-heart"></i>
                                            <span class="count">0</span>
                                        </a>
                                    </div>

                                    <!-- Cart -->
                                    <div class="header-icon cart-icon">
                                        <?php if (class_exists('WooCommerce')): ?>
                                            <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-contents">
                                                <i class="fas fa-shopping-bag"></i>
                                                <?php if (WC()->cart->get_cart_contents_count() > 0): ?>
                                                    <span
                                                        class="cart-count"><?php echo esc_html(WC()->cart->get_cart_contents_count()); ?></span>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </header>