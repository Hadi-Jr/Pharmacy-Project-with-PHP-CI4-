<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Home
$routes->get('/home', 'Home::index');
$routes->get('/', 'Home::index');


//Language
$routes->post('language/switch', 'Language::switch');


