<?php
/**
 * All functions
 */


if (!function_exists('wp_body_open')) {
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
}


if (!function_exists('cutme')) {
	/**
	 * Return cutme_functions
	 *
	 * @return cutme_functions
	 */
	function cutme()
	{

		global $cutme;

		if (empty($cutme) || !$cutme) {
			return new cutme_functions();
		}

		return $cutme;
	}
}


if (!function_exists('cutme_load_image')) {
	function cutme_load_image($image_path)
	{
		return get_stylesheet_directory_uri() . '/images/' . $image_path;
	}
}


if (!function_exists('cutme_get_menu_by_location')) {
	function cutme_get_menu_by_location($location)
	{
		if (empty($location)) {
			return false;
		}

		$locations = get_nav_menu_locations();
		if (!isset($locations[$location])) {
			return false;
		}

		$menu_obj = get_term($locations[$location], 'nav_menu');

		return $menu_obj;
	}
}


if (!function_exists('cutme_breadcrumbs')) {
	function cutme_breadcrumbs()
	{


		if (is_front_page()) {
			return '';
		}

		$sep = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
		<path d="M6.73828 1L11.9992 6.5L6.73828 12" stroke="#011709" stroke-width="2" stroke-linecap="round"/>
		<path d="M1 1L6.26087 6.5L1 12" stroke="#011709" stroke-width="2" stroke-linecap="round"/>
	  </svg>
		';
		$home_page = sprintf('<a class="text-primary-950 text-xl font-ekushey-lalsaluregular hover:text-primary-500" href="%s">%s</a>', site_url(), get_bloginfo('name'));

		ob_start();

		if (is_category() || is_single()) {
			the_category('title_li=');
		} elseif (is_archive() || is_single()) {
			if (is_day()) {
				printf(__('%s', 'text_domain'), get_the_date());
			} elseif (is_month()) {
				printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
			} elseif (is_year()) {
				printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
			} else {
				_e('Blog Archives', 'text_domain');
			}
		}

		if (is_singular('plugin')) {
			global $post;

			printf('<a href="%s">%s</a>', site_url('plugins'), ucwords(get_post_type($post)));
		}

		if (is_single()) {
			echo $sep;
			echo get_the_title();
		}

		if (is_page()) {
			echo get_the_title();
		}

		if (is_home()) {
			global $post;
			$page_for_posts_id = get_option('page_for_posts');
			if ($page_for_posts_id) {
				$post = get_post($page_for_posts_id);
				setup_postdata($post);
				the_title();
				rewind_posts();
			}
		}

		$breadcrumb_parts = ob_get_clean();

		return sprintf('<div class="cutme-breadcrumbs flex gap-2 items-center text-center mx-auto mt-5 text-md text-primary-500 text-xl font-ekushey-lalsaluregular">%s%s%s</div>', $home_page, $sep, $breadcrumb_parts);
	}
}


if (!function_exists('cutme_button')) {
	function cutme_button($text, $url = '', $is_primary = true)
	{

		$url = empty($url) ? site_url() : $url;
		$btn_classes = 'relative flex h-12 w-full items-center justify-center px-4 lg:px-8 before:absolute before:inset-0 before:rounded-full before:bg-primary-700 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max';
		$span_classes = 'relative text-sm font-semibold text-white';

		if (!$is_primary) {
			$btn_classes = 'ml-4 relative flex h-12 w-full items-center justify-center px-4 lg:px-8 before:absolute before:inset-0 before:rounded-full before:bg-primary-200 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max';
			$span_classes = 'relative text-sm font-semibold text-primary-700';
		}

		echo '<a href="' . $url . '" class="' . $btn_classes . '">';
		echo '<span class="' . $span_classes . '">' . $text . '</span>';
		echo '</a>';
	}
}