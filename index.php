<?php
require 'app/Template.php';
require 'app/Route.php';

$data = [
    'mensaje' => 'Esto es un texto interactivo'
];
$title = 'AppOrdenada';
$content = new Template('views/home.php', $data);
include_once 'views/app.php';







 