<?php

require 'core/App.php';

$app = new App(realpath(__DIR__));

Helpers::require_if_exists('core/Routes.php');

$app->run();
