<?php

namespace App;

use App\Exceptions\RouteNotFoundException;

class Router
{
    private array $routes = [];

    public function addRoute(string $httpMethod, string $url, array $action): self
    {
        $this->routes[$httpMethod][$url] = $action;

        return $this;
    }

    public function resolveRoute(string $httpMethod, string $url)
    {
        $route = explode('?', $url)[0];
        $action = $this->routes[$httpMethod][$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundException('ROUTE NOT FOUND');
        }

        $controllerName = $action[0];
        $controllerMethod = $action[1];

        if (!class_exists($controllerName)) {
            throw new RouteNotFoundException('ROUTE NOT FOUND');
        }

        if (!method_exists($controllerName, $controllerMethod)) {
            throw new RouteNotFoundException('ROUTE NOT FOUND');
        }

        $controllerClass = new $controllerName;

        return $controllerClass->$controllerMethod();
    }
}