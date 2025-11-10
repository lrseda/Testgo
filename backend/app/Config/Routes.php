<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Login', 'Login::index');
$routes->get('/', 'Users::index');
$routes->post('/login', 'UsersController::login');
