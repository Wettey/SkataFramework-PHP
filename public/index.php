<?php

require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\AuthController;

$app = new Application(dirname(__DIR__));

//get requests
$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/login', [SiteController::class, 'login']);
$app->router->get('/registration', [SiteController::class, 'registration']);

$app->router->post('/login', [AuthController::class, 'handleLogin']);
$app->router->post('/registration', [AuthController::class, 'handleRegistration']);

$app->run();