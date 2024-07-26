<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//MENU
$routes->get('/', 'Menu::index');

//CLIENTES  
$routes->get('ver_cliente', 'Clientes::index');
$routes->post('agregar_cliente', 'Clientes::agregarCliente');
$routes->get('nuevo_cliente', 'Clientes::nuevoCliente');
$routes->get('eliminar_cliente/(:num)', 'Clientes::eliminarCliente/$1');
$routes->get('buscar_cliente/(:num)', 'Clientes::buscarCliente/$1');
$routes->post('modificar_cliente', 'Clientes::modificarCliente');

//HOTELES
$routes->get('ver_hotel', 'Hoteles::index');
$routes->post('agregar_hotel', 'Hoteles::agregarHotel');
$routes->get('nuevo_hotel', 'Hoteles::nuevoHotel');
$routes->get('eliminar_hotel/(:num)', 'Hoteles::eliminarHotel/$1');
$routes->get('buscar_hotel/(:num)', 'Hoteles::buscarHotel/$1');
$routes->post('modificar_hotel', 'Hoteles::modificarHotel');

//RESERVACIONES
$routes->get('ver_reservacion', 'Reservaciones::index');
$routes->post('agregar_reservacion', 'Reservaciones::agregarReservacion');
$routes->get('nueva_reservacion', 'Reservaciones::nuevaReservacion');
$routes->get('eliminar_reservacion/(:num)', 'Reservaciones::eliminarReservacion/$1');
$routes->get('buscar_reservacion/(:num)', 'Reservaciones::buscarReservacion/$1');
$routes->post('modificar_reservacion', 'Reservaciones::modificarReservacion');
