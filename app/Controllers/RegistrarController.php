<?php

namespace App\Controllers;
use App\Models\{Alumno, Lider_celula, Profesor, Adjunto, Administrador, Curso};
use App\Controllers\ValidatorController;

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
      $matricula = new MatriculaController();
      $alumno = new Alumno();
      $val = new ValidatorController();

      $alumno->matriculaAlumno = $matricula->asignarMatricula('alu');

      $val->validarTexto($post['firstName'], 4, 15, false);
      $alumno->firstName = $post['firstName'];

      $val->validarTexto($post['secondName'], 4, 22, true);
      $alumno->secondName = $post['secondName'];

      $val->validarTexto($post['firstLastName'], 4, 15, false);
      $alumno->firstLastName = $post['firstLastName'];

      $val->validarTexto($post['secondLastName'], 4, 15, false);
      $alumno->secondLastName = $post['secondLastName'];

      $val->validarTelefono($post['phone'], false);
      $alumno->cellPhone = $post['phone'];

      $alumno->housePhone = null;//este

      $val->validarEdad($post['birthday']);
      $alumno->birthday = $post['birthday'];

      $alumno->maritalStatus = $post['statusCivil'];
      $alumno->serviseStatus = $post['statusService'];
      $alumno->statusBautizo = $post['statusBautizo'];

      $val->validarCorreo($post['email']);
      $alumno->email = $post['email'];

      $val->validarPassIgual($post['password'], $post['password1']);
      $alumno->password = password_hash($post['password'], PASSWORD_DEFAULT);

      $alumno->photo = null;
      $alumno->activo = 'true';
      $alumno->pago = false;
      $alumno->pagoCongelado = false;
      $alumno->Lider_Celula_id = $post['lider'];

      //validacion de errores
      $error = $val->validarErrores();

      if($error!=false){
         return $error;
      }else{
         $alumno->save();
         return 'Exito al guardar';
      }
   }

   public function regAdministrador($post){
      $matricula = new MatriculaController();
      $administrador = new Administrador();
      $administrador->matriculaAdministrador = $matricula->asignarMatricula('adm');
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
      $matricula = new MatriculaController();
      $adjunto = new Adjunto();
      $adjunto->matriculaAdjunto = $matricula->asignarMatricula('adj');
      $adjunto->firstName = $post['firstName'];
      $adjunto->secondName = $post['secondName'];
      $adjunto->firstLastName = $post['firstLastName'];
      $adjunto->secondLastName = $post['secondLastName'];
      $adjunto->birthday = $post['birthday'];
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
