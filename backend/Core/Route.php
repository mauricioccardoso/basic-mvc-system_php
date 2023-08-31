<?php

namespace App\Core;

class Route
{
    public static function get($path, $callback): void
    {
        Application::$app->router->get($path, $callback);
    }

    public static function post($path, $callback): void
    {
        Application::$app->router->post($path, $callback);
    }

}