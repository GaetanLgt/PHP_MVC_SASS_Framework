<?php
/**
 * User: GaetanLgt
 * Date: 11/11/2022
 * Time: 11:11
 * @author GaetanLgt
 */

use App\Controllers\AuthController;
use App\Controllers\SiteController;
use App\Core\Application;
use App\Models\User;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'user' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

?> <script src="http://localhost:8080/bundle.js"></script> <?php

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class,'home']);
$app->router->get('/contact', [SiteController::class,'contact']);
$app->router->post('/contact', [SiteController::class, 'contact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/profile', [AuthController::class, 'profile']);

$app->run();
