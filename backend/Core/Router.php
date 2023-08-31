<?php

namespace App\Core;

class Router
{
    public array $routes = [];
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback): void
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback): void
    {
        $this->routes['POST'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path];

        if(!$callback) {
            echo '404 - Not Found';
        }

        echo $callback();
    }
}