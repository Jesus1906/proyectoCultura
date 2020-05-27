<?php
require_once '../vendor/autoload.php';

ini_set('display_errors', 1); //inicilizar las variables de php
ini_set('display_starup_error', 1);
error_reporting(E_ALL); //todos los errores

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer; // declaramos que usaremos el route container de aura

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'culturafiladelfia',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);


$routerContainer = new RouterContainer();// creamos una instancia de la clase
$map = $routerContainer->getMap();//obtenemos el mapa de rutas 

$map->get('index', '/proyectoCultura/', '../views/principal/principal.html');

$matcher = $routerContainer->getMatcher();//obtenemos el matcher
$route = $matcher->match($request);

if(!$route){
    echo 'No Route';
}else{
    require $route->handler;
}
