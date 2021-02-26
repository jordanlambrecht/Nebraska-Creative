<?php

// Register Custom Post Type FAQ
function create_faq_cpt() {

	$labels = array(
		'name' => _x( 'FAQ', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'FAQ', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'FAQ', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'FAQ', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'FAQ Archives', 'textdomain' ),
		'attributes' => __( 'FAQ Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent FAQ:', 'textdomain' ),
		'all_items' => __( 'All FAQ', 'textdomain' ),
		'add_new_item' => __( 'Add New FAQ', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New FAQ', 'textdomain' ),
		'edit_item' => __( 'Edit FAQ', 'textdomain' ),
		'update_item' => __( 'Update FAQ', 'textdomain' ),
		'view_item' => __( 'View FAQ', 'textdomain' ),
		'view_items' => __( 'View FAQ', 'textdomain' ),
		'search_items' => __( 'Search FAQ', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into FAQ', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'textdomain' ),
		'items_list' => __( 'FAQ list', 'textdomain' ),
		'items_list_navigation' => __( 'FAQ list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter FAQ list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'FAQ', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-flag',
		'supports' => array('title', 'editor', 'revisions'),
		'taxonomies' => array(),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => false,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'create_faq_cpt', 0 );
