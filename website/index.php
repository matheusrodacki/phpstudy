<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Home Page";
});

$app->get('/teste', function () {
    require_once("teste.php");
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();


?>