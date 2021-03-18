<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login()
    {
        return $this->render('login');
    }

    public function registration()
    {
        return $this->render('registration');
    }

    public function handleLogin(Request $request)
    {
        $body = $request->getBody();
        return 'Handling submitted data';
    }

    public function handleRegistration(Request $request)
    {
        $body = $request->getBody();
        return 'Handling submitted data';
    }
}