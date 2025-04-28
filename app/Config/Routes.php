<?php

use App\Controllers\ProductController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', [ProductController::class, 'index']);
$routes->get('/products/list/', [ProductController::class, 'list']);
$routes->post('/products/create/', [ProductController::class, 'store']);
$routes->post('/products/delete/(:num)', [ProductController::class, 'delete/$1']);
$routes->get('/products/show/(:num)',[ProductController::class, 'show/$1']);
$routes->post('/products/edit/(:num)', [ProductController::class, 'update/$1']);

