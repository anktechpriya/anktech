<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_62568f02f319c',
	'title' => 'Category Image',
	'fields' => array(
		array(
			'key' => 'field_62568f1371a78',
			'label' => 'Image',
			'name' => 'image',
			'type' => 'image'
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'category',
			),
		),
	),
));

endif;		