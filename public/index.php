<?php
require_once '../vendor/autoload.php';

use Aura\Router\RouterContainer;
use App\Models\Web;

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


$rutas = new Web();

$rutas->cargarRutas($map);
//cargamos las rutas

$matcher = $routerContainer->getMatcher();

$route = $matcher->match($request);

if (!$route) {
   echo 'No hay ruta <br>';
} else {
   $datosHandler = $route->handler;
   $nombreAccion = $datosHandler['accion'];
   $nombreControlador = $datosHandler['controlador'];

   $controlador =  new $nombreControlador;
   $controlador->$nombreAccion($request);
   //foreach($response->getHeaders() as $name => $values){ esto es para los redireccionamientos
      //   foreach($values as $value){
      //       header(sprintf('%s: %s', $name, $value), false);
      //   }
      //}
      //http_response_code($response->getStatusCode());
}
