<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cutme
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'templates-parts/part', 'banner' );
	?>

    <div class="mx-auto px-4 max-w-7xl lg:px-0">

		<?php if ( has_post_thumbnail() ) : ?>
            <div class="featured-image w-full">
				<?php the_post_thumbnail(); ?>
            </div>
		<?php endif; ?>

        <div class="-mx-4 sm:-mx-12 lg:mx-0">
            <div class="mx-auto max-w-3xl space-y-12 px-4 text-gray-600 pb-16 sm:px-12 xl:px-0">
				<?php the_content(); ?>
            </div>
        </div>
    </div>
	<?php

endwhile;

get_footer();
