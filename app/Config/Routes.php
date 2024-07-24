<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//MENU
$routes->get('/', 'Home::index');

//CLIENTES  
$routes->get('ver_cliente', 'Clientes::index');
$routes->post('agregar_cliente', 'Clientes::agregarCliente');
$routes->get('nuevo_cliente', 'Clientes::nuevoCliente');
$routes->get('eliminar_cliente', 'Clientes::eliminarCliente');
$routes->get('buscar_cliente', 'Clientes::buscarCliente');
$routes->post('modificar_cliente', 'Clientes::modificarCliente');

//HOTELES
$routes->get('ver_hotel', 'Hoteles::index');
$routes->post('agregar_hotel', 'Hoteles::agregarHotel');
$routes->get('nuevo_hotel', 'Hoteles::nuevoHotel');
$routes->get('eliminar_hotel', 'Hoteles::eliminarHotel');
$routes->get('buscar_hotel', 'Hoteles::buscarHotel');
$routes->post('modificar_hotel', 'Hoteles::modificarHotel');

//RESERVACIONES
$routes->get('ver_reservacion', 'Reservaciones::index');
$routes->post('agregar_reservacion', 'Reservaciones::agregarReservacion');
$routes->get('nuevo_reservacion', 'Reservaciones::nuevoReservacion');
$routes->get('eliminar_reservacion', 'Reservaciones::eliminarReservacion');
$routes->get('buscar_reservacion', 'Reservaciones::buscarReservacion');
$routes->post('modificar_reservacion', 'Reservaciones::modificarReservacion');
