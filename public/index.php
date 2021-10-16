<?php

use App\Application;
use App\Router;

require __DIR__ . '/../vendor/autoload.php';

const VIEWS_DIR = __DIR__ . '/../src/Views/';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$container = new DI\Container();

$app = new Application(new Router($container));
$app->handleRouting();




