<?php
// Register Taxonomy Key People
function create_keypeople_tax() {

	$labels = array(
		'name'              => _x( 'Key People', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Key People', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Key People', 'textdomain' ),
		'all_items'         => __( 'All Key People', 'textdomain' ),
		'parent_item'       => __( 'Parent Key People', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Key People:', 'textdomain' ),
		'edit_item'         => __( 'Edit Key People', 'textdomain' ),
		'update_item'       => __( 'Update Key People', 'textdomain' ),
		'add_new_item'      => __( 'Add New Key People', 'textdomain' ),
		'new_item_name'     => __( 'New Key People Name', 'textdomain' ),
		'menu_name'         => __( 'Key People', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'textdomain' ),
		'hierarchical' => false,
		'public' => false,
		'publicly_queryable' => true,
		'show_ui' => false,
		'show_in_menu' => false,
		'show_in_nav_menus' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'rewrite' => false,
	);
	register_taxonomy( 'key_people', array('agency'), $args );

}
add_action( 'init', 'create_keypeople_tax' );?>
