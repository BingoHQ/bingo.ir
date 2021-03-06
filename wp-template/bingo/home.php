<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/14/2017
 * Time: 04:40 PM
 */
get_header('intro'); ?>
<main class="main">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <section><h3> محصولات بینگو</h3><span class="bar"></span>
        <article class="products">
            <div class="row margin-top-40">
                <?php
                if ($_product = wc_get_product(get_option("bingo_theme_p3_id"))):
                    ?>
                    <div class="col col--md-4 col--sm-4 col--xs-12 text--center">
                        <a href="<?= $_product->get_permalink() ?>" class="product-item-in-slider"
                           data-id="<?= $_product->get_id() ?>">
                            <div class="product-image">
                                <?= html_entity_decode(stripslashes(get_option("bingo_theme_p3_img_code"))) ?>
                            </div>
                            <div class="product-detail english-num"><?= $_product->get_title() ?></div>
                        </a>
                    </div>
                    <?php
                endif;
                if ($_product = wc_get_product(get_option("bingo_theme_p2_id"))):
                    ?>
                    <div class="col col--md-4 col--sm-4 col--xs-12 text--center">
                        <a href="<?= $_product->get_permalink() ?>" class="product-item-in-slider"
                           data-id="<?= $_product->get_id() ?>">
                            <div class="product-image">
                                <?= html_entity_decode(stripslashes(get_option("bingo_theme_p2_img_code"))) ?>
                            </div>
                            <div class="product-detail english-num"><?= $_product->get_title() ?></div>
                        </a>
                    </div>
                    <?php
                endif;
                if ($_product = wc_get_product(get_option("bingo_theme_p1_id"))):
                    ?>
                    <div class="col col--md-4 col--sm-4 col--xs-12 text--center">
                        <a href="<?= $_product->get_permalink() ?>" class="product-item-in-slider"
                           data-id="<?= $_product->get_id() ?>">
                            <div class="product-image">
                                <?= html_entity_decode(stripslashes(get_option("bingo_theme_p1_img_code"))); ?>
                            </div>
                            <div class="product-detail english-num"><?= $_product->get_title() ?></div>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </article>
    </section>
    <div class="loading-icon" id="loading-icon">
        <img src="<?= get_template_directory_uri() ?>/assets/img/loading.gif" style="width: 100px; 100px;">
    </div>
    <div id="product-data-container">
        <?php
        $args = array(
            'post_type' => 'product',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field' => 'name',
                    'terms' => 'featured',
                ),
            ),
            'posts_per_page' => 1
        );

        $featured_query = new WP_Query($args);

        if ($featured_query->have_posts()) : ?>
            <section id="sec1">
                <article>
                    <?php
                while ($featured_query->have_posts()) :

                    $featured_query->the_post();

                    $product = wc_get_product($featured_query->post->ID);
                    ?>
                    <div class="row">
                        <div class="col col--md-7">


                            <div class="title english-num"><h3> <?= get_the_title() ?> </h3>
                                <p><?= get_the_excerpt() ?></p><span class="bar"></span></div>
                            <div class="description">
                                <?= get_the_content() ?>
                            </div>
                            <div class="footer">
                                <div class="price"> قیمت : <?= $product->get_price_html() ?></div>
                                <div class="btn"><a class="bingo-btn" href="<?= get_the_permalink() ?>">توضیحات
                                        بیشتر<span><i
                                                    class="fa fa-arrow-left"></i></span></a></div>
                            </div>


                        </div>
                        <div class="col col--md-5"><img class="sec-picture"
                                                        src="<?= get_the_post_thumbnail_url(get_post(), 'post-normal') ?>"
                                                        title="" alt'>
                        </div>
                    </div>
                    <?php

                endwhile;

            ?>
                </article>
            </section>
        <?php endif;

        wp_reset_query(); // Remember to reset
        ?>
    </div>
    <script>
        jQuery("document").ready(function () {
            jQuery(".product-item-in-slider").click(function (event) {
                event.preventDefault();
                console.log("Try to load product as ajax request.");
                var container = jQuery("#product-data-container");
                var loader = jQuery("#loading-icon");
                var wp_ajax_url = "<?= get_home_url() ?>/wp-admin/admin-ajax.php";
                var data = {
                    action: 'showProduct',
                    pid: jQuery(this).attr('data-id'),
                    remove_details: true
                };
                loader.css('display', 'block');
                container.css('display', 'none');
                jQuery.post(wp_ajax_url, data, function (content) {
                    container.html(content);
                    loader.css('display', 'none');
                    container.css('display', 'block');
                    console.log("Success ajax request");
                });
            });
        });
    </script>
    <section class="bg-gray" id="sec2">
        <article>
            <div class="row">
                <div class="col col--md-6"><img class="sec-picture"
                                                src="<?= get_template_directory_uri() ?>/assets/img/mobile.png" title=""
                                                alt'>
                </div>
                <div class="col col--md-4 col--md-offset-2">
                    <div class="title"><h3> اپلیکیشن بینگو</h3><span class="bar"></span></div>
                    <div class="description">متنی است بی مفهوم که تـشکیل شده از کـلمات معنی دار یا بی معنی کنار هم.
                        کاربر با دیدن متن لورم ایپسوم تصور میکند متنی که در صفحه مشاهده میکند
                    </div>
                    <div class="footer">
                        <div class="col col--md-6 store-btn"><a href="#"><img
                                        src="<?= get_template_directory_uri() ?>/assets/img/google.svg"></a></div>
                        <div class="col col--md-6 store-btn"><a href="#"><img
                                        src="<?= get_template_directory_uri() ?>/assets/img/app-store.svg"></a></div>
                        <div class="col col--md-6 store-btn"><a href="#"><img
                                        src="<?= get_template_directory_uri() ?>/assets/img/bingo.svg"></a></div>
                        <div class="col col--md-6 store-btn"><a href="#"><img
                                        src="<?= get_template_directory_uri() ?>/assets/img/bazzar.svg"></a></div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section id="sec3">
        <article>
            <div class="row">
                <div class="col col--md-3"></div>
                <div class="col col--md-6  col--md-offset-3 text--center"><h3> پنل کاربری</h3><span class="bar"></span>
                    <p> متنی است بی مفهوم که تشکیل شده از کلمات معنی دار یا بی معنی کنار هم. کاربر با دیدن متن لورم
                        ایپسوم تصور میکند متنی که در صفحه مشاهده میکند این متن واقعی و مربوط به توضیحات صفحه مورد نظر
                        است</p><a class="bingo-btn" href="#">ورود به پنل<span><i
                                    class="fa fa-arrow-left"></i></span></a></div>
            </div>
        </article>
    </section>
    <div class="panel-preview">
        <div class="dashboard"><img src="<?= get_template_directory_uri() ?>/assets/img/dashboard.png"></div>
    </div>
    <?php include_once 'newsletter.php' ?>
</main><!-- ./Page Content--><!-- Footer Template--><!-- Created by Amin Keshavarz on 7/31/2017.-->
<?php get_footer('intro'); ?>
