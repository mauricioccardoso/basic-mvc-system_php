<?php

namespace App\Core;

class Request
{
    public function getPath() : string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $questionPosition = strpos($path, '?');

        if(!$questionPosition) {
            return $path;
        }

        return substr($path, 0 , $questionPosition);
    }

    public function getMethod() : string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}