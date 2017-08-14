<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/12/2017
 * Time: 04:36 PM
 */
add_theme_support( 'woocommerce' );
function register_my_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'about-menu' => __( 'About Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menu' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );