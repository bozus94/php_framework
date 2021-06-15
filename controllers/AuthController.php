<?php

namespace app\controllers;

use app\core\Helpers;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
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

    public function registered(Request $request)
    {
        $register = new RegisterModel();
        $register->loadData($request->getBody());

        if ($register->validate()) {
            echo 'registered!';
        } else {
            return $this->render('auth/register', ['model' => $register]);
        }
    }

    public function logAuth()
    {
        return 'cerrando session';
    }
}
