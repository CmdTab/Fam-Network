<?php
/**
 * WordPress Start functions and definitions
 *
 * @package WordPress Start
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'start_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function start_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WordPress Start, use a find and replace
	 * to change 'start' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'start', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'start' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'start_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // start_setup
add_action( 'after_setup_theme', 'start_setup' );

/***Custom Taxonomies***/
function create_tax() {
	register_taxonomy(
		'month',
		array('post', 'podcast', 'articles', 'downloads'),
		array(
			'label' => __( 'Month' ),
			'hierarchical' => false,
		)
	);
	register_taxonomy(
		'type',
		array('post', 'podcasts', 'articles', 'downloads'),
		array(
			'label' => __( 'Type' ),
			'hierarchical' => false,
		)
	);
}
add_action( 'init', 'create_tax' );
/***Custom Post Types***/
function create_post_type() {
	$args = array(
		'label'  => 'Podcasts',
		'labels' => array(
			'singular_name' => 'Podcast'
			),
		'description' => 'Podcasts',
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'month', 'type'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author'),
	);
	register_post_type( 'podcasts', $args );
	$args = array(
		'label'  => 'Downloads',
		'labels' => array(
			'singular_name' => 'Download'
			),
		'description' => 'Downloads',
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'month', 'type'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author'),
	);
	register_post_type( 'downloads', $args );
	$args = array(
		'label'  => 'Articles',
		'labels' => array(
			'singular_name' => 'Article'
			),
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'month', 'type'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author'),
	);
	register_post_type( 'articles', $args );
	/*$args = array(
		'label'  => 'Webinars',
		'labels' => array(
			'singular_name' => 'Webinar'
			),
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'months'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author'),
	);
	register_post_type( 'webinars', $args );
	$args = array(
		'label'  => 'Culture Updates',
		'labels' => array(
			'singular_name' => 'Update'
			),
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'months'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author'),
	);
	register_post_type( 'culture', $args );
	$args = array(
		'label'  => 'Parent Newsletter',
		'labels' => array(
			'singular_name' => 'Newsletter'
			),
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'months'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author'),
	);
	register_post_type( 'parent', $args );*/

}
add_action( 'init', 'create_post_type' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function start_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'start' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'start_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function start_scripts() {
	wp_enqueue_style( 'start-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'start-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	//wp_enqueue_script( 'start-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'start_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*Woocommerce Support*/
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents clear-btn" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
 unset($tabs['reviews']);
 return $tabs;
}
/**
 * Print the customer avatar in My Account page, after the welcome message
 */
function storefront_myaccount_customer_avatar() {
    $current_user = wp_get_current_user();

    echo '<div class="myaccount_avatar">' . get_avatar( $current_user->user_email, 72, '', $current_user->display_name ) . '</div>';
}
add_action( 'woocommerce_before_my_account', 'storefront_myaccount_customer_avatar', 5 );

/* Clears cart in woocommerce after logout */
function your_function() {
    if( function_exists('WC') ){
        WC()->cart->empty_cart();
    }
}
add_action('wp_logout', 'your_function');

// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

// Hide category from the shop page (for memberships on FAM Network)
add_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

function custom_pre_get_posts_query( $q ) {

	if ( ! $q->is_main_query() ) return;
	if ( ! $q->is_post_type_archive() ) return;
	
	if ( ! is_admin() && is_shop() ) {

		$q->set( 'tax_query', array(array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => array( 'membership' ), // Don't display products in the knives category on the shop page
			'operator' => 'NOT IN'
		)));
	
	}

	remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

}

function skyverge_show_coupon_js() {
	wc_enqueue_js( '
		$( "a.showcoupon" ).parent().hide();
		
		$( "body" ).bind( "updated_checkout", function() {
			$( "#show-coupon-form" ).click( function() {
				$( ".checkout_coupon" ).show();
				$( "html, body" ).animate( { scrollTop: 0 }, "slow" );
  				return false;
			} );
		} );
	');
}
add_action( 'woocommerce_before_checkout_form', 'skyverge_show_coupon_js' );
/**
 * Show a coupon link above the order details.
**/
function skyverge_show_coupon() {
	echo '<div class="fake-coupon-field"> Have a coupon? <a href="#" id="show-coupon-form">Click here to enter your code</a>.</div>';
}
add_action( 'woocommerce_checkout_after_customer_details', 'skyverge_show_coupon' );

// Hook in - change billing field labels
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     $fields['billing']['billing_company']['label'] = 'Organization Name';
     return $fields;
}

add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category() ) {

        $title = single_cat_title( '', false );

    }

    return $title;

});