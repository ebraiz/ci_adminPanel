<?php 

$config = [

		'admin_login_rules' => [
		[	
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email|min_length[8]'
		],
		[	
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|min_length[8]'
		]
	],

	'cm_add_cateogry_rules' => [
		[	
			'field' => 'category_name',
			'label' => 'Category Name',
			'rules' => 'required'
		]
	]
];