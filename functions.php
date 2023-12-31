<?php
/**
 * saintsoliderz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package saintsoliderz
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
function saintsoliderz_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on saintsoliderz, use a find and replace
		* to change 'saintsoliderz' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'saintsoliderz', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'saintsoliderz' ),
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
			'saintsoliderz_custom_background_args',
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
add_action( 'after_setup_theme', 'saintsoliderz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function saintsoliderz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'saintsoliderz_content_width', 640 );
}
add_action( 'after_setup_theme', 'saintsoliderz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saintsoliderz_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'saintsoliderz' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'saintsoliderz' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'saintsoliderz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function saintsoliderz_scripts() {
	wp_enqueue_style( 'saintsoliderz-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'saintsoliderz-style', 'rtl', 'replace' );

	wp_enqueue_script( 'saintsoliderz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	   wp_enqueue_script('saintsoliderz-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery.js', array(), null, true);
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array(), null, true);
   wp_enqueue_script('jquery-gsap', get_template_directory_uri() . '/assets/js/gsap.js', array(), null, true);
   wp_enqueue_script('gsap-scroll-smoother', get_template_directory_uri() . '/assets/js/gsap-scroll-smoother.js', array(), null, true);
   wp_enqueue_script('gsap-scroll-trigger', get_template_directory_uri() . '/assets/js/gsap-scroll-trigger.js', array(), null, true);
   wp_enqueue_script('gsap-scroll-to-plugin', get_template_directory_uri() . '/assets/js/gsap-scroll-to-plugin.js', array(), null, true);
   wp_enqueue_script('gsap-split-text', get_template_directory_uri() . '/assets/js/gsap-split-text.js', array(), null, true);

   wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), null, true);
   wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array(), null, true);
   wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array(), null, true);
   wp_enqueue_script('pagepiling', get_template_directory_uri() . '/assets/js/pagepiling.js', array(), null, true);
   wp_enqueue_script('headroom', get_template_directory_uri() . '/assets/js/headroom.min.js', array(), null, true);
   wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array(), null, true);
   wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array(), null, true);
   wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array(), null, true);
   wp_enqueue_script('hammer', get_template_directory_uri() . '/assets/js/hammer.js', array(), null, true);
   wp_enqueue_script('matter', get_template_directory_uri() . '/assets/js/matter.js', array(), null, true);
   wp_enqueue_script('throwable', get_template_directory_uri() . '/assets/js/throwable.js', array(), null, true);
   wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array(), null, true);
   wp_enqueue_script('imagesloaded-pkgd', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array(), null, true);

   wp_enqueue_script('theme-settings', get_template_directory_uri() . '/assets/js/theme-settings.js', array(), null, true);
   wp_enqueue_script('animated-headline', get_template_directory_uri() . '/assets/js/animated-headline.js', array(), null, true);
   wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'saintsoliderz_scripts' );

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

