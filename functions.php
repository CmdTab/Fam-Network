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
		'months',
		array('post', 'podcast', 'culture', 'webinar'),
		array(
			'label' => __( 'Months' ),
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
		'description' => 'Monthly podcasts',
		'public' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'menu_position' => 5,
		'taxonomies' => array('category', 'months'),
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'author'),
	);
	register_post_type( 'podcast', $args );
	$args = array(
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
		'label'  => 'Good Advice',
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
	register_post_type( 'advice', $args );
	$args = array(
		'label'  => 'Healthy Marriage',
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
	register_post_type( 'marriage', $args );
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
/*// Separete Login form and registration form */
add_action('woocommerce_before_customer_login_form','load_registration_form', 2);
	function load_registration_form(){
	if(isset($_GET['action'])=='register'){
		woocommerce_get_template( 'myaccount/form-registration.php' );
	}
}

// Display 12 products at a time
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );
