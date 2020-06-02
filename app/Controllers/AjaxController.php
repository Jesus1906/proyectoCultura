<?php

namespace App\Controllers;

use App\Models\{Lider_celula, Alumno, Adjunto, Administrador, Profesor, Curso};

class AjaxController extends BaseController{

   public function __construct(){
      $this->iniciarControladorBase();
   }

   public function asincronizar($post){
      $datos = $post->getParsedBody();
      switch ($datos['filtro']) {
         case 'matricula':
         //obtener de la tabla alumno en el campo matriculaAlumno todos los datos que sean similares al dato del post
         $res = Alumno::where('matriculaAlumno', 'like', '%'.$datos['dato'].'%')->get();
         //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
         $json = json_encode($res);
         echo $json;
            break;
         case '':

         break;
         default:

            break;
      }
   }//asincronizar

}
