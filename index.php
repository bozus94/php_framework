<?php
/* load autoloader class */
include_once __DIR__ . '../vendor/autoload.php';

use app\core\Application;



/* instance the app */


$app = new Application(realpath(__DIR__));

/* load routes */
require_once __DIR__ . '/routes/web.php';

$app->run();
