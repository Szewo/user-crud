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
        $this->router->addRoute('GET', '/', [HomeController::class, 'index']);
        $this->router->addRoute('POST', '/', [HomeController::class, 'index']);
        $expectedResult = [
                'GET'  => ['/' => ['App\Controllers\HomeController', 'index']],
                'POST' => ['/' => ['App\Controllers\HomeController', 'index']],
            ];

        $this->assertSame($expectedResult, $this->router->getRoutes());
    }

    public function testItResolvesRoute()
    {
        $testClass = new class() {
            public function index(): array
            {
                return [1, 2, 3];
            }
        };

        $this->router->addRoute('GET', '/', [get_class($testClass), 'index']);
        $result = $this->router->resolveRoute('GET','/');
        $this->assertSame([1,2,3],$result);
    }

}