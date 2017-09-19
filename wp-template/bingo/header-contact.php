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
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    <title>بینگو - <?= get_the_title() ?></title>
    <?php wp_head(); ?>
    <script src="https://www.google.com/recaptcha/api.js?hl=fa"></script>
</head>
<body <?php body_class(); ?>><!-- Header Template--><!-- Created by Amin Keshavarz on 7/31/2017.-->
<aside class="slider">
    <div id="map" style="height: 100vh; width:100%; background-color: grey;"></div>
    <script>function initMap() {
            var uluru = {lat: 35.727317, lng: 51.416435};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                animation: google.maps.Animation.BOUNCE,
                title: "Bingo.ir",
                map: map
            });
        }</script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGeACnKtvESiULBrraQxYQqZx6g1Jo1Ug&amp;callback=initMap"></script>
</aside>

<aside class="page"><!-- Header Template--><!-- Created by Amin Keshavarz on 7/31/2017.-->
    <header class="standard" id="blog">
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'menu')); ?>
            <div class="logo">
                <div class="sign-up-btn"><a href="#" title="ورود"> ورود یا ثبت نام</a></div>
                <a href="<?= get_home_url() ?>"> Bingo </a>
            </div>
        </nav>
    </header><!-- ./Header Template--><!-- Page Content-->