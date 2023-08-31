<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;

class SiteController extends Controller
{
    public function homeView(): false|array|string
    {
        $params = [
            'message' => 'Test Message',
        ];

        return $this->render('home', $params);
    }

    public function contactView(): array|false|string
    {
        return $this->render('contact');
    }

    public function contactStore(): array|false|string
    {
        return $this->render('contact');
    }

}