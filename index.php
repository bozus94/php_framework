<?php
include_once __DIR__ . '../vendor/autoload.php';

use app\core\Application;
use app\controllers\PageController;
use app\controllers\AuthController;

$app = new Application(realpath(__DIR__));

$app->router->get('/', 'home', ['mensaje' => ' probando parametros']);

$app->router->get('/about', 'about');

$app->router->get('/contact', [PageController::class, 'contact']);
$app->router->post('/contact', [PageController::class, 'contactHandled']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'registered']);
$app->router->get('/sing-in', [AuthController::class, 'singIn']);
$app->router->post('/sing-in', [AuthController::class, 'logIn']);

$app->run();
