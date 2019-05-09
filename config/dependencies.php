<?php
// DIC configuration
/** @var Pimple\Container $container */
$container = $app->getContainer();

// Error Handler
$container['errorHandler'] = function ($c) {
	return new \Conduit\Exceptions\ErrorHandler($c['settings']['displayErrorDetails']);
};
// Eloquent Service Providers
$container->register(new \App\Services\DatabaseServices\EloquentService());

// monolog
$container['logger'] = function ($c) {
	$settings = $c->get('settings')['logger'];
	$logger = new Monolog\Logger($settings['name']);
	$logger->pushProcessor(new Monolog\Processor\UidProcessor());
	$logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
	return $logger;
};

// api credentials
$container['thecatapi'] = function ($c) {
	$settings = $c->get('settings')['thecatapi'];

	// create a generic class to access easily the api credentials
	$genericClass = new stdClass();

	// set values at classes properties
	$genericClass->{'apiKey'} = $settings['apiKey'];
	$genericClass->{'apiUrl'} = $settings['apiUrl'];

	return $genericClass;
};

