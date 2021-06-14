<?php

namespace app\controllers;

use app\core\Request;

class UserController extends Controller
{
    public function singIn()
    {
        $this->render('auth/sing-in');
    }
    public function logIn(Request $request)
    {
        echo 'Logueado';
        $this->pre_dump($request->getBody());
    }

    public function register()
    {
        $this->render('auth/register');
    }
    public function registerPost(Request $request)
    {
        echo 'Registrado';
        $this->pre_dump($request->getBody());
    }

    public function logAuth()
    {
        return 'cerrando session';
    }
}
