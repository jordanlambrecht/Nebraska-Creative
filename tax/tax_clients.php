<?php
// Register Taxonomy Client
function create_client_tax() {

	$labels = array(
		'name'              => _x( 'Notable Clients', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Client', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Notable Clients', 'textdomain' ),
		'all_items'         => __( 'All Notable Clients', 'textdomain' ),
		'parent_item'       => __( 'Parent Client', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Client:', 'textdomain' ),
		'edit_item'         => __( 'Edit Client', 'textdomain' ),
		'update_item'       => __( 'Update Client', 'textdomain' ),
		'add_new_item'      => __( 'Add New Client', 'textdomain' ),
		'new_item_name'     => __( 'New Client Name', 'textdomain' ),
		'menu_name'         => __( 'Client', 'textdomain' ),
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
	register_taxonomy( 'notable_clients', array('agency', 'freelancers'), $args );

}
add_action( 'init', 'create_client_tax' );
?>
