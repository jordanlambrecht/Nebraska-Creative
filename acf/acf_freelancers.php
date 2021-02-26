<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5de42aa3c4556',
	'title' => 'Freelancers - Basic Info',
	'fields' => array(
		array(
			'key' => 'field_5de42aa3c7f6a',
			'label' => '',
			'name' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'layout' => 'row',
			'sub_fields' => array(
				array(
					'key' => 'field_5de42aa3caa8e',
					'label' => 'City',
					'name' => 'cities',
					'type' => 'taxonomy',
					'instructions' => 'Where is the freelancer based out of?',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'city',
					'field_type' => 'multi_select',
					'allow_null' => 0,
					'add_term' => 1,
					'save_terms' => 1,
					'load_terms' => 1,
					'return_format' => 'id',
					'multiple' => 0,
				),
			),
		),
		array(
			'key' => 'field_5de42aa3d3457',
			'label' => '',
			'name' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'layout' => 'row',
			'sub_fields' => array(
				array(
					'key' => 'field_5de42aa3d5503',
					'label' => 'Capabilities',
					'name' => 'capabilities',
					'type' => 'taxonomy',
					'instructions' => 'What can the creative shop produce?',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'abilities',
					'field_type' => 'checkbox',
					'add_term' => 1,
					'save_terms' => 1,
					'load_terms' => 1,
					'return_format' => 'id',
					'multiple' => 0,
					'allow_null' => 0,
				),
				array(
					'key' => 'field_5de42aa3d5546',
					'label' => 'Industry Focus',
					'name' => 'industry',
					'type' => 'taxonomy',
					'instructions' => 'Are there any special industry sectors that the creative shop focuses on (e.g agriculture, nonprofit, etc)?',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'industry',
					'field_type' => 'checkbox',
					'add_term' => 1,
					'save_terms' => 1,
					'load_terms' => 1,
					'return_format' => 'id',
					'multiple' => 0,
					'allow_null' => 0,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'freelancers',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'author',
		1 => 'format',
		2 => 'page_attributes',
		3 => 'categories',
		4 => 'tags',
	),
	'active' => true,
	'description' => '',
));

endif;
 ?>
