<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/data-kategori', 'Home::kategori');
$routes->get('/data-barang', 'Home::barang');