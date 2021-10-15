<?php

use App\Controllers\HomeController;
use App\Exceptions\RouteNotFoundException;
use App\Router;

require __DIR__ . '/../vendor/autoload.php';

const VIEWS_DIR = __DIR__ . '/../src/Views/';

$router = new Router();

$router
    ->addRoute('GET', '/', [HomeController::class, 'index'])
    ->addRoute('GET','/add-user', [HomeController::class, 'addUser'])
    ->addRoute('POST', '/', [HomeController::class, 'handleFormData']);


try {
    $router->resolveRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
    http_response_code(404);
}


