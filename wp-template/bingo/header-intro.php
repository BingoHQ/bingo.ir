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
<body <?php body_class(); ?>>
<header class="intro" id="container">
    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu' ) ); ?>
        <div class="logo">
            <div class="sign-up-btn"><a href="#" title="ورود"> ورود یا ثبت نام</a></div>
            <div class="bingo"> Bingo</div>
        </div>
    </nav>
    <?= do_shortcode('[intro-slider-images back-sc=1]') ?>
    <div class="footer">
        <div class="social"><span id="instagram"><a href="<?= get_option("bingo_theme_social_instagram_link"); ?>"><i
                            class="fa fa-instagram"></i></a></span><span
                    id="twitter"><a href="<?= get_option("bingo_theme_social_twitter_link"); ?>"><i
                            class="fa fa-twitter"></i></a></span><span id="linkedin"><a
                        href="<?= get_option("bingo_theme_social_linkedin_link"); ?>"><i
                            class="fa fa-linkedin"></i></a></span></div>
        <div class="arrow-key" id="scroll-to-content"><i class="fa fa-arrow-right fa-rotate-90"></i></div>
        <?= do_shortcode('[intro-slider-selectors]') ?>
    </div>
</header><!-- ./Header Template--><!-- Page Content-->