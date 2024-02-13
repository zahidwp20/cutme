<?php
/**
 * Class cutme_Rest_api
 *
 * @see PBKIT_Hooks
 */

if ( ! class_exists( 'cutme_Rest_api' ) ) {
	class cutme_Rest_api {

		/**
		 * cutme_Rest_api constructor.
		 */
		function __construct() {
			add_action( 'rest_api_init', array( $this, 'register_endpoints' ) );
		}




		/**
		 * Register endpoints
		 */
		function register_endpoints() {

//			register_rest_route( 'api/v1', '/live-chat/', array(
//				'methods'  => 'POST',
//				'callback' => array( $this, 'api_live_chat' ),
//			) );
		}
	}
}

new cutme_Rest_api();