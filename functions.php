<?php
/**
 * Tuhin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tuhin
 */

if ( ! function_exists( 'tuhin_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tuhin_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Top Notch, use a find and replace
         * to change 'tuhin' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'tuhin', get_template_directory() . '/languages' );

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
            'primary_menu' => esc_html__( 'Primary Menu', 'tuhin' ),
            'seo_services' => esc_html__( 'SEO Services', 'tuhin' ),
            'target_market' => esc_html__( 'Target Market', 'tuhin' ),
            'woocommerce_seo' => esc_html__( 'Woocommerce SEO', 'tuhin' ),
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

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'tuhin_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'tuhin_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tuhin_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'tuhin_content_width', 640 );
}
add_action( 'after_setup_theme', 'tuhin_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tuhin_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 1', 'tuhin' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'tuhin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 2', 'tuhin' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'tuhin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 3', 'tuhin' ),
        'id'            => 'sidebar-3',
        'description'   => esc_html__( 'Add widgets here.', 'tuhin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 4', 'tuhin' ),
        'id'            => 'sidebar-4',
        'description'   => esc_html__( 'Add widgets here.', 'tuhin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'tuhin' ),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'tuhin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Contact Sidebar', 'tuhin' ),
        'id'            => 'contact-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'tuhin' ),
        'before_widget' => '<div id="%1$s" class="widget col-md-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'tuhin_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tuhin_scripts() {
    wp_enqueue_style('google-font-css', '//fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700,900&amp;display=swap');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('navigation-css', get_template_directory_uri() . '/assets/lib/nav/css/navigation.css');
    wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/lib/fontawesome/css/all.min.css');
    wp_enqueue_style('owl.carousel-css', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('owl.theme-css', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.theme.default.min.css');
    wp_enqueue_style('cubeportfolio', get_template_directory_uri() . '/assets/lib/cubeportfolio/css/cubeportfolio.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css',array(), '1.0.1');
    wp_enqueue_style('tuhin-style', get_stylesheet_uri(),array(), '1.0.1');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('bg-deep-css', get_template_directory_uri() . '/assets/css/bg-deep-black.css');

    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js', array(), '', true);
    wp_enqueue_script('jquery-migrate-js', get_template_directory_uri() . '/assets/js/jquery-migrate-3.1.0.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '4.2.0', true);
    wp_enqueue_script('navigation-js', get_template_directory_uri() . '/assets/lib/nav/js/navigation.min.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('jquery-ui', '//code.jquery.com/ui/1.11.4/jquery-ui.js',array('jquery'),'1.0.0', true);
    wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('cubeportfolio.min-js', get_template_directory_uri() . '/assets/lib/cubeportfolio/js/jquery.cubeportfolio.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('ajaxchimp.min-js', get_template_directory_uri() . '/assets/lib/ajaxchimp/jquery.ajaxchimp.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'tuhin_scripts' );

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
/**
 * Plugin Activation
 */
require_once get_template_directory() . '/inc/plugin-activation.php';
require_once get_template_directory() . '/inc/tuhin-helper.php';

function add_class_to_category( $thelist, $separator, $parents){
    $class_to_add = 'tag-link';
    return str_replace('<a href="',  '<a class="'. $class_to_add. '" href="', $thelist);
}

add_filter('the_category', __NAMESPACE__ . '\\add_class_to_category',10,3);

function tuhin_pagination()
{
    global $wp_query;
    $links = paginate_links(array(
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'list',
        'mid_size' => 3,
        'prev_text' => __('<i class="fa fa-arrow-left"></i>', 'tuhin'),
        'next_text' => __('<i class="fa fa-arrow-right"></i>', 'tuhin'),

    ));
    $links = str_replace("page-numbers", "post-navigation", $links);
    echo wp_kses_post($links);

}

/**
 * Comments Field Modify
 */
function tuhin_comment_fields($fields){

    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'tuhin_comment_fields');

function tuhin_process_section_type($part){
    global $post;
    if ($post && 'section'== $post->post_type){
        $section_type = get_post_meta($post->ID,'tuhin_section_type',true);
        $sections = array('banner','about','services','skills','blog','newsletter','testimonial','contact');
        foreach ($sections as $section){
            if ("section-{$section}.php"==$part['part'] && $section!=$section_type){
                return false;
            }
        }

    }
    return $part;
}

add_filter('piklist_part_process','tuhin_process_section_type');