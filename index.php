<?php

/* load autoloader class */
include_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';

/* instance the app */

use app\core\Application;

$app = new Application(__DIR__, $config);

/* load routes and configurations*/

require_once __DIR__ . '/routes/web.php';

/* run the aplication */
$app->run();
