<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Main::index');
$routes->get('article/(:num)', 'Main::detail/$1');
$routes->get('articles', 'Main::articles');
$routes->get('seasons', 'Main::seasons');
$routes->get('season/(:num)', 'Main::seasonDetail/$1');
