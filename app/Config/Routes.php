<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'pemeriksaan::index');
$routes->get('/pemeriksaan/create', 'pemeriksaan::create');
// $routes->post('/pemeriksaan/save', 'pemeriksaan::save');
$routes->get('/pemeriksaan/edit/(:segment)', 'pemeriksaan::edit/$1');
$routes->delete('/pemeriksaan/(:num)', 'pemeriksaan::delete/$1');
$routes->get('/pemeriksaan/(:any)', 'pemeriksaan::detail/$1');

$routes->get('/kesehatan', 
'kesehatan::index');
$routes->get('/kesehatan/create', 'kesehatan::create');
// $routes->post('/pemeriksaan/save', 'pemeriksaan::save');
$routes->get('/kesehatan/edit/(:any)', 'kesehatan::edit/$1');
$routes->delete('/kesehatan/(:num)', 'kesehatan::delete/$1');
$routes->get('/kesehatan/detail/(:any)', 'kesehatan::detail/$1');


$routes->get('/sapi', 'sapi::index');
$routes->get('/sapi/detail/(:any)', 'sapi::detail/$1');
$routes->get('/kesehatan/(:any)', 'sapi::kesehatan/$1');


// $routes->get('/komik/create', 'Komik::create');
// $routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
// $routes->delete('/komik/(:num)', 'Komik::delete/$1');
// $routes->get('/komik/(:any)', 'Komik::detail/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
