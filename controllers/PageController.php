<?php

namespace app\controllers;

use app\core\Helpers;
use app\core\Request;
use app\core\Template;

class PageController
{
    public function contact(Request $request)
    {
        Helpers::pre_dump($request->getBody());
        return new Template('contactPost');
    }
}
