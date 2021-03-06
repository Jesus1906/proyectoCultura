<?php
use Aura\Router\RouterContainer;
// declaramos que usaremos el router de aura

use App\Models\Web;
//usamos el modelo de web que contiene todas las rutas

require_once '../vendor/autoload.php';
//necesitaremos el autoload aqui

session_start();
//iniciamos las seciones

define('RUTA_URL', '/proyectocultura/');
define('RUTA_SERVER', 'http://localhost/proyectocultura/');
define('RUTA_CONTROLLER', 'App\Controllers');
define('RAIZ', dirname(__FILE__));
//definimos varias constantes que utilizaremos a lo largo de todo el sistema

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
   $_SERVER,
   $_GET,
   $_POST,
   $_COOKIE,
   $_FILES
);
//utilizaremos el estandar psr7 de laminas diactoros donde en una sola variable manejaremos las globales listadas

$routerContainer = new RouterContainer();
// creamos un contenedor de rutas

$map = $routerContainer->getMap();
//obtenemos el mapa de rutas

$rutas = new Web();
//instanciamos el modelo donde guardamos todas las rutas

$rutas->cargarRutas($map);
//cargamos las rutas

$matcher = $routerContainer->getMatcher();
//creamos un matcher que sera el que verifique que las rutas ingresadas esten mapeadas en el sistema

$route = $matcher->match($request);
//obtenemos el match de la ruta ingresada

if (!$route) {
   //si no se reconoce la ruta nos mandara a la pagina de 404
   require_once '../app/views/principal/error.php';

} else {
   //se reconoce la ruta entonces
   $datosHandler = $route->handler;
   //obtenemos el handler del objeto ruta o bien la informacion(controlador y accion)

   $nombreAccion = $datosHandler['accion'];
   //asignamos el nombre de la accion

   $nombreControlador = $datosHandler['controlador'];
   //asignamos el nombre del controlador

   $needsAuth = $datosHandler['auth'] ?? false;
   //verificamos si necesita autenticacion

   $matricula = $_SESSION['matricula'] ?? null;
   //guardamos la matricula en una variable

   if(!$matricula && $needsAuth){
      // preguntamos si no existe una matricula en session y si la pagina a la que se desea acceder necesita autenticacion
      //si no existe y necesitamos logearnos no nos dejara pasar del login
      header('Location: '.RUTA_URL);
      exit;
   }

   $controlador =  new $nombreControlador;
   //creamos una instancia del controlador que viene en el handler

   $response = $controlador->$nombreAccion($request);
   //mandamos a llamar al metodo de ese controlador y le pasamos el objeto request
}
