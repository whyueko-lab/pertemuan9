<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * contoh untuk pembuatan route
 */

// Tampilkan semua data
$routes->get('/biodata', 'Biodata::index');

// Tampilkan form tambah data
$routes->get('/biodata/tambah', 'Biodata::tambah');

// Proses simpan data (via POST)
$routes->post('/biodata/simpan', 'Biodata::simpan');
$routes->get('biodata/edit/(:num)', 'Biodata::edit/$1');
$routes->post('biodata/update/(:num)', 'Biodata::update/$1');
$routes->get('biodata/hapus/(:num)', 'Biodata::hapus/$1');
