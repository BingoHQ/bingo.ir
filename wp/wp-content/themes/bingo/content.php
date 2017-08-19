<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/12/2017
 * Time: 12:42 PM
 */?>
<article id="post-<?php the_ID(); ?>"
         class="post" <?php if (isWoocommercePage()) : ?> style="padding-top: 20px;" <?php endif; ?>>
    <div class="title">
        <?php the_title( "<h3 class=\"entry-title\">", '</a></h3>' ) ?>
        <?php if (!isWoocommercePage()) : ?>
            <div class="author"><?= get_the_author_meta( 'first_name' ) ?> <?= get_the_author_meta( 'last_name' ) ?></div>
            <div class="date">  <?= get_the_date( 'd F') ?> </div>
        <?php endif; ?>
    </div>
    <br>
    <div class="content">
        <div class="row">
            <div class="col col--md-12 post-image">
                <?php the_post_thumbnail('post_normal') ?>
            </div>
            <?php the_content() ?>
        </div>
        </div>
    <?php if (!isWoocommercePage()) : ?>
        <div class="row">
            <div class="col col--md-12 text--center share"> با دوستان‌ به اشتراک بگذارید
                <div class="social"><span id="instagram"><a href="#"><i
                                    class="fa fa-instagram"></i></a></span><span id="twitter"><a href="#"><i
                                    class="fa fa-twitter"></i></a></span><span id="linkedin"><a href="#"><i
                                    class="fa fa-linkedin"></i></a></span></div>
            </div>
        </div>
    <?php endif; ?>
    </div>
</article>

