<?php

use app\controllers\AuthController;
use app\controllers\PageController;

$app->router->get('/', 'home', ['mensaje' => ' probando parametros']);

$app->router->get('/about', 'about');

$app->router->get('/contact', [PageController::class, 'contact']);
$app->router->post('/contact', [PageController::class, 'contactHandled']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'registered']);
$app->router->get('/sing-in', [AuthController::class, 'singIn']);
$app->router->post('/sing-in', [AuthController::class, 'logIn']);
