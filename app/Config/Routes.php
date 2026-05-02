<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');

$routes->group('form-basic','' , static function ($routes){
    $routes->get('/', 'Country::index');
    $routes->get('country/add', 'Country::add');
    $routes->post('country/create', 'Country::create');
    $routes->get('country/edit/(:num)', 'Country::edit/$1');
    $routes->put('country/update', 'Country::update');
    $routes->delete('country/delete/(:num)', 'Country::delete/$1');
  

});

$routes->group('form-basic-undelete','' , static function ($routes){
    $routes->get('/', 'Country2::index');
    $routes->get('country/add', 'Country2::add');
    $routes->post('country/create', 'Country2::create');
    $routes->get('country/edit/(:num)', 'Country2::edit/$1');
    $routes->put('country/update', 'Country2::update');
    $routes->delete('country/delete/(:num)', 'Country2::delete/$1');
    $routes->patch('country/restore/(:num)', 'Country2::restore/$1');

});

$routes->group('form-helper','' , static function ($routes){
    $routes->get('/', 'Country3::index');
    $routes->get('country/add', 'Country3::add');
    $routes->post('country/create', 'Country3::create');
    $routes->get('country/edit/(:num)', 'Country3::edit/$1');
    $routes->put('country/update', 'Country3::update');
    $routes->delete('country/delete/(:num)', 'Country3::delete/$1');
    

});


$routes->group('form-alert', '', static function ($routes){
    $routes->get('/', 'Country4::index');
});



