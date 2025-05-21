<?php

use CodeIgniter\Router\RouteCollection;
// $routes->setDefaultNamespace('App\Controllers');

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->get('/login', 'Login::index');
$routes->post('web/public/login/auth', 'Login::auth');
$routes->get('/register', 'Register::index');
$routes->post('web/public/register/save', 'Register::save');
$routes->get('/logout', 'Login::logout');
