<?php

use App\Controllers\HomeController;
use App\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    private Router $router;

    protected function setUp(): void
    {
        parent::setUp();
        
        $this->router = new Router();
    }

    public function testItAddsARoute()
    {
        $this->router = new Router();
        $this->router->addRoute('GET', '/', [HomeController::class, 'index']);
        $this->router->addRoute('POST', '/', [HomeController::class, 'index']);
        $expectedResult = [
                'GET'  => ['/' => ['App\Controllers\HomeController', 'index']],
                'POST' => ['/' => ['App\Controllers\HomeController', 'index']],
            ];

        $this->assertEquals($expectedResult, $this->router->getRoutes());
    }

}