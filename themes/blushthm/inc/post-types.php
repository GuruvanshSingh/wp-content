<?php
/**
 * Registering custom-post types
 */

function blushthm_init() {
    $labels = array(
        'name'                  => _x( 'Cakes', 'Post type general name', 'blushthm' ),
        'singular_name'         => _x( 'Cake', 'Post type singular name', 'blushthm' ),
        'menu_name'             => _x( 'Cakes', 'Admin Menu text', 'blushthm' ),
        'name_admin_bar'        => _x( 'Cake', 'Add New on Toolbar', 'blushthm' ),
        'add_new'               => __( 'Add New', 'blushthm' ),
        'add_new_item'          => __( 'Add New cake', 'blushthm' ),
        'new_item'              => __( 'New cake', 'blushthm' ),
        'edit_item'             => __( 'Edit cake', 'blushthm' ),
        'view_item'             => __( 'View cake', 'blushthm' ),
        'all_items'             => __( 'All cakes', 'blushthm' ),
        'search_items'          => __( 'Search cakes', 'blushthm' ),
        'parent_item_colon'     => __( 'Parent cakes:', 'blushthm' ),
        'not_found'             => __( 'No cakes found.', 'blushthm' ),
        'not_found_in_trash'    => __( 'No cakes found in Trash.', 'blushthm' ),
        'featured_image'        => _x( 'Cake Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blushthm' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blushthm' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blushthm' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blushthm' ),
        'archives'              => _x( 'Cake archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'blushthm' ),
        'insert_into_item'      => _x( 'Insert into cake', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blushthm' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this cake', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blushthm' ),
        'filter_items_list'     => _x( 'Filter cakes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blushthm' ),
        'items_list_navigation' => _x( 'Cakes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blushthm' ),
        'items_list'            => _x( 'Cakes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blushthm' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Cake custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cakes' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-buddicons-community',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true
    );
    
    register_post_type( 'blushthm_cake', $args );
}
add_action( 'init', 'blushthm_init' );