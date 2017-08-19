<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/12/2017
 * Time: 12:42 PM
 */?>
<article  id="post-<?php the_ID(); ?>" class="post-summary">
    <div class="title">
        <?php the_title( "<h3 class=\"entry-title\">", '</h3>' ) ?>
        <div class="author"><?= get_the_author_meta( 'first_name' ) ?> <?= get_the_author_meta( 'last_name' ) ?></div>
        <div class="date">  <?= get_the_date( 'd F') ?> </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col col--md-5 post-image">
                <?php the_post_thumbnail(['width' => "100%", 'height' => "100%", 'crop' => true]) ?>
            </div>
            <div class="col col--md-7 post-content">
                <?php
                    the_excerpt()
                ?>
                <a class="bingo-btn"  href="<?= the_permalink() ?>">ادامه مطلب  <span><i class="fa fa-arrow-left"></i></span>
                </a>
            </div>
        </div>
    </div>
</article>
