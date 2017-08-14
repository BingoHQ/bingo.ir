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
    <div id="bingo-intro-slider" data-delay="5000">
        <div class="black-back-slider"></div>
        <div class="slider img" data-img="assets/img/img1.jpg">
            <div class="slider-content"><span class="bar"></span><h4> بینگو برای تمام کسب کارها</h4>
                <p> کاربر با دیدن متن لورم ایپسوم تصور میکند متنی که در صفحه مشاهده میکند</p></div>
        </div>
        <div class="slider img" data-img="assets/img/img2.jpg">
            <div class="slider-content"><span class="bar"></span><h4> آسودگی در استفاده</h4>
                <p> همیشه در دسترس و با کنترل خطای بالا</p></div>
        </div>
        <div class="slider img" data-img="assets/img/img3.jpg">
            <div class="slider-content"><span class="bar"></span><h4> امنیت در تراکنش</h4>
                <p> کاربر با دیدن متن لورم ایپسوم تصور میکند متنی که در صفحه مشاهده میکند</p></div>
        </div>
    </div>
    <div class="footer">
        <div class="social"><span id="instagram"><a href="#"><i class="fa fa-instagram"></i></a></span><span
                    id="twitter"><a href="#"><i class="fa fa-twitter"></i></a></span><span id="linkedin"><a href="#"><i
                            class="fa fa-linkedin"></i></a></span></div>
        <div class="arrow-key" id="scroll-to-content"><i class="fa fa-arrow-right fa-rotate-90"></i></div>
        <div class="slider-selector"></div>
    </div>
</header><!-- ./Header Template--><!-- Page Content-->