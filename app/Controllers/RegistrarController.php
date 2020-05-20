<?php

namespace App\Controllers;
use App\Models\Alumno;
use App\Models\Lider_celula;


class RegistrarController extends BaseController{
   public function __construct()
   {
      $this->iniciarControladorBase();
   }

   public function regUsuario($queReg, $quienReg){
      if($_SERVER['REQUEST_METHOD']== 'POST'){
         switch($quienReg){
            case '3':{
               echo "Admin reg";
            }
            break;
            case '2':{
               echo "Adjun reg";
            }
            break;
            case '1':{
               echo "Alumn reg";
            }
            break;
         }// fin de switch
      }else{
         die('Error al realizar Registro');
      }
   }

   public function getAlumno(){
      return Alumno::all();
   }

   public function regLider($post){
      $lider = new Lider_celula();
      $lider->firstName = $post['firstName'];
      $lider->secondName = $post['secondName'];
      $lider->firstLastName = $post['firstLastName'];
      $lider->secondLastName = $post['secondLastName'];
      $lider->phone = $post['phone'];
      $lider->save();
   }
   
   public function regAlumno($post){
      $birthday = $post['year'] . '-' . $post['month'] . '-' . $post['day'];
      $alumno = new Alumno();
      $alumno->matriculaAlumno = 22;
      $alumno->firstName = $post['firstName'];
      $alumno->secondName = $post['secondName'];
      $alumno->firstLastName = $post['firstLastName'];
      $alumno->secondLastName = $post['secondLastName'];
      $alumno->cellPhone = $post['phone'];
      $alumno->housePhone = null;//este
      $alumno->birthday = $birthday;
      $alumno->maritalStatus = $post['statusCivil'];
      $alumno->serviseStatus = $post['statusService'];
      $alumno->statusBautizo = $post['statusBautizo'];
      $alumno->email = $post['email'];
      $alumno->password = password_hash($post['password'], PASSWORD_DEFAULT); 
      $alumno->photo = null;
      $alumno->activo = 'true';
      $alumno->pago = false;
      $alumno->pagoCongelado = false;
      $alumno->Lider_Celula_id = $post['lider'];
      $alumno->save();
   }

   //fin funcion registrar usuario
}
