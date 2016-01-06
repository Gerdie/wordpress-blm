<?php
/**
 * Big Little M functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Big_Little_M
 */

if ( ! function_exists( 'custom_web_design_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function custom_web_design_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Big Little M, use a find and replace
	 * to change 'custom-web-design' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'custom-web-design', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'custom-web-design' ),
	) );

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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'custom_web_design_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'custom_web_design_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function custom_web_design_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'custom_web_design_content_width', 640 );
}
add_action( 'after_setup_theme', 'custom_web_design_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function custom_web_design_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'custom-web-design' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'custom_web_design_widgets_init' );



/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;


/**
 * Enqueue scripts and styles.
 */
function custom_web_design_scripts() {
	wp_enqueue_style( 'custom-web-design-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'custom-web-design-google-fonts', '//fonts.googleapis.com/css?family=Crushed' );

	/**wp_enqueue_script( 'custom-web-design-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	*wp_enqueue_script( 'custom-web-design-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true ); */

	/** wp_register_script( 'bootstrap-js', get_template_directory_uri() . 'bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );

	wp_register_style( 'bootstrap-css', get_template_directory_uri() . 'bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );

	wp_enqueue_script( 'bootstrap-js' );

	wp_enqueue_style( 'bootstrap-css' ); */

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/** bootstrap menu integration
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . 'bootstrap/js/bootstrap.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('jquery.bootstrap.min');
}

add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . 'bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

*/

add_action( 'wp_enqueue_scripts', 'custom_web_design_scripts' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

remove_filter('the_content', 'wpautop');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
?>
