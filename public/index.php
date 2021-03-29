<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

//get requests
$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/registration', [AuthController::class, 'registration']);

//post requests
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/registration', [AuthController::class, 'registration']);

$app->run();