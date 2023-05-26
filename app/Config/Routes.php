<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//pegawai
$routes->get('/pegawai', 'PegawaiController::index');
$routes->get('/pegawai/create', 'PegawaiController::create');
$routes->post('/pegawai/store', 'PegawaiController::store');
$routes->get('/pegawai/edit/(:num)', 'PegawaiController::edit/$1');
$routes->post('/pegawai/update/(:num)', 'PegawaiController::update/$1');
$routes->get('/pegawai/delete/(:num)', 'PegawaiController::delete/$1');
//Jabatan
$routes->get('/jabatanpegawai', 'JabatanPegawaiController::index');
$routes->get('/jabatanpegawai/create', 'JabatanPegawaiController::create');
$routes->post('/jabatanpegawai/store', 'JabatanPegawaiController::store');
$routes->get('/jabatanpegawai/edit/(:num)', 'JabatanPegawaiController::edit/$1');
$routes->post('/jabatanpegawai/update/(:num)', 'JabatanPegawaiController::update/$1');
$routes->get('/jabatanpegawai/delete/(:num)', 'JabatanPegawaiController::delete/$1');
//kontrak
$routes->get('/kontrak', 'KontrakController::index');
$routes->get('/kontrak/create', 'KontrakController::create');
$routes->post('/kontrak/store', 'KontrakController::store');
$routes->get('/kontrak/edit/(:num)', 'KontrakController::edit/$1');
$routes->post('/kontrak/update/(:num)', 'KontrakController::update/$1');
$routes->get('/kontrak/delete/(:num)', 'KontrakController::delete/$1');




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
