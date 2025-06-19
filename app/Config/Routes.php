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