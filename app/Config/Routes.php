<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', [Home::class, 'profile']);
$routes->get('/user/profile/', 'UserController::profile');
$routes->get('/user/create/', [UserController::class,'create']);
$routes->post('/user/store/', [UserController::class,'store']);
