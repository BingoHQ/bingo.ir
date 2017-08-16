<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/12/2017
 * Time: 12:31 PM
 */

get_header(); ?>
    <main class="blog">
        <section>
            <?php if (have_posts()) : the_post();
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', get_post_format());
            // If no content, include the "No posts found" template.
            else :
                get_template_part('content', 'none');

            endif;
            ?>
        </section>
        <section class="bg-gray">
            <article class="related-contents text--center"><h3>مطالب مرتبط</h3><span class="bar"></span>
                <div class="row">
                    <?php
                    $orig_post = $post;
                    global $post;
                    $categories = get_the_category($post->ID);
                    if ($categories) {
                        $category_ids = array();
                        foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                        $args = array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 2, // Number of related posts that will be shown.
                            'caller_get_posts' => 1
                        );
                        $my_query = new wp_query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                ?>
                                <div class="col col--md-6">
                                    <div class="content">
                                        <div class="img"><a href="<? the_permalink() ?>" rel="bookmark"
                                                            title="<?php the_title(); ?>"><?php the_post_thumbnail([100, 100]); ?></a>
                                        </div>
                                        <div class="text"><span class="date"><?php the_time('d F') ?></span><a
                                                    style="color: initial;" href="<?php the_permalink() ?>"
                                                    rel="bookmark" title="<?php the_title(); ?>">
                                                <h4><?php the_title(); ?></h4></a>
                                            <p class="color-gray"><?php the_excerpt() ?></p></div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    $post = $orig_post;
                    wp_reset_query(); ?>
                </div>
            </article>
        </section>
    </main>
    </div>
<?php get_footer(); ?>