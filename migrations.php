<?php

/* load autoloader class */
include_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

/* instance the app */

use app\core\Application;

$app = new Application(__DIR__, $config);

/* run the aplication */
$app->database->applyMigractions();
