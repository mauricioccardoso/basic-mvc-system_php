<?php

namespace App\Core;

class Router
{
    public array $routes = [];
    public Request $request;
    public Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response ;
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
        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            $this->response->setStatusCode(404 );
            return '404 - Not Found';
        }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        return $callback();
    }

    public function renderView($view)
    {
        $layout = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        return str_replace('{{ content }}', $viewContent, $layout);
    }

    protected function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR."/Views/Layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR."/Views/$view.php";
        return ob_get_clean();
    }
}