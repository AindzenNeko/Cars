<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

require_once get_template_directory() . '/inc/redux-options.php';

function geniuscourses_cars_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on geniuscourses-cars, use a find and replace
		* to change 'geniuscourses-cars' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'geniuscourses-cars', get_template_directory() . '/languages' );

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
			'header-menu' => esc_html__( 'Header menu', 'geniuscourses-cars' ),
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
			'geniuscourses_cars_custom_background_args',
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
add_action( 'after_setup_theme', 'geniuscourses_cars_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function geniuscourses_cars_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'geniuscourses_cars_content_width', 640 );
}
add_action( 'after_setup_theme', 'geniuscourses_cars_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function geniuscourses_cars_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'geniuscourses-cars' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'geniuscourses-cars' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'geniuscourses_cars_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function geniuscourses_cars_scripts() {
	wp_enqueue_style('geniuscourses-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css', [], true, 'all');
	wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/js/lib/owlcarousel/assets/owl.carousel.min.css', [], true, 'all');
	wp_enqueue_style('tempusdominus-bootstrap-4', get_template_directory_uri().'/assets/js/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', [], true, 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', [], true, 'all');
	wp_enqueue_style('geniuscourses-general', get_template_directory_uri().'/assets/css/general.css', [], true, 'all');
	wp_enqueue_style('geniuscourses-fonts', gc_fonts_url(), [], true, 'all');


	wp_enqueue_script('bootstrap.bundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', ['jquery'], '1.0', true);
	wp_enqueue_script('easing', get_template_directory_uri().'/assets/js/lib/easing/easing.min.js', ['jquery'], '1.0', true);
	wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/js/lib/waypoints/waypoints.min.js', ['jquery'], '1.0', true);
	wp_enqueue_script('owlcarousel', get_template_directory_uri().'/assets/js/lib/owlcarousel/owl.carousel.min.js', ['jquery'], '1.0', true);
	wp_enqueue_script('moment', get_template_directory_uri().'/assets/js/lib/tempusdominus/js/moment.min.js', ['jquery'], '1.0', true);
	wp_enqueue_script('moment-timezone', get_template_directory_uri().'/assets/js/lib/tempusdominus/js/moment-timezone.min.js', ['jquery'], '1.0', true);
	wp_enqueue_script('tempusdominus-bootstrap-4', get_template_directory_uri().'/assets/js/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', ['jquery'], '1.0', true);
	wp_enqueue_script('geniuscourses-main', get_template_directory_uri().'/assets/js/main.js', ['jquery'], '1.0', true);
}

add_action('wp_enqueue_scripts', 'geniuscourses_cars_scripts');

function gc_fonts_url() {
	$fonts_url = '';
	$families = array();
	$families[] = 'Oswald:wght@400;500;600;700';
	$families[] = 'Rubik';

	$query_args = array(
		'family' => urlencode(implode('|', $families))
	);
	$fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
	return esc_url_raw($fonts_url);
}

function geniuscourses_add_li_class($classes, $item, $args) {
	if(isset($args->item_styles)) {
		$classes[] = $args->item_styles;
	}

	$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(substr($item->url, -1) != '/') {
		$item->url .= '/';
	}
	if($item->url == $current_url) {
		$classes[] = $args->item_styles.' active';
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'geniuscourses_add_li_class', 1, 3);