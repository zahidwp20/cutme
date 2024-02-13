<?php
/**
 * Class cutme_hooks
 */

if ( ! class_exists( 'cutme_hooks' ) ) {
	class cutme_hooks {

		/**
		 * cutme_hooks constructor.
		 */
		function __construct() {

			if ( ! is_admin() ) {
				add_action( 'init', array( $this, 'ob_start' ) );
				add_action( 'wp_footer', array( $this, 'ob_end' ) );
				show_admin_bar( false );
			}

			add_action( 'wp_head', array( $this, 'add_pingback_header' ) );
			add_action( 'init', array( $this, 'register_everything' ) );
		}

		function register_everything() {

			register_post_type( 'plugin', array(
				'label'         => esc_html__( 'Plugin' ),
				'public'        => true,
				'show_in_menu'  => true,
				'menu_position' => 20,
				'menu_icon'     => 'dashicons-download',
				'supports'      => array( 'title', 'custom-fields' ),
			) );

			register_taxonomy( 'plugin_cat', array( 'plugin' ), array(
				'hierarchical'      => true,
				'labels'            => array(
					'name' => esc_html__( 'Plugin Category' ),
				),
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'genre' ),
			) );
		}


		function add_pingback_header() {
			if ( is_singular() && pings_open() ) {
				printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
			}
		}

		public function ob_callback( $buffer ) {
			return $buffer;
		}


		public function ob_start() {
			ob_start( array( $this, 'ob_callback' ) );
		}

		public function ob_end() {
			if ( ob_get_length() ) {
				ob_end_flush();
			}
		}
	}
}

new cutme_hooks();