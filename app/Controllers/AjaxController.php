<?php

namespace App\Controllers;

use App\Models\{Lider_celula, Alumno, Adjunto, Administrador, Profesor, Curso};

class AjaxController extends BaseController{

   public function __construct(){
      $this->iniciarControladorBase();
   }

   public function asincronizarAlumno($post){
      $datos = $post->getParsedBody();
      switch ($datos['filtro']) {
         case 'matricula':{
            //obtener de la tabla alumno en el campo matriculaAlumno todos los datos que sean similares al dato del post
            $res = Alumno::where('matriculaAlumno', 'like', '%'.$datos['dato'].'%')->get();
            //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
            $json = json_encode($res);
            echo $json;
         };

         break;

         case 'name':{
            //obtener de la tabla alumno en el campo nombre todos los datos que sean similares al dato del post
            $res = Alumno::where('firstName', 'like', '%'.$datos['dato'].'%')->get();
            //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
            $json = json_encode($res);
            echo $json;
         };

         break;

         case 'apellido':{
            //obtener de la tabla alumno en el campo apellido todos los datos que sean similares al dato del post
            $res = Alumno::where('firstLastName', 'like', '%'.$datos['dato'].'%')->get();
            //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
            $json = json_encode($res);
            echo $json;
         };

         break;

      default:{
         $res = Alumno::all();
         //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
         $json = json_encode($res);
         echo $json;
      }

      }//switch
   }//asincronizarAlumno

   public function asincronizarLider($post){
      $datos = $post->getParsedBody();
      switch ($datos['filtro']) {
         case 'name':{
            //obtener de la tabla alumno en el campo matriculaAlumno todos los datos que sean similares al dato del post
            $res = Lider_celula::where('firstName', 'like', '%'.$datos['dato'].'%')->get();
            //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
            $json = json_encode($res);
            echo $json;
         };

         break;

         case 'apellido':{
            //obtener de la tabla alumno en el campo apellido todos los datos que sean similares al dato del post
            $res = Lider_celula::where('firstLastName', 'like', '%'.$datos['dato'].'%')->get();
            //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
            $json = json_encode($res);
            echo $json;
         };

         break;

      default:{
         $res = Lider_celula::all();
         //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
         $json = json_encode($res);
         echo $json;
      }

      }//switch
   }//asincronizarlider

}
