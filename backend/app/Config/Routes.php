<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/Moodboard', 'Moodboard::index');
$routes->get('/Login', 'Login::index');
$routes->get('/', 'Users::index');