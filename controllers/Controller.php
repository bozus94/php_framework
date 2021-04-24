<?php

namespace app\controllers;

use app\core\Application;
use app\core\Template;
use app\core\Helpers;

class Controller
{
    protected function render($view, $parameters = [], $layout = 'boostrap')
    {
        return new Template($view, $parameters, $layout);
    }

    protected function pre_dump($param)
    {
        Helpers::pre_dump($param);
    }
}
