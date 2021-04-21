<?php
include_once __DIR__ . '../vendor/autoload.php';

use app\core\Application;
use app\controllers\PageController;

$app = new Application(realpath(__DIR__));

$app->router->get('/', 'home', ['mensaje' => ' probando parametros']);

$app->router->get('/about', 'about');

$app->router->get('/contact', 'contact');
$app->router->post('/contact', [PageController::class, 'contact']);

$app->run();
