<?php

return [
    'plugin' => [
        'name' => 'Portfolio Pages',
        'description' => 'Single Page extension for ArrizalAmin.Portfolio plugin',
    ],
	'components' => [
		'single' => [
			'title' => 'Single Page',
			'description' => 'Single Page for ArrizalAmin.Portfolio'
		]
	],
	'properties' => [
		'portfolio' => [
			'title' => 'Single Portfolio Page',
			'description' => 'Name of the single portfolio page file for the "Learn more" links'
		],
	],
	'fields' => [
		'excerpt' => 'Excerpt',
	]
];
