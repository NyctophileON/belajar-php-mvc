<?php

require_once __DIR__.'/../vendor/autoload.php';

use WilliamHanjaya\Belajar\PHP\MVC\App\Router;
use WilliamHanjaya\Belajar\PHP\MVC\Controller\HomeController;
use WilliamHanjaya\Belajar\PHP\MVC\Controller\ProductController;
use WilliamHanjaya\Belajar\PHP\MVC\Middleware\AuthMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello',[AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world');


Router::run();