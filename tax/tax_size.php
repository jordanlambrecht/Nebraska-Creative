<?php
// Register Taxonomy size
// Taxonomy Key: size
function create_size_tax() {

	$labels = array(
		'name'              => _x( 'size', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'size', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search size', 'textdomain' ),
		'all_items'         => __( 'All size', 'textdomain' ),
		'parent_item'       => __( 'Parent size', 'textdomain' ),
		'parent_item_colon' => __( 'Parent size:', 'textdomain' ),
		'edit_item'         => __( 'Edit size', 'textdomain' ),
		'update_item'       => __( 'Update size', 'textdomain' ),
		'add_new_item'      => __( 'Add New size', 'textdomain' ),
		'new_item_name'     => __( 'New size Name', 'textdomain' ),
		'menu_name'         => __( 'size', 'textdomain' ),
	);
	$rewrite = array(
		'slug' => 'undefined',
		'with_front' => false,
		'hierarchical' => false,
	);
	$args = array(
		'labels' => $labels,
		'description'         => __( 'How big is the agency?', 'textdomain' ),
		'hierarchical'        => false,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_tagcloud'       => false,
		'show_in_quick_edit'  => true,
		'show_admin_column'   => true,
		'show_in_rest'        => true,
    'rewrite'             => $rewrite,
    'meta_box_cb'         => false,
	);
	register_taxonomy( 'size', array('agency'), $args );

}
add_action( 'init', 'create_size_tax' );



 ?>
