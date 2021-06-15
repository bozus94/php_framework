<?php

namespace app\controllers;

use app\core\Request;

class PageController extends Controller
{
    public function home()
    {
        $this->render('home');
    }

    public function about()
    {
        $this->render('about');
    }

    public function contact()
    {
        $this->render('contact');
    }

    public function contactHandled(Request $request)
    {
        $this->render('contactPost');
        $this->pre_dump($request->getBody());
    }
}
