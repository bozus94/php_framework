<?php

/* load autoloader class */
include_once __DIR__ . '../vendor/autoload.php';

/* instance the app */

use  app\core\Application;

$app = new Application(realpath(__DIR__));

/* load routes */
require_once __DIR__ . '/routes/web.php';


/* run the aplication */
$app->run();
