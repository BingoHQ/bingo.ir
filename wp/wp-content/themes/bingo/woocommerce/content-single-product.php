<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$product = wc_get_product();
?>

<section id="sec1">
    <article>
        <div class="row">
            <div class="col col--md-7">
                <div class="title"><h4>کوچک و قابل حمل</h4>
                    <h3> <?= get_the_title() ?></h3><span class="bar"></span></div>
                <div class="description color-gray">
                    <?= get_the_content() ?>
                </div>
                <div class="footer">
                    <div class="price"> قیمت : <?= $product->get_price_html() ?> </div>
                    <?php woocommerce_template_single_add_to_cart() ?>
                    <div class="btn"><a class="bingo-btn" href="#">فروشگاه<span><i
                                        class="fa fa-arrow-left"></i></span></a></div>
                </div>
            </div>
            <div class="col col--md-5">
                <style>
                    .qty{
                        display: none;
                    }
                </style>
                <img class="sec-picture" src="<?= get_the_post_thumbnail_url() ?>" title="" alt'>
            </div>
        </div>
    </article>
</section>
<section class="bg-gray">
    <article>
        <div class="row">
            <div class="col col--md-12">
                <div class="title"><h3>مشخصات فنی <?= get_the_title() ?></h3><span class="bar"></span></div>
                <div class="description">
                    <?php /** @var WC_Product_Attribute $attribute */
                    foreach ($product->get_attributes() as $attribute) :
                        if($attribute->get_visible()):
                    ?>
                            <h4>  <?= $attribute->get_name() ?></h4>
                            <div> <?= ($attribute->get_data()['value']) ?></div>
                    <?php
                        endif;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </article>
</section>
