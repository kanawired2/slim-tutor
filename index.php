<?php
require 'vendor/autoload.php';
require 'config.php';
 
$app = new Slim\App();
//slim application routes
$app->get('/', function ($request, $response, $args) { 
 $response->write("Welcome: This is AlphansoTech Tutorial Guide");
 return $response;
});

$app->run();