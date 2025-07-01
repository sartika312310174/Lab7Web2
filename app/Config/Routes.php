<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->resource('post');

$routes->get('/', 'Home::index');
$routes->get('/home/getAjax', 'Home::getAjax');
$routes->get('/home/getLab8_vuejs', 'Home::getLab8_vuejs');


$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
$routes->get('/tos', 'Page::tos');
$routes->get('user/login', 'User::login');
$routes->post('/user/login', 'User::login');


$routes->get('ajax', 'AjaxController::index');
    $routes->get('ajax/getData', 'AjaxController::getData');
    $routes->delete('ajax/delete/(:num)', 'AjaxController::delete/$1');
    $routes->post('ajax/tambah', 'AjaxController::tambah');

    $routes->get('ajax/getArtikel/(:num)', 'AjaxController::getArtikel/$1');
    $routes->post('ajax/update', 'AjaxController::update');

    $routes->resource('post');
    $routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
    
    

    
});
