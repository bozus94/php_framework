<?php

namespace app\controllers;

use app\core\Application;
use app\core\Template;

class Controller
{
    public function render($view, $parameters = [], $layout = 'boostrap')
    {
        return new Template($view, $parameters, $layout);
    }
}
