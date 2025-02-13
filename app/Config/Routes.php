<?php

use App\Controllers\HomeController;
use App\Controllers\ParentsController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [HomeController::class, 'index'], ['as' => 'home']);

$routes->group('parents', static function($routes){
    $routes->get('/', [ParentsController::class, 'index'], ['as' => 'parents']);
});
