<?php
// Register Taxonomy capabilities
// Taxonomy Key: abilities
function create_capabilities_tax() {

	$labels = array(
		'name'              => _x( 'capabilities', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'capabilities', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search capabilities', 'textdomain' ),
		'all_items'         => __( 'All capabilities', 'textdomain' ),
		'parent_item'       => __( 'Parent capabilities', 'textdomain' ),
		'parent_item_colon' => __( 'Parent capabilities:', 'textdomain' ),
		'edit_item'         => __( 'Edit capabilities', 'textdomain' ),
		'update_item'       => __( 'Update capabilities', 'textdomain' ),
		'add_new_item'      => __( 'Add New capabilities', 'textdomain' ),
		'new_item_name'     => __( 'New capabilities Name', 'textdomain' ),
		'menu_name'         => __( 'capabilities', 'textdomain' ),
	);
	$rewrite = array(
		'slug' => 'undefined',
		'with_front' => true,
		'hierarchical' => false,
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'What does the agency or freelancer specialize in?', 'textdomain' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'rewrite' => $rewrite,
	);
	register_taxonomy( 'abilities', array('agency', 'freelancers'), $args );

}
add_action( 'init', 'create_capabilities_tax' );

 ?>
