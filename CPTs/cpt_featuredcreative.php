<?php


function create_featuredcreative_cpt() {
	$labels = array(
		'name' => _x( 'Featured Creatives', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Featured Creative', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Featured Creatives', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Featured Creative', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Featured Creative Archives', 'textdomain' ),
		'attributes' => __( 'Featured Creative Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Featured Creative:', 'textdomain' ),
		'all_items' => __( 'All Featured Creatives', 'textdomain' ),
		'add_new_item' => __( 'Add New Featured Creative', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Featured Creative', 'textdomain' ),
		'edit_item' => __( 'Edit Featured Creative', 'textdomain' ),
		'update_item' => __( 'Update Featured Creative', 'textdomain' ),
		'view_item' => __( 'View Featured Creative', 'textdomain' ),
		'view_items' => __( 'View Featured Creatives', 'textdomain' ),
		'search_items' => __( 'Search Featured Creative', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Featured Creative', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Featured Creative', 'textdomain' ),
		'items_list' => __( 'Featured Creatives list', 'textdomain' ),
		'items_list_navigation' => __( 'Featured Creatives list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Featured Creatives list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Featured Creative', 'textdomain' ),
		'description' => __( 'Featured bodies of work to display on the home page', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-view-site',
		'supports' => array('title', 'revisions', 'trackbacks'),
		'taxonomies' => array(),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => false,
	);
	register_post_type( 'featuredcreative', $args );
}
add_action( 'init', 'create_featuredcreative_cpt', 0 );
// Register Taxonomy Meduim
function create_meduim_tax() {

	$labels = array(
		'name'              => _x( 'Mediums', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Meduim', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Mediums', 'textdomain' ),
		'all_items'         => __( 'All Mediums', 'textdomain' ),
		'parent_item'       => __( 'Parent Meduim', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Meduim:', 'textdomain' ),
		'edit_item'         => __( 'Edit Meduim', 'textdomain' ),
		'update_item'       => __( 'Update Meduim', 'textdomain' ),
		'add_new_item'      => __( 'Add New Meduim', 'textdomain' ),
		'new_item_name'     => __( 'New Meduim Name', 'textdomain' ),
		'menu_name'         => __( 'Meduim', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'What was used to create this piece', 'textdomain' ),
		'hierarchical' => false,
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'rewrite' => false,
	);
	register_taxonomy( 'meduim', array('featuredcreative'), $args );

}
add_action( 'init', 'create_meduim_tax' );

// Register Taxonomy Creator
function create_creator_tax() {

	$labels = array(
		'name'              => _x( 'Creators', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Creator', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Creators', 'textdomain' ),
		'all_items'         => __( 'All Creators', 'textdomain' ),
		'parent_item'       => __( 'Parent Creator', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Creator:', 'textdomain' ),
		'edit_item'         => __( 'Edit Creator', 'textdomain' ),
		'update_item'       => __( 'Update Creator', 'textdomain' ),
		'add_new_item'      => __( 'Add New Creator', 'textdomain' ),
		'new_item_name'     => __( 'New Creator Name', 'textdomain' ),
		'menu_name'         => __( 'Creator', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'What was used to create this piece', 'textdomain' ),
		'hierarchical' => false,
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'rewrite' => false,
	);
	register_taxonomy( 'meduim', array('featuredcreative'), $args );

}
add_action( 'init', 'create_creator_tax' );
