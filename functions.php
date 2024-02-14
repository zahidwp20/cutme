<?php
/**
 * cutme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cutme
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', time() );
}

add_filter( 'upload_mimes', function ( $existing_mimes ) {
	$existing_mimes['apk'] = 'application/vnd.android.package-archive';

	return $existing_mimes;
} );


if ( ! function_exists( 'cutme_setup' ) ) {
	function cutme_setup() {

		load_theme_textdomain( 'cutme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		remove_theme_support( 'widgets-block-editor' );

		register_nav_menus(
			array(
				'primary'  => esc_html__( 'Primary', 'cutme' ),
				'footer-1' => esc_html__( 'Footer Menu 1', 'cutme' ),
				'footer-2' => esc_html__( 'Footer Menu 2', 'cutme' ),
				'footer-3' => esc_html__( 'Footer Menu 3', 'cutme' ),
				'footer-4' => esc_html__( 'Footer Menu 4', 'cutme' ),
			)
		);

		$GLOBALS['content_width'] = apply_filters( 'cutme_content_width', 640 );
	}
}
add_action( 'after_setup_theme', 'cutme_setup' );


if (!function_exists('cutme_scripts')) {
	function cutme_scripts()
	{
		wp_enqueue_style('cutme-style', get_stylesheet_uri(), [], _S_VERSION);
		wp_enqueue_style('cutme-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Literata:opsz,wght@7..72,400;7..72,500;7..72,600;7..72,700&display=swap', [], null);
		wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/css-src/magnific-popup.min.css', [], '1.1.0');
		wp_enqueue_style('cutme-tailwind', get_stylesheet_directory_uri() . '/css/tailwind.min.css', [], _S_VERSION);
		wp_enqueue_style('cutme-main', get_stylesheet_directory_uri() . '/css/theme-main.min.css', [], _S_VERSION);


		wp_style_add_data( 'cutme-style', 'rtl', 'replace' );

		// Register Swiper.js CSS
		wp_register_style( 'swiper-css', get_template_directory_uri() . '/css-src/swiper.min.css', array(), '10.0.5', 'all' );
		wp_register_script( 'swiper-js', get_template_directory_uri() . '/js/swiper.min.js', array( 'jquery' ), '10.0.5', true );

		// Enqueue Swiper.js
		wp_enqueue_script( 'swiper-js' );

		// wp_enqueue_script('swiper-bundle');
		wp_enqueue_style('swiper-css');
		
		wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
		wp_enqueue_script('cutme-front', get_template_directory_uri() . '/js/scripts.js', array('jquery'), _S_VERSION, true);
		wp_localize_script('cutme-front', 'cutme', array('ajaxURL' => admin_url('admin-ajax.php')));

	}
}
add_action( 'wp_enqueue_scripts', 'cutme_scripts' );


require get_template_directory() . '/inc/class-hooks.php';
require get_template_directory() . '/inc/class-rest-api.php';
require get_template_directory() . '/inc/class-functions.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/admin-template/cta-table.php';


add_action( 'wp_head', function () {
	if ( isset( $_GET['debug'] ) ) {


		die();
	}
}, 0 );


add_action( 'init',  'create_db_table' );

function create_db_table() {

    global $wpdb;
	if ( ! function_exists( 'maybe_create_table' ) ) {
		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	}

	$sql_create_table = "CREATE TABLE IF NOT EXISTS mobile_number (
		id int(20) NOT NULL AUTO_INCREMENT,
		mobile varchar(128) NOT NULL UNIQUE,
		datetime datetime NOT NULL,
		PRIMARY KEY (id)
	) ";

	maybe_create_table( 'mobile_number', $sql_create_table );
}

add_action('wp_ajax_store_mobile_number', 'store_mobile_number_callback');

function store_mobile_number_callback(){
    global $wpdb;

    $mobile = isset($_POST['mobile_number']) ? sanitize_text_field($_POST['mobile_number']) : '';
	// $bdMobileRegex = '/^(?:\+?88)?01[3-9]\d{8}$/';
    // Validate the mobile number
	// if (empty($mobile) || !preg_match($bdMobileRegex, $mobile)) {
    //     wp_send_json_error(['message' => esc_html__('Invalid Bangladeshi mobile number.', 'cutme')]);
    // }
    // Additional validation if needed, such as checking the mobile number format or length
    if ( empty( $mobile ) ) {
        wp_send_json_error( [ 'message' => esc_html__( 'Empty mobile is not allowed.', 'cutme' ) ] );
	}
    // Check if the mobile number already exists in the database
    $existing_mobile = $wpdb->get_var( $wpdb->prepare( "SELECT mobile FROM mobile_number WHERE mobile = %s", $mobile ) );
	
    if ( $existing_mobile ) {
        wp_send_json_error( [ 'message' => esc_html__( 'Mobile number already exists.', 'cutme' ) ] );
    }

    // If all validations pass, proceed to insert the data into the database
    $data = array(
        'mobile' => $mobile,
        'datetime'=> current_time('mysql')
    );

    $insert = $wpdb->insert('mobile_number', $data); 

    if($insert){
        wp_send_json_success( [ 'message' => esc_html__( 'Successfully inserted data into database.', 'cutme' ) ] );
    }else{
		wp_send_json_error( [ 'message' => esc_html__( 'Could not insert data into database.', 'cutme' ) ] );
	}
   
}


add_action('admin_menu','submenu_page');

function submenu_page(){
	add_submenu_page('tools.php', esc_html__('CTA List','cutme'), esc_html__('CTA List Table','cutme'), 'manage_options', 'cta-list',  'cutme_cta_list');
}

function cutme_cta_list(){
	echo '<div class="wrap-cta-list">';
	$customListTable = new CTA_List_Table();
    $customListTable->prepare_items();
    $customListTable->display();
	echo '</div>';
}

function cutme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Recent Posts Sidebar', 'cutme' ),
        'id'            => 'sidebar-recent-posts',
        'description'   => __( 'Add widgets here to display recent posts in the sidebar.', 'cutme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'cutme_widgets_init' );