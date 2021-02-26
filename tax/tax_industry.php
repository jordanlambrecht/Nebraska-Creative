<?php
// Register Taxonomy Industry
// Taxonomy Key: industry
function create_industry_tax() {

	$labels = array(
		'name'              => _x( 'Industries', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Industry', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Industries', 'textdomain' ),
		'all_items'         => __( 'All Industries', 'textdomain' ),
		'parent_item'       => __( 'Parent Industry', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Industry:', 'textdomain' ),
		'edit_item'         => __( 'Edit Industry', 'textdomain' ),
		'update_item'       => __( 'Update Industry', 'textdomain' ),
		'add_new_item'      => __( 'Add New Industry', 'textdomain' ),
		'new_item_name'     => __( 'New Industry Name', 'textdomain' ),
		'menu_name'         => __( 'Industry', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Is there an area of focus that the agency/freelancer works with (e.g Agriculture, non-profit, etc.)?', 'textdomain' ),
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
		'rewrite' => false,
	);
	register_taxonomy( 'industry', array('agency', 'freelancers'), $args );

}
add_action( 'init', 'create_industry_tax' );

 ?>
