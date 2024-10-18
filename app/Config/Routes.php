<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pelanggan::daftar');
$routes->post('pelanggan/simpan', 'Pelanggan::simpan');
$routes->get('produk/index', 'Produk::index');
$routes->get('produk/cari', 'Produk::cari');
$routes->get('produk/detail/(:num)', 'Produk::detail/$1');
$routes->get('produk/checkout/(:num)', 'Produk::checkout/$1');
$routes->post('produk/lakukanPesanan', 'Produk::lakukanPesanan');
