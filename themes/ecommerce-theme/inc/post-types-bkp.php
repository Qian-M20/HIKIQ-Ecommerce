<?php
/**
 * Register a custom post type called "lifestyle"
 *
 * @see get_post_type_labels() for label keys.
 */

function ecommerce_theme_init_post_types() {
    /**
     * lifestyle 
     */
    $labels = array(
        'name'                  => esc_html_x( 'Lifestyles', 'Post type general name', 'ecommerce-theme' ),
        'singular_name'         => esc_html_x( 'Lifestyle', 'Post type singular name', 'ecommerce-theme' ),
        'menu_name'             => esc_html_x( 'Lifestyles', 'Admin Menu text', 'ecommerce-theme' ),
        'name_admin_bar'        => esc_html_x( 'Lifestyle', 'Add New on Toolbar', 'ecommerce-theme' ),
        'add_new'               => esc_html__( 'Add New', 'ecommerce-theme' ),
        'add_new_item'          => esc_html__( 'Add New Lifestyle', 'ecommerce-theme' ),
        'new_item'              => esc_html__( 'New Lifestyle', 'ecommerce-theme' ),
        'edit_item'             => esc_html__( 'Edit Lifestyle', 'ecommerce-theme' ),
        'view_item'             => esc_html__( 'View Lifestyle', 'ecommerce-theme' ),
        'all_items'             => esc_html__( 'All Lifestyles', 'ecommerce-theme' ),
        'search_items'          => esc_html__( 'Search Lifestyles', 'ecommerce-theme' ),
        'parent_item_colon'     => esc_html__( 'Parent Lifestyles:', 'ecommerce-theme' ),
        'not_found'             => esc_html__( 'No lifestyles found.', 'ecommerce-theme' ),
        'not_found_in_trash'    => esc_html__( 'No lifestyles found in Trash.', 'ecommerce-theme' ),
        'featured_image'        => esc_html_x( 'Lifestyle Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ecommerce-theme' ),
        'set_featured_image'    => esc_html_x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ecommerce-theme' ),
        'remove_featured_image' => esc_html_x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ecommerce-theme' ),
        'use_featured_image'    => esc_html_x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ecommerce-theme' ),
        'archives'              => esc_html_x( 'Lifestyle archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ecommerce-theme' ),
        'insert_into_item'      => esc_html_x( 'Insert into festyle', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ecommerce-theme' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this lifestyle', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ecommerce-theme' ),
        'filter_items_list'     => esc_html_x( 'Filter lifestyles list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ecommerce-theme' ),
        'items_list_navigation' => esc_html_x( 'Lifestyles list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ecommerce-theme' ),
        'items_list'            => esc_html_x( 'Lifestyles list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ecommerce-theme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'lifestyles' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-book',
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'ecommerce_theme_book', $args );
    
}

add_action( 'init', 'ecommerce_theme_init_post_types' );
