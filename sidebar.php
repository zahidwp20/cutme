<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cutme
 */


?>

<aside id="recent-posts" class="widget widget_recent_entries">

	<div class="mb-8 cutme-search">
		<h2
			class="widget-title relative text-2xl font-medium text-gray-700 pb-5 mb-8 border-b-2 border-primary-500 border-opacity-35 before:absolute before:-bottom-0.5 before:left-0 before:w-2/5 before:border-t-2 before:border-primary-500 before:border-opacity-100 before:rounded-full">
			Search</h2>
			<?php get_search_form(); ?>
	</div>
	


	<h2
		class="widget-title relative text-2xl font-medium text-gray-700 pb-5 mb-8 border-b-2 border-primary-500 border-opacity-35 before:absolute before:-bottom-0.5 before:left-0 before:w-2/5 before:border-t-2 before:border-primary-500 before:border-opacity-100 before:rounded-full">
		Recent Posts</h2>
	<ul class="recent-posts-list">
		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 4, // Number of recent posts to display
		);
		$recent_posts = new WP_Query($args);
		while ($recent_posts->have_posts()):
			$recent_posts->the_post(); ?>
			<li class="flex items-center gap-4 mb-8">
				<?php if (has_post_thumbnail()): ?>
					<a class="rounded-lg inline-block overflow-hidden" href="<?php the_permalink(); ?>"
						title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail('thumbnail'); ?>
					</a>
				<?php endif; ?>
				<div class="recent-post-content">
					<span class="post-date block font-inter font-normal text-lg text-gray-700">
						<?php echo get_the_date(); ?>
					</span>
					<a class="text-lg font-literata font-medium mt-3 text-gray-700" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</div>
			</li>
		<?php endwhile;
		wp_reset_postdata(); ?>
	</ul>
	<?php
	$categories = get_categories();
	if (!empty($categories)) {
		echo '<h2 class="widget-title relative text-2xl font-medium text-gray-700 pb-5 mb-8 border-b-2 border-primary-500 border-opacity-35 before:absolute before:-bottom-0.5 before:left-0 before:w-2/5 before:border-t-2 before:border-primary-500 before:border-opacity-100 before:rounded-full">Categories</h2>';
		echo '<ul>';
		foreach ($categories as $category) {
			echo '<li class="flex justify-between items-center gap-4 mb-5">';
			echo '<a class="text-lg font-literata font-medium text-primary-500" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
			$post_count = ($category->count < 10) ? '0' . $category->count : $category->count;
			echo '<span class="post-count text-lg font-inter font-regular text-gray-700">(' . $post_count . ')</span>';
			echo '</li>';
		}
		echo '</ul>';
	}
	?>
</aside>