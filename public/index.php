<?php

use App\Controllers\HomeController;
use App\Exceptions\RouteNotFoundException;
use App\Router;

require __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router->addRoute('GET', '/', [HomeController::class, 'index']);

try {
    echo $router->resolveRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
    http_response_code(404);
}

