<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Page COntroller Route
$routes->get('/home', 'Page::home');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');

// Comics Controller Route
$routes->get('/comics', 'Comics::index');
$routes->get('/comics/(:segment)', 'Comics::detail/$1');
