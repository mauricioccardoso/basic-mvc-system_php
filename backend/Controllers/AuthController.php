<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

class AuthController extends Controller
{
    public function login(Request $request) : string
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request): string
    {
        if($request->isPost()) {
            return 'Handle submitted data';
        }

        $this->setLayout('auth');
        return $this->render('register');
    }
}