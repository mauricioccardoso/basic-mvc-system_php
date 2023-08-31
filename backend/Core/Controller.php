<?php

namespace App\Core;

class Controller
{
    public function render($view, $params = []): array|false|string
    {
        return Application::$app->router->renderView($view, $params);
    }

}