<?php

namespace App\Controllers;
use App\Models\{Alumno, Lider_celula, Profesor, Adjunto, Administrador, Curso};


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
      $matricula = new MatriculaController('alum');
      $alumno = new Alumno();
      $alumno->matriculaAlumno = $matricula->asignarMatricula();
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

   public function regAdministrador($post){
      $matricula = new MatriculaController('admi');
      $administrador = new Administrador();
      $administrador->matriculaAdministrador = $matricula->asignarMatricula();
      $administrador->firstName = $post['firstName'];
      $administrador->secondName = $post['secondName'];
      $administrador->firstLastName = $post['firstLastName'];
      $administrador->secondLastName = $post['secondLastName'];
      $administrador->email = $post['email'];
      $administrador->password = password_hash($post['password'], PASSWORD_DEFAULT);
      $administrador->phone = $post['phone'];
      $administrador->save();
   }

   public function regAdjunto($post){
      $birthday = $post['year'] . '-' . $post['month'] . '-' . $post['day'];
      $matricula = new MatriculaController('adju');
      $adjunto = new Adjunto();
      $adjunto->matriculaAdjunto = $matricula->asignarMatricula();
      $adjunto->firstName = $post['firstName'];
      $adjunto->secondName = $post['secondName'];
      $adjunto->firstLastName = $post['firstLastName'];
      $adjunto->secondLastName = $post['secondLastName'];
      $adjunto->birthday = $birthday;
      $adjunto->email = $post['email'];
      $adjunto->password = password_hash($post['password'], PASSWORD_DEFAULT);
      $adjunto->phone = $post['phone'];
      $adjunto->save();
   }

   public function regProfesor($post){
      $profesor = new Profesor();
      $profesor->firstName = $post['firstName'];
      $profesor->secondName = $post['secondName'];
      $profesor->firstLastName = $post['firstLastName'];
      $profesor->secondLastName = $post['secondLastName'];
      $profesor->email = $post['email'];
      $profesor->phone = $post['phone'];
      $profesor->save();
   }

   public function regCurso($post){
      $curso = new Curso();
      $curso->name = $post['name'];
      $curso->nivel = $post['nivel'];
      $curso->descripcion = $post['descripcion'];
      $curso->cursoAnterior = $post['cursoAnterior'];
      $curso->cursoSiguiente = $post['cursoSiguiente'];
   }
}
