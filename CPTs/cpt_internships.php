
<?php

// Register Custom Post Type Internship
// Post Type Key: internship
function create_internship_cpt() {

	$labels = array(
		'name' => _x( 'Internships', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Internship', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Internships', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Internship', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Internship Archives', 'textdomain' ),
		'attributes' => __( 'Internship Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Internship:', 'textdomain' ),
		'all_items' => __( 'All Internships', 'textdomain' ),
		'add_new_item' => __( 'Add New Internship', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Internship', 'textdomain' ),
		'edit_item' => __( 'Edit Internship', 'textdomain' ),
		'update_item' => __( 'Update Internship', 'textdomain' ),
		'view_item' => __( 'View Internship', 'textdomain' ),
		'view_items' => __( 'View Internships', 'textdomain' ),
		'search_items' => __( 'Search Internship', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Internship', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Internship', 'textdomain' ),
		'items_list' => __( 'Internships list', 'textdomain' ),
		'items_list_navigation' => __( 'Internships list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Internships list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Internship', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-learn-more',
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
	register_post_type( 'internship', $args );

}
add_action( 'init', 'create_internship_cpt', 0 );
