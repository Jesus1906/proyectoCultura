<?php
namespace App\Controllers;

class RoutePrincipalController{

   public function vistaHome(){
      include "../app/views/principal/index.php";
   }

   public function vistaRegistro($request){
      $lideres = new ConsultaController();
      $lideres = $lideres->getAllLideres();

      $alumno = new RegistrarController();

      if ($_SERVER["REQUEST_METHOD"] == 'POST') {
          $alumno->regAlumno($_POST);
      }

      require_once '../app/views/principal/registro.php';
   }

}
