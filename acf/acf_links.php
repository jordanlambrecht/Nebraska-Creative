<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5de426abc5a93',
	'title' => 'Links',
	'fields' => array(
		array(
			'key' => 'field_5de426b90f3a5',
			'label' => 'Website',
			'name' => 'website',
			'type' => 'url',
			'instructions' => 'MUST be https://',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'https://pixelbakery.co',
		),
		array(
			'key' => 'field_5de427040f3a6',
			'label' => 'Glassdoor',
			'name' => 'glassdoor',
			'type' => 'url',
			'instructions' => 'MUST be https://',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5de427170f3a7',
			'label' => 'LinkedIn',
			'name' => 'linkedin',
			'type' => 'url',
			'instructions' => 'MUST be https://',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5de427240f3a8',
			'label' => 'Facebook',
			'name' => 'facebook',
			'type' => 'url',
			'instructions' => 'MUST be https://',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5de4272e0f3a9',
			'label' => 'Instagram',
			'name' => 'instagram',
			'type' => 'url',
			'instructions' => 'MUST be https://',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5de427390f3aa',
			'label' => 'Behance',
			'name' => 'behance',
			'type' => 'url',
			'instructions' => 'MUST be https://',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5de427430f3ab',
			'label' => 'Dribbble',
			'name' => 'dribbble',
			'type' => 'url',
			'instructions' => 'MUST be https://',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'agency',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'freelancers',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
 ?>