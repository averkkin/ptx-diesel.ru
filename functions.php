<?php
/**
 * ptz-diesel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ptz-diesel
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ptz_diesel_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ptz-diesel, use a find and replace
		* to change 'ptz-diesel' to the name of your theme in all the template files.
		*/

    // Off textdomain
    //load_theme_textdomain( 'ptz-diesel', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
    // Off rss lents
	// add_theme_support( 'automatic-feed-links' );

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
			'menu-1' => esc_html__( 'Primary', 'ptz-diesel' ),
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
    // Off Background
//	add_theme_support(
//		'custom-background',
//		apply_filters(
//			'ptz_diesel_custom_background_args',
//			array(
//				'default-color' => 'ffffff',
//				'default-image' => '',
//			)
//		)
//	);

	// Add theme support for selective refresh for widgets.
//	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
//	add_theme_support(
//		'custom-logo',
//		array(
//			'height'      => 250,
//			'width'       => 250,
//			'flex-width'  => true,
//			'flex-height' => true,
//		)
//	);
}
add_action( 'after_setup_theme', 'ptz_diesel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ptz_diesel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ptz_diesel_content_width', 640 );
}
add_action( 'after_setup_theme', 'ptz_diesel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ptz_diesel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ptz-diesel' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ptz-diesel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ptz_diesel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ptz_diesel_scripts() {

	wp_enqueue_style( 'ptz-diesel-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'ptz-diesel-style', 'rtl', 'replace' );

    wp_enqueue_style(
        'ptz-diesel-main',
        get_template_directory_uri() . '/src/styles/style.css',
        [],
        filemtime( get_template_directory() . '/src/styles/style.css' )
    );

	wp_enqueue_script( 'ptz-diesel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'ptz_diesel_scripts' );


