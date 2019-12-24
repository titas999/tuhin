<?php
function cptui_register_my_cpts() {
    /**
     * Post Type: Sections.
     */
    $labels = array(
        "name" => __( "Sections", "tuhin" ),
        "singular_name" => __( "Section", "tuhin" ),
    );
    $args = array(
        "label" => __( "Sections", "tuhin" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "section", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-menu-alt3",
        "supports" => array( "title", "thumbnail" ),
    );
    register_post_type( "section", $args );

    /**
     * Post Type: Services
     */
    $labels = array(
        "name" => __( "Services", "tuhin" ),
        "singular_name" => __( "Service", "tuhin" ),
    );
    $args = array(
        "label" => __( "Services", "tuhin" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "service", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-layout",
        "supports" => array( "title", "editor", "thumbnail" ),
        "taxonomies" => array( "category" ),
    );
    register_post_type( "service", $args );

    /**
     * Post Type: Testimonials.
     */
    $labels = array(
        "name" => __( "Testimonials", "tuhin" ),
        "singular_name" => __( "Testimonial", "tuhin" ),
    );
    $args = array(
        "label" => __( "Testimonials", "tuhin" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "testimonial", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-book",
        "supports" => array( "title", "editor" ,"thumbnail" ),
    );
    register_post_type( "testimonial", $args );
    /**
     * Post Type: Portfolios.
     */
    $labels = array(
        "name" => __( "Portfolios", "tuhin" ),
        "singular_name" => __( "Portfolio", "tuhin" ),
    );
    $args = array(
        "label" => __( "Portfolios", "tuhin" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "portfolio", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-images-alt2",
        "supports" => array( "title", "editor", "thumbnail" ),
        "taxonomies" => array( "category" ),
    );
    register_post_type( "portfolio", $args );



//    /**
//     * Post Type: Web Services
//     */
//    $labels = array(
//        "name" => __( "Web Service", "tuhin" ),
//        "singular_name" => __( "Web Service", "tuhin" ),
//    );
//    $args = array(
//        "label" => __( "Web Service", "tuhin" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "delete_with_user" => false,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => true,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "exclude_from_search" => false,
//        "capability_type" => "post",
//        "map_meta_cap" => true,
//        "hierarchical" => false,
//        "rewrite" => array( "slug" => "web-services", "with_front" => true ),
//        "query_var" => true,
//        "menu_icon" => "dashicons-laptop",
//        "supports" => array( "title", "editor", "thumbnail" ),
//        "taxonomies" => array( "category" ),
//    );
//    register_post_type( "webapps", $args );
//
//    /**
//     * Post Type: Apps Services
//     */
//    $labels = array(
//        "name" => __( "App Services", "tuhin" ),
//        "singular_name" => __( "App Service", "tuhin" ),
//    );
//    $args = array(
//        "label" => __( "App Services", "tuhin" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "delete_with_user" => false,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => true,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "exclude_from_search" => false,
//        "capability_type" => "post",
//        "map_meta_cap" => true,
//        "hierarchical" => false,
//        "rewrite" => array( "slug" => "app-service", "with_front" => true ),
//        "query_var" => true,
//        "menu_icon" => "dashicons-smartphone",
//        "supports" => array( "title", "editor", "thumbnail" ),
//        "taxonomies" => array( "category" ),
//    );
//    register_post_type( "appservice", $args );
//
//    /**
//     * Post Type: Digital Marketing
//     */
//    $labels = array(
//        "name" => __( "Digital Marketing", "tuhin" ),
//        "singular_name" => __( "Digital Marketing", "tuhin" ),
//    );
//    $args = array(
//        "label" => __( "Digital Marketing", "tuhin" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "delete_with_user" => false,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => true,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "exclude_from_search" => false,
//        "capability_type" => "post",
//        "map_meta_cap" => true,
//        "hierarchical" => false,
//        "rewrite" => array( "slug" => "digital-marketing-service", "with_front" => true ),
//        "query_var" => true,
//        "menu_icon" => "dashicons-chart-area",
//        "supports" => array( "title", "editor", "thumbnail" ),
//        "taxonomies" => array( "category" ),
//    );
//    register_post_type( "dmservice", $args );
//
//    /**
//     * Post Type: SEO Services
//     */
//    $labels = array(
//        "name" => __( "SEO Services", "tuhin" ),
//        "singular_name" => __( "SEO Services", "tuhin" ),
//    );
//    $args = array(
//        "label" => __( "SEO Services", "tuhin" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "delete_with_user" => false,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => true,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "exclude_from_search" => false,
//        "capability_type" => "post",
//        "map_meta_cap" => true,
//        "hierarchical" => false,
//        "rewrite" => array( "slug" => "seo-services", "with_front" => true ),
//        "query_var" => true,
//        "menu_icon" => "dashicons-networking",
//        "supports" => array( "title", "editor", "thumbnail" ),
//        "taxonomies" => array( "category" ),
//    );
//    register_post_type( "seoservices", $args );
//
//    /**
//     * Post Type: PPC Marketing
//     */
//    $labels = array(
//        "name" => __( "PPC Services", "tuhin" ),
//        "singular_name" => __( "PPC Services", "tuhin" ),
//    );
//    $args = array(
//        "label" => __( "PPC Services", "tuhin" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "delete_with_user" => false,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => true,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "exclude_from_search" => false,
//        "capability_type" => "post",
//        "map_meta_cap" => true,
//        "hierarchical" => false,
//        "rewrite" => array( "slug" => "ppc-services", "with_front" => true ),
//        "query_var" => true,
//        "menu_icon" => "dashicons-pressthis",
//        "supports" => array( "title", "editor", "thumbnail" ),
//        "taxonomies" => array( "category" ),
//    );
//    register_post_type( "ppcservices", $args );
//
//    /**
//     * Post Type: Social Media Marketing
//     */
//    $labels = array(
//        "name" => __( "Social Media", "tuhin" ),
//        "singular_name" => __( "Social Media", "tuhin" ),
//    );
//    $args = array(
//        "label" => __( "Social Media", "tuhin" ),
//        "labels" => $labels,
//        "description" => "",
//        "public" => true,
//        "publicly_queryable" => true,
//        "show_ui" => true,
//        "delete_with_user" => false,
//        "show_in_rest" => true,
//        "rest_base" => "",
//        "rest_controller_class" => "WP_REST_Posts_Controller",
//        "has_archive" => true,
//        "show_in_menu" => true,
//        "show_in_nav_menus" => true,
//        "exclude_from_search" => false,
//        "capability_type" => "post",
//        "map_meta_cap" => true,
//        "hierarchical" => false,
//        "rewrite" => array( "slug" => "smm-services", "with_front" => true ),
//        "query_var" => true,
//        "menu_icon" => "dashicons-share",
//        "supports" => array( "title", "editor", "thumbnail" ),
//        "taxonomies" => array( "category" ),
//    );
//    register_post_type( "smmservices", $args );


}
add_action( 'init', 'cptui_register_my_cpts' );