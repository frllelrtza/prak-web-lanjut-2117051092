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
$routes->get('/user', 'UserController::index');
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->get('/user/(:any)', [UserController::class, 'show']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);