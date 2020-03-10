<?php
/**
 * Register a custom post type called "book" and "event".
 *
 * @see get_post_type_labels() for label keys.
 */

function ecommerce_theme_init_post_types() {
    /**
     * book 
     */
    $labels = array(
        'name'                  => esc_html_x( 'Books', 'Post type general name', 'ecommerce-theme' ),
        'singular_name'         => esc_html_x( 'Book', 'Post type singular name', 'ecommerce-theme' ),
        'menu_name'             => esc_html_x( 'Books', 'Admin Menu text', 'ecommerce-theme' ),
        'name_admin_bar'        => esc_html_x( 'Book', 'Add New on Toolbar', 'ecommerce-theme' ),
        'add_new'               => esc_html__( 'Add New', 'ecommerce-theme' ),
        'add_new_item'          => esc_html__( 'Add New Book', 'ecommerce-theme' ),
        'new_item'              => esc_html__( 'New Book', 'ecommerce-theme' ),
        'edit_item'             => esc_html__( 'Edit Book', 'ecommerce-theme' ),
        'view_item'             => esc_html__( 'View Book', 'ecommerce-theme' ),
        'all_items'             => esc_html__( 'All Books', 'ecommerce-theme' ),
        'search_items'          => esc_html__( 'Search Books', 'ecommerce-theme' ),
        'parent_item_colon'     => esc_html__( 'Parent Books:', 'ecommerce-theme' ),
        'not_found'             => esc_html__( 'No books found.', 'ecommerce-theme' ),
        'not_found_in_trash'    => esc_html__( 'No books found in Trash.', 'ecommerce-theme' ),
        'featured_image'        => esc_html_x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ecommerce-theme' ),
        'set_featured_image'    => esc_html_x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ecommerce-theme' ),
        'remove_featured_image' => esc_html_x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ecommerce-theme' ),
        'use_featured_image'    => esc_html_x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ecommerce-theme' ),
        'archives'              => esc_html_x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ecommerce-theme' ),
        'insert_into_item'      => esc_html_x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ecommerce-theme' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ecommerce-theme' ),
        'filter_items_list'     => esc_html_x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ecommerce-theme' ),
        'items_list_navigation' => esc_html_x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ecommerce-theme' ),
        'items_list'            => esc_html_x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ecommerce-theme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'books' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-book',
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'ecommerce_theme_book', $args );
    
    /**
     * events 
     */
    $labels = array(
        'name'                  => esc_html__( 'Events', 'ecommerce-theme' ),
        'singular_name'         => esc_html__( 'Event', 'ecommerce-theme' ),
        'menu_name'             => esc_html__( 'Events', 'ecommerce-theme' ),
        'name_admin_bar'        => esc_html__( 'Event', 'ecommerce-theme' ),
        'add_new'               => esc_html__( 'Add New', 'ecommerce-theme' ),
        'add_new_item'          => esc_html__( 'Add New Event', 'ecommerce-theme' ),
        'new_item'              => esc_html__( 'New Event', 'ecommerce-theme' ),
        'edit_item'             => esc_html__( 'Edit Event', 'ecommerce-theme' ),
        'view_item'             => esc_html__( 'View Event', 'ecommerce-theme' ),
        'all_items'             => esc_html__( 'All Events', 'ecommerce-theme' ),
        'search_items'          => esc_html__( 'Search Events', 'ecommerce-theme' ),
        'parent_item_colon'     => esc_html__( 'Parent Events:', 'ecommerce-theme' ),
        'not_found'             => esc_html__( 'No events found.', 'ecommerce-theme' ),
        'not_found_in_trash'    => esc_html__( 'No events found in Trash.', 'ecommerce-theme' ),
        'archives'              => esc_html__( 'Event archives', 'ecommerce-theme' ),
        'insert_into_item'      => esc_html__( 'Insert into Event', 'ecommerce-theme' ),
        'uploaded_to_this_item' => esc_html__( 'Uploaded to this event', 'ecommerce-theme' ),
        'filter_items_list'     => esc_html__( 'Filter events list', 'ecommerce-theme' ),
        'items_list_navigation' => esc_html__( 'Events list navigation',  'ecommerce-theme' ),
        'items_list'            => esc_html__( 'Events list','ecommerce-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-book',
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'ecommerce_theme_event', $args );
}

add_action( 'init', 'ecommerce_theme_init_post_types' );
