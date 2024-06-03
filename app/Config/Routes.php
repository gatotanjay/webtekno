<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Dashboard Routes
$routes->get('/Tour','Tour::index');
$routes->get('/Tour/TanahLot','Tour::tanahlot');
$routes->get('/Tour/Bedugul','Tour::bedugul');
$routes->get('/Tour/Ubud1','Tour::ubud1');
$routes->get('/Tour/Ubud2','Tour::ubud2');
$routes->get('/Tour/Karangasem1','Tour::karangasem1');
$routes->get('/Tour/Karangasem2','Tour::karangasem2');
$routes->get('/Tour/Badung','Tour::badung');


// Pembayaran routes
$routes->get('/Car', 'Car::index');

// Galery
$routes->get('/Galery', 'Galery::index');

// Management Makanan Routes
$routes->get('/ManagementMakanan','ManagementMakanan::index');  