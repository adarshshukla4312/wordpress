<?php

get_header( 'shop' );

while ( have_posts() ) : the_post();

    do_action( 'woocommerce_before_main_content' );

    wc_get_template_part( 'content', 'single-product' );

    do_action( 'woocommerce_after_main_content' );

endwhile;

get_footer( 'shop' );
