<?php
require 'app/Template.php';


$data = [
    'mensaje' => 'soy un texto interactivo'
];
$title = 'AppOrdenada';
$content = new Template('views/home.php', $data);

$view = new Template('views/app.php', ['title' => 'Inicio', 'content' => $content]);
$view->render();

  






 