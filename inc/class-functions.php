<?php
/**
 * Class cutme_functions
 *
 * @author cutme
 */

if ( ! class_exists( 'cutme_functions' ) ) {
	/**
	 * Class cutme_functions
	 *
	 */
	class cutme_functions {


		function get_plugin_data( $plugin_id = '', $section = '' ) {

			$avatar_url   = cutme_load_image( 'profile.svg' );
			$plugins_data = array(
				'5762' => array(
					'name'         => 'Open Close WooCommerce Store',
					'short_desc'   => 'Best Business Schedules Manager for WooCommerce. Schedule your WooCommerce store in a moment and automate your business hour for the customers.',
					'purchase_url' => 'https://cutme.org/buy/open-close-woocommerce-store',
					'demo_url'     => 'https://go.cutme.org/demo-open-close',
					'doc_url'      => '#',
					'youtube_url'  => 'https://www.youtube.com/watch?v=hTB_4wxJVV4',
					'pricing'      => array(
						'yearly'   => 49,
						'lifetime' => 229,
					),
					'features'     => array(
						'sec_title'     => 'Integrations with your Need',
						'sec_sub_title' => 'WooCommerce Open Close has perfect integrations with different market kings that you need to run your business.',
						'items'         => array(
							array(
								'img_url'   => cutme_load_image( 'features/dokan.svg' ),
								'title'     => 'Dokan',
								'desc'      => 'Best WooCommerce Multivendor Marketplace Solution – Build Your Own Amazon, eBay, Etsy.',
								'btn_label' => 'Read more',
								'btn_url'   => 'https://dokan.co/wordpress/',
							),
							array(
								'img_url'   => cutme_load_image( 'features/multivendorx.svg' ),
								'title'     => 'Multi Vendor X',
								'desc'      => 'MultiVendor Marketplace Solution For WooCommerce. This feature will be coming soon.',
								'btn_label' => 'Read more',
								'btn_url'   => 'https://multivendorx.com/',
							),
							array(
								'img_url'   => cutme_load_image( 'features/wcfm.png' ),
								'title'     => 'WCFM Marketplace',
								'desc'      => 'Best Multivendor Marketplace for WooCommerce by WC Lovers. This feature will be coming soon.',
								'btn_label' => 'Read more',
								'btn_url'   => 'https://wordpress.org/plugins/wc-multivendor-marketplace',
							),
						),
					),
					'reviews'      => array(
						array(
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Charlie',
								'designation' => 'CEO, Charliedotcom',
								'review'      => 'For the money you spend per year this plugin is worth, nice work guys and the updates are coming regularly.',
							),
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Aminur Rahman',
								'designation' => 'Android Application Developer',
								'review'      => 'I had a problem in my store and had to stop delivery. I was in a rush to block ordering and this saved my day. <br> Thank you guys.',
							),
						),
						array(
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Mike Knot',
								'designation' => 'Self Employed',
								'review'      => 'This plugin does exactly what it says. We develop restaurant website which takes online orders but only thier busienss hours. This plug in did exactly what we wanted.<br>Free version does not prevent actual orders. It just puts notifications. But paid one actually block people from ordering off business hours. <br> Their chat customer service was fast and helpful. That deserves 5 stars!',
							),
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Fahad AL Faisal',
								'designation' => 'Web Developer',
								'review'      => 'Best plugin for my e-commerce store. their support was swift and helpful too.',
							),
						),
						array(
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Farsin Wool',
								'designation' => 'Self Employed',
								'review'      => 'Just what I was looking for. Works. Free version has limited but just the right options to customise. Thank you for a great plugin.',
							),
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Forhad Amor',
								'designation' => 'Self Employed',
								'review'      => 'I gave this plugin a try, with fingers crossed, but it turned out to be a very useful plugin. It actually saves my business lots of money as with the shop closed on certain days and time, we dont have to ensure delivery due to obligation. <br>If you want to control your store like a brick and mortar store. this plugin is amazing. and it works!',
							),
						),
					),
					'faq'          => array(
						array(
							'question' => 'Will this plugin works with my timezone?',
							'answer'   => 'Yes! This simple plugin will work with your local timezone. You just need to configure your WP Timezone and update it. You will find the settings - <strong>Schedules > Settings > Options > General Settings > Timezone</strong>',
						),
						array(
							'question' => 'Does it work with WordPress Multisite?',
							'answer'   => 'Yes! This plugin completely works with WordPress multisite.',
						),
						array(
							'question' => 'Is it compatible with any kinds of Theme?',
							'answer'   => 'Yes! We have tested this plugin with all popular themes specially popular WooCommerce Themes and found it working perfectly. <br>If you have facing problem with your own theme, please <a target="_blank" href="https://cutme.org/my-account/tickets/?action=new">let us know</a> we will be right behind you Or <a target="_blank" href="mailto:admin@cutme.org">email us</a> directly.',
						),
						array(
							'question' => 'Is this plugin available in my Language?',
							'answer'   => 'We are working on the translation to be available for your language too. This is translation ready so if you want you can controbute.<br><a href="https://translate.wordpress.org/projects/wp-plugins/woc-open-close/" target="_blank">Translate in your Language</a>',
						),
					),
				),
				'5763' => array(
					'name'         => 'Order Notification for WooCommerce',
					'short_desc'   => 'Using this plugin you can get alert with strong volume alarm in your computer browser or any other device when a new order Come to your WooCommerce shop.',
					'purchase_url' => 'https://cutme.org/buy/order-notification-for-woocommerce',
					'demo_url'     => 'https://go.cutme.org/demo-order-notification',
					'doc_url'      => '#',
					'youtube_url'  => 'https://www.youtube.com/watch?v=qz2VCq8pemg',
					'pricing'      => array(
						'yearly'   => 39,
						'lifetime' => 199,
					),
					'features'     => array(
						'sec_title'     => 'Some of it\'s unique Features',
						'sec_sub_title' => 'Checkout the main features of Order Notification plugin where you can get customized sound notification on new order.',
						'items'         => array(
							array(
								'img_url'   => cutme_load_image( 'features/automatic.svg' ),
								'title'     => 'Everything is Automatic',
								'desc'      => 'You do not need to check again and again, everything will happen automatically.',
								'btn_label' => 'Read more',
								'btn_url'   => '#',
							),
							array(
								'img_url'   => cutme_load_image( 'features/notification.svg' ),
								'title'     => 'Sound Notification',
								'desc'      => 'Receive sound/audio notification to your speakers when a new order comes.',
								'btn_label' => 'Read more',
								'btn_url'   => '#',
							),
							array(
								'img_url'   => cutme_load_image( 'features/filter.svg' ),
								'title'     => 'Filter your Notification',
								'desc'      => 'User search/filter to get notification when they matched on the new order.',
								'btn_label' => 'Read more',
								'btn_url'   => '#',
							),
						),
					),
					'reviews'      => array(
						array(
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Madalin',
								'designation' => 'Self Employed',
								'review'      => 'We had a problem with their plugin and they fixed for us in minutes. Good job boys, keep doing ur best magic tricks in coding.',
							),
						),
						array(
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Pizzeriajalapeno',
								'designation' => 'Self Employed',
								'review'      => 'Everything works perfectly, I recommend the product',
							),
						),
						array(
							array(
								'avatar_url'  => $avatar_url,
								'name'        => 'Gattavb',
								'designation' => 'Self Employed',
								'review'      => 'Thanks worked perfectly light and done the job',
							),
						),
					),
					'faq'          => array(
						array(
							'question' => 'Is it check orders automatically?',
							'answer'   => 'Yes, this plugin will check orders automatically and play sounds on the speaker.',
						),
						array(
							'question' => 'Can I get notification for specific order?',
							'answer'   => 'Yes, You can configure the plugin for different types of orders',
						),
						array(
							'question' => 'Will it affect on my website performance?',
							'answer'   => 'Absolutely NOT. Although, it\'s sending ajax request but it is highly optimized.',
						),
					),
				),
			);

			if ( empty( $plugin_id ) ) {
				return $plugins_data;
			}

			if ( ! empty( $section ) ) {
				$plugins_data = self::get_args_option( $plugin_id, [], $plugins_data );

				return self::get_args_option( $section, [], $plugins_data );
			}

			return self::get_args_option( $plugin_id, [], $plugins_data );
		}


		/**
		 * Return Post Meta Value
		 *
		 * @param bool $meta_key
		 * @param bool $post_id
		 * @param string $default
		 *
		 * @return mixed|string|void
		 */
		function get_meta( $meta_key = false, $post_id = false, $default = '' ) {

			if ( ! $meta_key ) {
				return '';
			}

			$post_id    = ! $post_id ? get_the_ID() : $post_id;
			$meta_value = get_post_meta( $post_id, $meta_key, true );
			$meta_value = empty( $meta_value ) ? $default : $meta_value;

			return apply_filters( 'eem_filters_get_meta', $meta_value, $meta_key, $post_id, $default );
		}


		/**
		 * Return option value
		 *
		 * @param string $option_key
		 * @param string $default_val
		 *
		 * @return mixed|string|void
		 */
		function get_option( $option_key = '', $default_val = '' ) {

			if ( empty( $option_key ) ) {
				return '';
			}

			$option_val = get_option( $option_key, $default_val );
			$option_val = empty( $option_val ) ? $default_val : $option_val;

			return apply_filters( 'pbkit_filters_option_' . $option_key, $option_val );
		}


		/**
		 * Return Arguments Value
		 *
		 * @param string $key
		 * @param string $default
		 * @param array $args
		 *
		 * @return mixed|string
		 */
		function get_args_option( $key = '', $default = '', $args = array() ) {

			global $pbkit_args;

			$args    = empty( $args ) ? $pbkit_args : $args;
			$default = is_array( $default ) && empty( $default ) ? array() : $default;
			$default = ! is_array( $default ) && empty( $default ) ? '' : $default;
			$key     = empty( $key ) ? '' : $key;

			if ( isset( $args[ $key ] ) && ! empty( $args[ $key ] ) ) {
				return $args[ $key ];
			}

			return $default;
		}
	}
}

global $cutme;

$cutme = new cutme_functions();


class cutme_plugin {

	protected $plugin_data = [];
	public $name;
	public $short_desc;
	public $purchase_url;
	public $demo_url;
	public $doc_url;
	public $youtube_url;
	public $features;
	public $reviews;
	public $faq_items;

	function __construct( $plugin_id ) {

		$this->plugin_data = cutme()->get_plugin_data( $plugin_id );

		$this->reviews = $this->plugin_data['reviews'] ?? [];
	}
}