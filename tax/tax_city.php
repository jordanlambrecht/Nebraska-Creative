<?php
// Register Taxonomy city
// Taxonomy Key: city
function create_city_tax() {

	$labels = array(
		'name'              => _x( 'cities', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'city', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search cities', 'textdomain' ),
		'all_items'         => __( 'All cities', 'textdomain' ),
		'parent_item'       => __( 'Parent city', 'textdomain' ),
		'parent_item_colon' => __( 'Parent city:', 'textdomain' ),
		'edit_item'         => __( 'Edit city', 'textdomain' ),
		'update_item'       => __( 'Update city', 'textdomain' ),
		'add_new_item'      => __( 'Add New city', 'textdomain' ),
		'new_item_name'     => __( 'New city Name', 'textdomain' ),
		'menu_name'         => __( 'city', 'textdomain' ),
	);
	$rewrite = array(
		'slug' => 'undefined',
		'with_front' => true,
		'hierarchical' => false,
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Which cities does the agency reside', 'textdomain' ),
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
	register_taxonomy( 'city', array('agency', 'freelancers'), $args );

}
add_action( 'init', 'create_city_tax' );
?>
