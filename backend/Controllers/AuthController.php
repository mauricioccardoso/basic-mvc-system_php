<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Models\Register;

class AuthController extends Controller
{
    public function login(Request $request) : string
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request): string
    {
        $registerModel = new Register();
        if($request->isPost()) {
            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()) {
                return 'Success';
            }

            return $this->render('register', [
                'model' => $registerModel,
            ]);
        }
        $this->setLayout('auth');

        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}