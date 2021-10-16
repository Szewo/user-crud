<?php

namespace App;

use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Exceptions\RouteNotFoundException;

class Application
{
    private Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function handleRouting()
    {
        $this->router
            ->addRoute('GET', '/', [HomeController::class, 'index'])
            ->addRoute('GET', '/add-user', [HomeController::class, 'addUser'])
            ->addRoute('POST', '/persist-user', [UserController::class, 'persistUser'])
            ->addRoute('GET', '/delete-user', [UserController::class, 'deleteUser'])
            ->addRoute('GET', '/update-user', [UserController::class, 'updateUser'])
            ->addRoute('POST', '/update-user', [UserController::class, 'persistUpdatedUser']);

        try {
            $this->router->resolveRoute($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
        } catch (RouteNotFoundException $e) {
            http_response_code(404);
        }
    }
}