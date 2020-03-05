<?php
/**
 * E-commerce Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package E-commerce_Theme
 */

if ( ! function_exists( 'ecommerce_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ecommerce_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on E-commerce Theme, use a find and replace
		 * to change 'ecommerce-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ecommerce-theme', get_template_directory() . '/languages' );

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
		
		// This theme uses wp_nav_menu() in three locations.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ecommerce-theme' ),
				'footer' => esc_html__( 'Footer Menu', 'ecommerce-theme' ),
				'social' => esc_html__( 'Social Links Menu', 'ecommerce-theme' ),
			)
		);
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */

		
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		/**
		 * Add theme support for selective refresh for widgets.
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		/**
		 * Add theme support for align-wide.
		 */
		add_theme_support( 'align-wide' );

		/**
		 * Add theme support for wp block styles.
		 */
		add_theme_support( 'wp-block-styles' );
		
		/**
		 * Add theme support for custom color Palettes
		 */
		
		add_theme_support( 'editor-color-palette', array(
			array(
				'name' => __( 'black blue', 'ecommerce-theme' ),
				'slug' => 'black-blue',
				'color' => '#09090B',
			),
			array(
				'name' => __( 'dark cyan', 'ecommerce-theme' ),
				'slug' => 'dark-cyan',
				'color' => '#0ba987',
			),
			array(
				'name' => __( 'vivid red', 'ecommerce-theme' ),
				'slug' => 'vivid-red',
				'color' => '#f10205',
			),
			array(
				'name' => __( 'strong red', 'ecommerce-theme' ),
				'slug' => 'strong-red',
				'color' => '#c11e1c',
			),
			array(
				'name' => __( 'very light gray', 'ecommerce-theme' ),
				'slug' => 'very-light-gray',
				'color' => '#f1f1f1',
			),
			array(
				'name' => __( 'black', 'ecommerce-theme' ),
				'slug' => 'black',
				'color' => '#000',
			),
			array(
				'name' => __( 'white', 'ecommerce-theme' ),
				'slug' => 'white',
				'color' => '#FFF',
			),
			array(
				'name' => __( 'very light yellow', 'ecommerce-theme' ),
				'slug' => 'very-light-yellow',
				'color' => '#fffa81',
			)
		

		) );

		/**
		 * add theme support for custom font size choice 
		 */

		add_theme_support( 'editor-font-sizes', array(
			array(
				'name' => __( 'Small', 'ecommerce-themeLangDomain' ),
				'size' => 16,
				'slug' => 'small'
			),
			array(
				'name' => __( 'Regular', 'ecommerce-themeLangDomain' ),
				'size' => 22,
				'slug' => 'regular'
			),
			array(
				'name' => __( 'Large', 'ecommerce-themeLangDomain' ),
				'size' => 36,
				'slug' => 'large'
			),
			array(
				'name' => __( 'Huge', 'ecommerce-themeLangDomain' ),
				'size' => 50,
				'slug' => 'huge'
			)
		) );

		/**
		 * add theme support disable font size choice 
		 */

		add_theme_support('disable-custom-font-sizes');

		/**
		 * add theme support for disabling custom color choice 
		 */ 
		add_theme_support( 'disable-custom-colors' );
		
		/**
		 * add theme support for custom font size choice 
		 */




		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

add_action( 'after_setup_theme', 'ecommerce_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ecommerce_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ecommerce_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ecommerce_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ecommerce_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ecommerce-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ecommerce-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ecommerce_theme_widgets_init' );

// add custom widget area in the header
function wpb_widgets_init() {

    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );

}

add_action( 'widgets_init', 'wpb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ecommerce_theme_scripts() {
	wp_enqueue_style( 'ecommerce-theme-style', get_stylesheet_uri() );
	
	// Enqueue foundation min style ********************************************

	wp_enqueue_style( 
		'ecommerce-theme-foundation', 
		get_template_directory_uri() .'/assets/css/vendor/foundation.min.css', 
		null, 
		'6.5.1' 
	);

	// Enqueue custom style ********************************************
	wp_enqueue_style(
		'custom-style',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',
		array()
	);

	// Enqueue sidebar style ********************************************
	wp_enqueue_style(
		'sidebar-style',
		get_stylesheet_directory_uri() . '/assets/css/sidebar.css',
		array()
	);

	// Enqueue shop page style ********************************************
	wp_enqueue_style(
		'shop-style',
		get_stylesheet_directory_uri() . '/assets/css/shop.css',
		array()
	);

	// Enqueue what input js
	wp_enqueue_script ( 'sample-theme-what-input', get_template_directory_uri() .'/assets/js/vendor/what-input.js', array('jquery'), '6.5.1', true);

	// Enqueue foundation min js
	wp_enqueue_script ( 'sample-theme-foundation', get_template_directory_uri() .'/assets/js/vendor/foundation.min.js', array('jquery','ecommerce-theme-what-input'), '6.5.1', true);

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ecommerce_theme_scripts' );


/**
 * Enqueue fontawesome
 */
wp_register_script( 'FontAwesome', 'https://use.fontawesome.com/releases/v5.8.2/js/all.js', null, null, true );
wp_enqueue_script('FontAwesome');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom block editor
 */
require get_template_directory() . '/inc/block-editor.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-hooks.php';

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

