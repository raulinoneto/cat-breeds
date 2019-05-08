<?php
// autoload classes and dependecies
require_once __DIR__ . "/../vendor/autoload.php";

//starting server session
session_start();


// load configurations and Instatiate the app
$config = require __DIR__ . '/../config/config.php';
$app = new \Slim\App($config);

// load app routes
require __DIR__ . '/../config/routes.php'

//run app
$app->run();
