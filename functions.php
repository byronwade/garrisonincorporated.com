<?php
/**
 * garrisonincorporated functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package garrisonincorporated
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'garrisonincorporated_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function garrisonincorporated_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on garrisonincorporated, use a find and replace
		 * to change 'garrisonincorporated' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'garrisonincorporated', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'garrisonincorporated' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'garrisonincorporated_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'garrisonincorporated_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function garrisonincorporated_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'garrisonincorporated_content_width', 640 );
}
add_action( 'after_setup_theme', 'garrisonincorporated_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function garrisonincorporated_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'garrisonincorporated' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'garrisonincorporated' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'garrisonincorporated_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function garrisonincorporated_scripts() {
	wp_enqueue_style( 'garrisonincorporated-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'garrisonincorporated-style', 'rtl', 'replace' );

	wp_enqueue_script( 'garrisonincorporated-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'garrisonincorporated_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load stylesheets
function load_css() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');
	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts','load_css');

// Load Javascript
function load_js() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap-js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');


// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
// function my_acf_settings_show_admin( $show_admin ) {
//     return false;
// }

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5f8211cf46850',
		'title' => 'Home',
		'fields' => array(
			array(
				'key' => 'field_5f8217bde53e7',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f8217c5e53e8',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f8217cde53e9',
				'label' => 'Contact',
				'name' => 'contact',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f8217d9e53ea',
				'label' => 'Work Picture',
				'name' => 'work_picture',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f82ace5ecc14',
				'label' => 'Garrison Services Location Map',
				'name' => 'garrison_services_location_map',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'home-page.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	endif;


	// Our custom post type function
	function all_postypes() {

		register_post_type( 'services',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Services' ),
					'singular_name' => __( 'Services' )
				),
				'public' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'services'),
				'show_in_rest' => true,
				'can_export' => true,
				'supports' => array( 'title', 'excerpt', 'thumbnail', 'custom-fields', ),
				'taxonomies' => array( 'category' ),

			)
		);

		register_post_type( 'Projects',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Projects' ),
					'singular_name' => __( 'Projects' )
				),
				'public' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'projects'),
				'show_in_rest' => true,
				'can_export' => true,
				'supports' => array( 'title', 'excerpt', 'thumbnail', 'custom-fields', ),
				'taxonomies' => array( 'post_tag' ),

			)
		);

	}
	// Hooking up our function to theme setup
	add_action( 'init', 'all_postypes' );
