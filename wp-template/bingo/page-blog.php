<?php
/* Template Name: صفحه دسته بلاگ */
get_header(); ?>
    <main class="blog">
        <?= get_search_form() ?>
        <section>
            <?php
            $current_page = get_queried_object();
            $category = $current_page->post_name;

            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $query = new WP_Query(
                array(
                    'paged' => $paged,
                    'category_name' => 'blog',
                    'order' => 'asc',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                )
            );

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('content-summary', get_post_format());
                }

                $args = array(
                    'base' => '%_%',
                    'format' => '?paged=%#%',
                    'total' => 1,
                    'current' => 0,
                    'show_all' => false,
                    'end_size' => 1,
                    'mid_size' => 1,
                    'prev_next' => true,
                    'prev_text' => __('« قبلس'),
                    'next_text' => __('بعدی »'),
                    'type' => 'list',
                    'add_args' => false,
                    'add_fragment' => '',
                    'before_page_number' => '',
                    'after_page_number' => ''
                );

                the_posts_pagination($args);

                // If no content, include the "No posts found" template.
            } else {
                get_template_part('content', 'none');
            }
            ?>
        </section>
    </main>
<?php get_footer(); ?>