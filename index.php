<?php
include_once __DIR__ . '/vendor/autoload.php';

use app\core\Application;

$app = new Application(realpath(__DIR__));

$app->router->get('/', function () {
    echo 'Pagina de inicio';
});

$app->router->get('/about', function () {
    echo 'Pagina acerca de';
});

$app->run();
