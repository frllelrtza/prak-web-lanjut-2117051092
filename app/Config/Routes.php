<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', [Home::class, 'profile']);
$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile/$1/$2/$3');

