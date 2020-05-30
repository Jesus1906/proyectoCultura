<?php
namespace App\Controllers;

class RouteController{

   public function vistaHome(){
      require_once "../app/views/principal/index.php";
   }

   public function vistaRegistro($request){
      $lideres = new ConsultaController();
      $lideres = $lideres->getAllLideres();

      $alumno = new RegistrarController();

      if($request->getMethod() == 'POST'){
         //si existe un post
         $mat = date('y') . date('w') . $_POST['day'] .$_POST['month'];
         //se genere una matricula con año semana del año dia y mes de inscripcion
        $alumno->regAlumno($_POST,$mat);
      }

      require_once '../app/views/principal/registro.php';
   }

   public function inicioALU(){
      require_once '../app/views/Alumno/principal_alumno.html';
   }

}
