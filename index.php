<?php
require 'app/Template.php';
require 'app/Route.php';


$title = 'AppOrdenada';
$view = new Template('views/home.php');
$content = $view->getContent();
include_once 'views/app.php';







 