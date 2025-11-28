<footer id="colophon" class="site-footer">
    <div class="footer-container">
        <div class="footer-widgets">

            <!-- Column 1: Brand -->
            <div class="footer-column brand-column">
                <div class="footer-logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<span class="site-title">' . get_bloginfo('name') . '</span>';
                    }
                    ?>
                </div>
                <p class="tagline">“Comfort • Style • Performance”</p>
                <div class="social-icons">
                    <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <!-- Column 2: Shop -->
            <div class="footer-column shop-column">
                <h4 class="footer-title"><?php esc_html_e('Shop', 'shoewear'); ?></h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-shop',
                    'menu_class' => 'footer-menu',
                    'container' => false,
                    'fallback_cb' => false,
                ));
                ?>
            </div>

            <!-- Column 3: Customer Support -->
            <div class="footer-column support-column">
                <h4 class="footer-title"><?php esc_html_e('Customer Support', 'shoewear'); ?></h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-support',
                    'menu_class' => 'footer-menu',
                    'container' => false,
                    'fallback_cb' => false,
                ));
                ?>
            </div>

            <!-- Column 4: Company -->
            <div class="footer-column company-column">
                <h4 class="footer-title"><?php esc_html_e('Company', 'shoewear'); ?></h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-company',
                    'menu_class' => 'footer-menu',
                    'container' => false,
                    'fallback_cb' => false,
                ));
                ?>
            </div>

        </div><!-- .footer-widgets -->
    </div><!-- .footer-container -->

    <!-- Bottom Footer Strip -->
    <div class="site-info">
        <div class="footer-container">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
                <span class="footer-tagline">“Made for comfort. Designed for performance.”</span>
            </div>
            <div class="payment-icons">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-paypal"></i>
                <i class="fab fa-cc-apple-pay"></i>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>