<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Core/Utils/Functions.php';

use App\Core\Application;

$rootPath = dirname(__DIR__);

$app = new Application($rootPath);

require_once __DIR__ . '/../Routes/Routes.php';

$app->run();