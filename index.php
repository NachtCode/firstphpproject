<?php
// index.php

require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function ($request, $response, $args) {
    return $response->write("Hello, World! This is my First PHP Project with Slim.");
});

$app->run();
