<?php
require_once '../vendor/autoload.php';

use Aura\Router\RouterContainer;
use App\Controllers\RouteController;

define('RUTA_URL', '/proyectocultura/');
define('RUTA_SERVER', 'http://localhost/proyectocultura/');
define('RUTA_CONTROLLER', 'App\Controllers');

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
   $_SERVER,
   $_GET,
   $_POST,
   $_COOKIE,
   $_FILES
);

$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();

$map->get('/', RUTA_URL, [
   'controlador' => RUTA_CONTROLLER . '\RouteController',
   'accion' => 'vistaHome',
]);

$map->get('registro', RUTA_URL . 'registro', [
   'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
   'accion' => 'vistaRegistro',
]);

$map->post('guardarRegistro', RUTA_URL . 'registro', [
   'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
   'accion' => 'vistaRegistro',
]);

$map->get('cursos', RUTA_URL . 'curso', [
   'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
   'accion' => 'vistaCurso',
]);

$map->get('login', RUTA_URL . 'login', [
   'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
   'accion' => 'vistaLogin',
]);
//////////////////////////////////////////////////// ---inicio controlador Admin Registro
$map->get('gAgregarAdj', RUTA_URL . 'Registro/adjunto', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'gAgregarAdj',
]);

$map->post('pAgregarAdj', RUTA_URL . 'Registro/adjunto', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'pAgregarAdj',
]);

$map->get('gAgregarADM', RUTA_URL . 'Registro/administrador', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'gAgregarADM',
]);

$map->post('pAgregarADM', RUTA_URL . 'Registro/administrador', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'pAgregarADM',
]);

//--------------------------------------------------------- en comun AL-ADM-ADJ
$map->get('gAgregarALU', RUTA_URL . 'Registro/alumno', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'gAgregarALU',
]);

$map->post('pAgregarALU', RUTA_URL . 'Registro/alumno', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'pAgregarALU',
]);
//--------------------------------------------------------

$map->get('gAgregarLIDER', RUTA_URL . 'Registro/lider', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'gAgregarLIDER',
]);

$map->post('pAgregarLIDER', RUTA_URL . 'Registro/lider', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'pAgregarLIDER',
]);

$map->get('gAgregarPROF', RUTA_URL . 'Registro/profesor', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'gAgregarPROF',
]);

$map->post('pAgregarPROF', RUTA_URL . 'Registro/profesor', [
   'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
   'accion' => 'pAgregarPROF',
]);
//////////////////////////////////////////////////// ---fin controlador Admin Registro

//map get(nombre que se le da en url, url que debe hacer match, handler o accion a realizar )

$matcher = $routerContainer->getMatcher();

$route = $matcher->match($request);

if (!$route) {
   echo 'No hay ruta <br>';
   var_dump($map);
} else {
   $datosHandler = $route->handler;
   $nombreAccion = $datosHandler['accion'];
   $nombreControlador = $datosHandler['controlador'];

   $controlador =  new $nombreControlador;
   $controlador->$nombreAccion($request);
}
