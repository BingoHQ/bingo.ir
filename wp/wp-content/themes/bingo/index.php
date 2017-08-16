<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/12/2017
 * Time: 12:31 PM
 */

get_header(); ?>
<main class="blog">
    <?= get_search_form() ?>
    <section>
        <?php if ( have_posts() ) : ?>

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'content-summary', get_post_format() );

                // End the loop.
            endwhile;
            $args = array(
                'base'               => '%_%',
                'format'             => '?paged=%#%',
                'total'              => 1,
                'current'            => 0,
                'show_all'           => false,
                'end_size'           => 1,
                'mid_size'           => 1,
                'prev_next'          => true,
                'prev_text'          => __('« قبلس'),
                'next_text'          => __('بعدی »'),
                'type'               => 'list',
                'add_args'           => false,
                'add_fragment'       => '',
                'before_page_number' => '',
                'after_page_number'  => ''
            );

            the_posts_pagination( $args );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );

        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>