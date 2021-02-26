<?php
// Register Custom Post Type Careers
// Post Type Key: careers
function create_careers_cpt() {

	$labels = array(
		'name' => _x( 'Careers', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Careers', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Careers', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Careers', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Careers Archives', 'textdomain' ),
		'attributes' => __( 'Careers Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Careers:', 'textdomain' ),
		'all_items' => __( 'All Careers', 'textdomain' ),
		'add_new_item' => __( 'Add New Careers', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Careers', 'textdomain' ),
		'edit_item' => __( 'Edit Careers', 'textdomain' ),
		'update_item' => __( 'Update Careers', 'textdomain' ),
		'view_item' => __( 'View Careers', 'textdomain' ),
		'view_items' => __( 'View Careers', 'textdomain' ),
		'search_items' => __( 'Search Careers', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Careers', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Careers', 'textdomain' ),
		'items_list' => __( 'Careers list', 'textdomain' ),
		'items_list_navigation' => __( 'Careers list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Careers list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Careers', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array('title', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'careers', $args );

}
add_action( 'init', 'create_careers_cpt', 0 );
