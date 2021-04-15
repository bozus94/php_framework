<?php
include_once __DIR__ . 'vendor/autoload.php';

use app\core\Application;
use app\core\Helpers;

$app = new Application(realpath(__DIR__));

Helpers::require_if_exists('Routes.php');

$app->run();
