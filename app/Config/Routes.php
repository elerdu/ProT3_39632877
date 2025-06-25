<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('contacto', 'Home::contacto');
$routes->get('soporte', 'Home::soporte');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('preguntas_frecuentes', 'Home::preguntas_frecuentes');
/* rutas del Registro de Usuarios */
$routes->get('/registro','usuarios_controller::create');
$routes->post('/enviar-form','usuarios_controller::formValidation');
/* rutas del login */
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');
/* rutas admin */ 
$routes->get('/usuarios/listar', 'usuarios_controller::listar');
$routes->get('/usuarios/editar/(:num)', 'usuarios_controller::editar/$1');
$routes->get('/usuarios/eliminar/(:num)', 'usuarios_controller::eliminar/$1');
$routes->post('/usuarios/actualizar/(:num)', 'usuarios_controller::actualizar/$1');
$routes->get('/usuarios/verEliminados', 'usuarios_controller::verEliminados');
$routes->get('/usuarios/restaurar/(:num)', 'usuarios_controller::restaurar/$1');