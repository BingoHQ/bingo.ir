<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header('product'); ?>
    <main class="shop">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 3
        );
        $pQuery = new WP_Query($args);

        if ($pQuery->have_posts()) : ?>
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <section><h3> محصولات بینگو</h3><span class="bar"></span>
                <article class="products slide">
                    <div class="row margin-top-40">
                        <div class="carousel-wrapper">
                            <div class="carousel">
                                <?php
                                while ($pQuery->have_posts()) :
                                    $pQuery->the_post();

                                    $product = wc_get_product($pQuery->post->ID);
                                    $attachment_ids = $product->get_gallery_image_ids();
                                    $attachmentUrl = wp_get_Attachment_url($attachment_ids[0]);
                                    ?>
                                    <div class="carousel-cell">
                                        <a href="<?= get_the_permalink() ?>" class="product-item-in-slider"
                                           rel="<?php the_ID(); ?>">
                                            <div class="product-image">
                                                <?php if (get_post_mime_type($attachment_ids[0]) == 'image/svg+xml'):
                                                    echo file_get_contents($attachmentUrl);
                                                else: ?>
                                                    <img src="<?= $attachmentUrl ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="product-detail english-num"><?= get_the_title() ?></div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        <?php endif; ?>
        <script>  // vanilla JS
            var flkty = new Flickity('.carousel');
            flkty.select(1);</script>

        <div class="loading-icon" id="loading-icon">
            <img src="<?= get_template_directory_uri() ?>/assets/img/loading.gif" style="width: 100px; 100px;">
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
            <div id="product-data-container">
            <?php wc_get_template_part( 'content', 'single-product' ); ?>
            </div>
        <?php endwhile; // end of the loop. ?>
    </main><!-- ./Page Content--><!-- Footer Template--><!-- Created by Amin Keshavarz on 7/31/2017.-->
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
                    pid: jQuery(this).attr('rel')
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
<?php get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
