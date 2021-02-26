<?php
// Register Custom Post Type Freelancer
// Post Type Key: freelancers
function create_freelancer_cpt() {

	$labels = array(
		'name' => _x( 'Freelancers', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Freelancer', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Freelancers', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Freelancer', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Freelancer Archives', 'textdomain' ),
		'attributes' => __( 'Freelancer Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Freelancer:', 'textdomain' ),
		'all_items' => __( 'All Freelancers', 'textdomain' ),
		'add_new_item' => __( 'Add New Freelancer', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Freelancer', 'textdomain' ),
		'edit_item' => __( 'Edit Freelancer', 'textdomain' ),
		'update_item' => __( 'Update Freelancer', 'textdomain' ),
		'view_item' => __( 'View Freelancer', 'textdomain' ),
		'view_items' => __( 'View Freelancers', 'textdomain' ),
		'search_items' => __( 'Search Freelancer', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Freelancer', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Freelancer', 'textdomain' ),
		'items_list' => __( 'Freelancers list', 'textdomain' ),
		'items_list_navigation' => __( 'Freelancers list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Freelancers list', 'textdomain' ),
	);
	$rewrite = array(
		'slug' => 'freelancers/',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Freelancer', 'textdomain' ),
		'description' => __( 'A curated list of Nebraskan freelancers', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-store',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments', 'trackbacks', 'page-attributes', 'custom-fields'),
		'taxonomies' => array('industry', 'city', 'abilities'),
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
		'rewrite' => $rewrite,
	);
	register_post_type( 'freelancers', $args );

}
add_action( 'init', 'create_freelancer_cpt', 0 );

 ?>
