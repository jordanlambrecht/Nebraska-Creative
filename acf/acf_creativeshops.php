<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5de424c7788f2',
	'title' => 'Creative Shops - Basic Info',
	'fields' => array(
		array(
			'key' => 'field_5de427fff5c2a',
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
					'key' => 'field_5de424cd469b8',
					'label' => 'Cities',
					'name' => 'cities',
					'type' => 'taxonomy',
					'instructions' => 'Which Nebraskan cities does this agency have an office?',
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
				array(
					'key' => 'field_5de42594469ba',
					'label' => 'Shop Size',
					'name' => 'size',
					'type' => 'taxonomy',
					'instructions' => 'How big is the creative shop?',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'size',
					'field_type' => 'radio',
					'allow_null' => 0,
					'add_term' => 1,
					'save_terms' => 1,
					'load_terms' => 1,
					'return_format' => 'id',
					'multiple' => 0,
				),
				array(
					'key' => 'field_5de4264e469be',
					'label' => 'Year Founded',
					'name' => 'year_founded',
					'type' => 'number',
					'instructions' => 'When was the creative shop founded?',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 2019,
					'prepend' => '',
					'append' => '',
					'min' => 1800,
					'max' => 2030,
					'step' => '',
				),
			),
		),
		array(
			'key' => 'field_5de42863f5c2b',
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
					'key' => 'field_5de425d6469bc',
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
					'key' => 'field_5de42605469bd',
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
		array(
			'key' => 'field_5de42762a5ddd',
			'label' => 'Mission Statement',
			'name' => 'mission_statement',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
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
