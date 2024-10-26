<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\HomeControllers;

$router = new Router();

$router->get('/', [HomeControllers::class, 'home']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();