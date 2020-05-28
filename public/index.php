<?php
   require_once '../vendor/autoload.php';

   use Aura\Router\RouterContainer;
   use App\Controllers\RouteController;

   define('RUTA_URL','/proyectoCultura/' );
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
      'controlador' => RUTA_CONTROLLER . '\RouteController',
      'accion' => 'vistaRegistro',
   ]);

   $map->post('guardarRegistro', RUTA_URL . 'registro', [
      'controlador' => RUTA_CONTROLLER . '\RouteController',
      'accion' => 'vistaRegistro',
   ]);

   //map get(nombre que se le da en url, url que debe hacer match, handler o accion a realizar )

   $matcher = $routerContainer->getMatcher();

   $route = $matcher->match($request);

   if(!$route){
      echo 'No hay ruta <br>';
      var_dump($map);
   }else{
      $datosHandler = $route->handler;
      $nombreAccion = $datosHandler['accion'];
      $nombreControlador = $datosHandler['controlador'];

      $controlador =  new $nombreControlador;
      $controlador->$nombreAccion($request);
   }
