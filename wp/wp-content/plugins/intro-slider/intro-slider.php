<?php
/*
    Plugin Name: Intro slider plugin
    Description: Simple implementation of a intro plugin.
    Author: Amin Keshavarz
    Version: 1.0
*/

function intro_slider_init()
{
    $args = array(
        'public' => true,
        'label' => __('تصاویر اسلایدر', 'intro-slider-label'),
        'labels' => [
            'menu_name' => __('تصاویر اسلایدر', 'intro-slider-menu-name'),
            'add_new' => __('افزودن تصویر', 'book', 'intro-slider-add-new'),
            'add_new_item' => __('تصویر جدید', 'book', 'intro-slider-add_new_item'),
            'featured_image' => __('تصویر اسلایدر', 'book', 'intro-slider-featured_image'),
            'set_featured_image' => __('افزودن تصویر اسلایدر', 'book', 'intro-slider-set_featured_image'),
            'remove_featured_image' => __('حذف تصویر اسلایدر', 'book', 'intro-slider-remove_featured_image'),
            'use_featured_image' => __('استفاده از تصویر اسلایدر', 'book', 'intro-slider-use_featured_image'),
        ],
        'supports' => array(
            'title',
            'excerpt',
            'thumbnail'
        )
    );
    register_post_type('introsliedr_images', $args);
    add_shortcode('intro-slider-images', 'intro_slider_function');
    add_shortcode('intro-slider-selectors', 'intro_slider_selectors_function');
}

function intro_slider_register_scripts()
{
    if (!is_admin()) {
        // register
        wp_register_script('flickityjs', plugins_url('assets/js/flickitt.pkgd.min.js', __FILE__));
        wp_register_script('intro-slider-script', plugins_url('assets/js/intro-cover-slider.js', __FILE__));

        // enqueue
        wp_enqueue_script('flickityjs');
        wp_enqueue_script('intro-slider-script');
    }
}

function intro_slider_register_styles()
{
    // register
    wp_register_style('flickitycss', plugins_url('assets/css/flickity.min.css', __FILE__));

    // enqueue
    wp_enqueue_style('flickitycss');
}

function intro_slider_function($atts)
{
    $args = array(
        'post_type' => 'introsliedr_images',
        'posts_per_page' => 10
    );
    $result = '<div id="bingo-intro-slider" data-delay="5000">';

    if (isset($atts['back-sc'])) {
        $result .= '<div class="black-back-slider"></div>';
    }

    //the loop
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
        $the_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), null);
        $result .= '<div class="slider img" data-img="' . $the_url[0] . '">
            <div class="slider-content"><span class="bar"></span><h4>' . get_the_title() . '</h4>
                <p>' . get_the_excerpt() . '</p></div>
        </div>';
    }
    $result .= '</div>';
    return $result;
}

function intro_slider_selectors_function()
{
    return '<div class="slider-selector"></div>';
}

add_theme_support('post-thumbnails');
add_action('init', 'intro_slider_init');
add_action('wp_print_scripts', 'intro_slider_register_scripts');
add_action('wp_print_styles', 'intro_slider_register_styles');