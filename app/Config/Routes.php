<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');

// Page COntroller Route
$routes->get('/home', 'Page::home');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');

// Comics Controller Route
$routes->get('/comics', 'Comics::index');
$routes->get('/comics/create', 'Comics::create');
$routes->get('/comics/edit/(:any)', 'Comics::edit/$1');
$routes->delete('/comics/(:num)', 'Comics::delete');
$routes->get('/comics/(:any)', 'Comics::detail/$1');
