<?php
use Aura\Router\RouterContainer;
use App\Models\Web;
require_once '../vendor/autoload.php';

session_start();//iniciamos las seciones

define('RUTA_URL', '/proyectocultura/');
define('RUTA_SERVER', 'http://localhost/proyectocultura/');
define('RUTA_CONTROLLER', 'App\Controllers');
define('RAIZ', dirname(__FILE__));

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
   require_once '../app/views/principal/error.php';
} else {

   $datosHandler = $route->handler;
   $nombreAccion = $datosHandler['accion'];
   $nombreControlador = $datosHandler['controlador'];
   $needsAuth = $datosHandler['auth'] ?? false;
   $matricula = $_SESSION['matricula'] ?? null;

   if(!$matricula && $needsAuth){
      header('Location: '.RUTA_URL);
      exit;
   }

   $controlador =  new $nombreControlador;
   $response = $controlador->$nombreAccion($request);
}
