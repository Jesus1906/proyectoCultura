<?php
namespace App\Controllers;

use App\Controllers\ConsultaController;
class RoutePrincipalController{

   public function vistaHome(){
      include "../app/views/principal/index.php";
   }

   public function vistaRegistro($request){
      //se instancian las clases registro consulta
      $lideres = new ConsultaController();
      $alumno = new RegistrarController();

      //se obtienen los daots
      $lideres = $lideres->getAllLideres();

      if ($request->getMethod() == 'POST') {
         $datos = $request->getParsedBody();
         $exito = $alumno->regAlumno($datos);
         var_dump($exito);
      }
      require_once '../app/views/principal/registro.php';
   }//fin vista registro

   public function vistaCursos(){
      //se instancian consultas
      $consulta = new ConsultaController();

      //se obtienen los daots
      $cursos = $consulta->getAllCursos();
      include "../app/views/principal/cursos.php";
   }

   public function vistaLogin(){
      include "../app/views/principal/login.php";
   }

}
