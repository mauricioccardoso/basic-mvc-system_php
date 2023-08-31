<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Core/Utils/Functions.php';

use App\Core\Application;


$app = new Application();

$app->router->get('/', function () {
    echo 'test';
});

$app->run();