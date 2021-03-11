<?php
require 'app/app.php';
require 'app/Template.php';

new app();

$title = 'AppOrdenada';
$content = new Template('views/home.php', ['mensaje' => 'soy un texto interactivo']);

$view = new Template('views/app.php', ['title' => 'Inicio', 'content' => $content]);
$view->render();

   
