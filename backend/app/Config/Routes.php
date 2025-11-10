<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('login', 'Auth::login');
$routes->post('logout', 'Auth::logout');
$routes->post('signup', 'Auth::signup');
$routes->get('/Signup', 'Signup::index');
$routes->get('/Roadmap', 'Roadmap::index');
$routes->get('/Moodboard', 'Moodboard::index');
$routes->get('/Login', 'Login::index');
$routes->get('/Landing', 'Users::index');
