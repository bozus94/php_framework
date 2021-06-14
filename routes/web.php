<?php

use app\controllers\PageController;
use app\controllers\UserController;

$app->router->get('/', 'home', ['mensaje' => ' probando parametros']);

$app->router->get('/about', 'about');

$app->router->get('/contact', [PageController::class, 'contact']);
$app->router->post('/contact', [PageController::class, 'contactHandled']);

$app->router->get('/register', [UserController::class, 'register']);
$app->router->post('/register', [UserController::class, 'registered']);
$app->router->get('/sing-in', [UserController::class, 'singIn']);
$app->router->post('/sing-in', [UserController::class, 'logIn']);
