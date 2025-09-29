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
$routes->get('articles/manage', 'Main::manageArticles');
$routes->get('articles/create', 'Main::createArticle');
$routes->post('articles/store', 'Main::storeArticle');
$routes->get('articles/edit/(:num)', 'Main::editArticle/$1');
$routes->post('articles/update/(:num)', 'Main::updateArticle/$1');
