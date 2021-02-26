<?php

// Register Custom Post Type Creative Shop
// Post Type Key: agency
function create_creativeshop_cpt() {

	$labels = array(
		'name' => _x( 'Creative Shops', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Creative Shop', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Creative Shops', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Creative Shop', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Creative Shops', 'textdomain' ),
		'attributes' => __( 'Creative Shop Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Creative Shop:', 'textdomain' ),
		'all_items' => __( 'All Creative Shops', 'textdomain' ),
		'add_new_item' => __( 'Add New Creative Shop', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Creative Shop', 'textdomain' ),
		'edit_item' => __( 'Edit Creative Shop', 'textdomain' ),
		'update_item' => __( 'Update Creative Shop', 'textdomain' ),
		'view_item' => __( 'View Creative Shop', 'textdomain' ),
		'view_items' => __( 'View Creative Shops', 'textdomain' ),
		'search_items' => __( 'Search Creative Shop', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Creative Shop', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Creative Shop', 'textdomain' ),
		'items_list' => __( 'Creative Shops list', 'textdomain' ),
		'items_list_navigation' => __( 'Creative Shops list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Creative Shops list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Creative Shop', 'textdomain' ),
		'description' => __( 'A curated list of Nebraskan creative shops', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-building',
		'supports' => array('title', 'excerpt', 'thumbnail', 'revisions', 'comments', 'trackbacks'),
		'taxonomies' => array('industry', 'size', 'city', 'abilities'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,

	    'rewrite'     => array( 'slug' => 'studios' ),
	    'has_archive' => 'studios',


		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'agency', $args );

}
add_action( 'init', 'create_creativeshop_cpt', 0 );

// Send Publish Alert to URL associated with pages

function on_publish_pending_post( $post ) {
// A function to perform actions when a post is published.

if ( "agency" === get_post_type() && !wp_is_post_revision( $post_id )) { // check the custom post type
		$contactBool = get_field('publish_updates', $post_id);
    $name   = get_the_title( $post->ID );

		$headers = array (
        'From: "The Nebraska Creative" <director@nebraska-creative.com>' ,
				'BCC: "Jordan Lambrecht" <jordan@pixelbakery.co>',
        'X-Mailer: PHP/' . phpversion(),
        'MIME-Version: 1.0' ,
        'Content-type: text/html; charset=iso-8859-1'
    );
    $headers = implode( "\r\n" , $headers );

		$post_url = get_permalink( $post_id );
		$post = get_post( $post_id );
		$subject = 'Status for ' .  $name . ' Changed To: Approved';
		$body = "This is an automated update to inform you that your entry for ". $name ." has been published.<br><br>";
		$body .= "<a href='" . $post_url . "'>Click here to view</a><br><br>";
		$body .= "Thank you for your submission. We encourage you to send this link to your friends and feature it on your website/social media. Without reputation and reach, this site loses its value. If you'd like to directly support us to help maintain server costs, you can <a href='https://www.buymeacoffee.com/jordanlambrecht'>buy us a coffee</a>. If you'd like to help contribute, join our <a href='https:/www.facebook.com/groups/nebraskacreative'>Facebook Group</a>.<br><br>";
		$body .= "With Love,<br><br>";
		$body .= "–The Nebraska Creative Team";
		$email = get_field('contact_email', $post_id);

		if($email and $contactBool){
			//sends email
			wp_mail($email, $subject, $body, $headers );
		}
		else{
			return;
		}







}
}
add_action( "draft_to_publish", "on_publish_pending_post", 10, 1 );
?>
