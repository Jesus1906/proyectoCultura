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
      if ($_SESSION['user'] == 'alumno') {
         require_once '../app/views/Alumno/principal_alumno.php';
     } else {
         echo 'No eres alumno';
     }
   }

   public function actualizarPerfil($request){
      if ($_SESSION['user'] == 'alumno') {
         $alumno = new ConsultaController;
         $alumno = $alumno->getAlumno([
             'filtro' => 'matricula',
             'parametro' => $_SESSION['matricula']
         ]);  
         if ($request->getMethod() == 'POST') {
             $actualiza = new ActualizarController();
             $actualiza->actualizarPerfilAdj($adjunto, $request->getParsedBody());
         }
         require_once '../app/views/adjunto/perfil_adju.html';
     } else {
         echo 'No eres alumno';
     }
   }
   

}
