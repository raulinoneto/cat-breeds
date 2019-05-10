<?php

// reuse app database configuration
$config = require __DIR__ . '/config/config.php';

return [
	'paths' => [
		'migrations'=>'%%PHINX_CONFIG_DIR%%/app/Migrations'
	],
	'environments' => [
        	'default_database' => 'default',
		'default' => [
			'name' => $config['settings']['database']['database'],
			'adapter' => $config['settings']['database']['driver'],
			'host' => $config['settings']['database']['host'],
			'user' => $config['settings']['database']['username'],
			'pass' => $config['settings']['database']['password'],
			'port' => $config['settings']['database']['port'],
			'charset' => $config['settings']['database']['charset'],
		]
	]
];