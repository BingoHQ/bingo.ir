<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/12/2017
 * Time: 12:31 PM
 */ ?>
<!-- Created by Amin Keshavarz on 7/31/2017.--><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <title>بینگو - <?= get_the_title() ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><!-- Header Template--><!-- Created by Amin Keshavarz on 7/31/2017.-->
<header class="standard" id="blog">
    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu' ) ); ?>
        <div class="logo">
            <?php global $woocommerce;
            if ($woocommerce->cart->cart_contents_count) :
                ?>
                <a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
                   title="نمایش سبد خرید">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/shopcart.svg"/>
                    <span class="badge"> <?php echo sprintf("%d", $woocommerce->cart->cart_contents_count); ?></span>
                </a>
            <?php endif; ?>
            <a href="<?= get_home_url() ?>"> Bingo </a>
        </div>
    </nav>
</header><!-- ./Header Template--><!-- Page Content-->