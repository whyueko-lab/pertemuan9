<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * contoh untuk pembuatan route
 */

// Home Barang
$routes->get(from: 'barang', to: 'Barang::index');
// Halaman Tambah
$routes->get(from: 'barang/tambah', to: 'Barang::tambah');
// Halaman Edit
$routes->get(from: 'barang/edit/(:any)', to: 'Barang::edit/$1');
// Proses CRUD
// Insert
$routes->post(from: 'barang/add', to: 'Barang::add');
// Update
$routes->post(from: 'barang/update', to: 'Barang::update');
// Hapus
$routes->get(from: 'barang/hapus/(:any)', to: 'Barang::hapus/$1');