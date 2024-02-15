<?php

get_header();

global $wp_query;

get_template_part('templates-parts/part', 'banner');

?>
<section class="py-28">
    <div class="mx-auto max-w-7xl px-4 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-12">
            <div class="col-span-12 lg:col-span-8">
                <div class="grid gap-8 md:grid-cols-2">
                    <?php
                    // the query to set the posts per page to 3
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'paged' => $paged,
                    );
                    query_posts($args);
                    ?>
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post();

                            $post_thumbnail_url = cutme_load_image('placeholder.svg');
                            $post_excerpt = wp_trim_words(get_the_excerpt(), 18);

                            if (has_post_thumbnail()) {
                                $post_thumbnail_url = get_the_post_thumbnail_url(get_post(get_the_ID()), 'full');
                            }
                            ?>

                            <div
                                class="group relative overflow-hidden rounded-xl bg-primary-100  shadow-2xl shadow-gray-600/10 lg:shadow-transparent lg:hover:shadow-gray-600/10 transition duration-300">
                                <a href="<?= get_the_permalink(); ?>"
                                    class="inline-block thumb w-full h-[240px] relative bg-center bg-cover bg-no-repeat"
                                    style="background-image: url('<?= $post_thumbnail_url ?>')"></a>
                                <div class="relative py-5 px-7">
                                    <div class="flex items-center gap-4">
                                        <img class="h-10 w-10 rounded-full"
                                            src="<?php echo get_avatar_url(get_the_author_meta('email')); ?>" alt="user avatar"
                                            width="200" height="200" loading="lazy">
                                        <div>
                                            <h3 class="text-lg font-inter font-medium text-primary-950">
                                                <?= get_the_author_meta('display_name'); ?>
                                            </h3>
                                        </div>
                                    </div>
                                    <h2 class="my-5 text-2xl font-medium font-literata text-gray-800 transition"><a
                                            href="<?= get_the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a></h2>
                                    <p class="text-lg text-gray-500 inline-block">
                                        <?= $post_excerpt; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; endif;  wp_reset_postdata(); ?>
                </div>

                <div class="cutme-pagination flex justify-start items-center gap-5 mt-10">
                    <?php
                    $big = 999999999;
                    echo paginate_links(
                        array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => '<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 1C15.7997 1.2027 10.925 6.06757 8.58789 8.5L15.7997 16" stroke="#093344" stroke-width="2" stroke-linecap="round"/>
                <path d="M9.41211 1C9.21178 1.2027 4.33715 6.06757 2 8.5L9.21178 16" stroke="#093344" stroke-width="2" stroke-linecap="round"/>
                </svg>',
                            'next_text' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1C1.24324 1.24324 7.16216 7.08108 10 10L1.24324 19" stroke="black" stroke-width="2" stroke-linecap="round"/>
                <path d="M9 1C9.24324 1.24324 15.1622 7.08108 18 10L9.24324 19" stroke="black" stroke-width="2" stroke-linecap="round"/>
                </svg>',
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <?php get_sidebar(); ?>
                <!-- <?php dynamic_sidebar('sidebar-recent-posts'); ?> -->
            </div>
        </div>
    </div>
</section>


<?php
get_footer();