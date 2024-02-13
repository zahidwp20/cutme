<?php
/**
 * Template Name: Testimonials
 *
 * @package cutme
 */

get_header();


get_template_part('templates-parts/part', 'banner');

echo "<div class='py-12'></div>";

get_template_part( 'templates-parts/part', 'testimonials' );

echo "<div class='py-16'></div>";


get_footer();
