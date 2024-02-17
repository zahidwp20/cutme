<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cutme
 */


get_header();
get_template_part('templates-parts/part', 'banner');
global $authordata;
while (have_posts()):
    the_post();


    ?>
    <div class="mx-auto px-4 sm:px-12 max-w-7xl lg:px-0 mt-28">
        <div class="mx-auto w-full  lg:w-10/12">
            <?php if ($authordata instanceof WP_User): ?>
                <div class="flex flex-wrap items-center justify-center gap-6 mb-6 -mt-2">
                    <div class="author-thumb flex items-center gap-2">
                        <a href="<?= site_url() ?>"><img class="h-10 w-10 rounded-full"
                                src="<?= get_avatar_url($authordata->user_email); ?>" alt="user avatar" width="200" height="200"
                                loading="lazy"></a>
                        <h3 class="leading-0 text-md text-gray-700 hover:text-primary-950"><a class="hover:text-primary-950"
                                href="<?= site_url() ?>">
                                <?= $authordata->display_name; ?>
                            </a></h3>
                    </div>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                    <p class="leading-0 text-md text-gray-700">
                        <?= get_the_date(); ?>
                    </p>
                </div>
            <?php endif; ?>
            <?php if (get_the_title()): ?>
                <h2
                    class="font-bold font-literata text-3xl lg:text-[55px] lg:leading-[65px] text-primary-950 mb-12 text-center">
                    <?php the_title(); ?>
                </h2>
            <?php endif; ?>
            <?php if (has_post_thumbnail()): ?>
                <div class="featured-image  w-3/4 flex justify-center text-center mx-auto overflow-hidden rounded-3xl mb-16">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>

            <div class="mx-auto max-w-3xl space-y-12 text-lg text-primary-950 pb-16">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php endwhile; ?>
<div class="mx-auto max-w-7xl px-4 sm:px-12 lg:px-0">
    <div class="w-full md:w-10/12 lg:w-9/12">
        <div class="cutme-post-comments comments">
            <?php comments_template(); ?>
        </div>
    </div>
</div>

<?php
get_footer();
