<?php

namespace App\Controllers;

use App\Models\{Lider_celula, Alumno, Adjunto, Administrador, Profesor, Curso};
use App\Controllers\{ValidatorController, ConsultaController, ActualizarController};

class AjaxController extends BaseController
{

   public function __construct()
   {
      $this->iniciarControladorBase();
   }

   public function asincronizarAlumno($post)
   {
      $datos = $post->getParsedBody();
      switch ($datos['filtro']) {
         case 'matricula': {
               //obtener de la tabla alumno en el campo matriculaAlumno todos los datos que sean similares al dato del post
               $res = Alumno::where('matriculaAlumno', 'like', '%' . $datos['dato'] . '%')->get();
               //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
               $json = json_encode($res);
               echo $json;
            };

            break;

         case 'name': {
               //obtener de la tabla alumno en el campo nombre todos los datos que sean similares al dato del post
               $res = Alumno::where('firstName', 'like', '%' . $datos['dato'] . '%')
               ->orWhere('secondName', 'like', '%' . $datos['dato'] . '%')->get();
               //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
               $json = json_encode($res);
               echo $json;
            };

            break;

         case 'apellido': {
               //obtener de la tabla alumno en el campo apellido todos los datos que sean similares al dato del post
               $res = Alumno::where('firstLastName', 'like', '%' . $datos['dato'] . '%')->get();
               //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
               $json = json_encode($res);
               echo $json;
            };

            break;

         default: {
               $res = Alumno::all();
               //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
               $json = json_encode($res);
               echo $json;
            }
      } //switch
   } //asincronizarAlumno

   public function asincronizarLider($post)
   {
      $datos = $post->getParsedBody();
      switch ($datos['filtro']) {
         case 'name': {
               //obtener de la tabla alumno en el campo matriculaAlumno todos los datos que sean similares al dato del post
               $res = Lider_celula::where('firstName', 'like', '%' . $datos['dato'] . '%')->get();
               //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
               $json = json_encode($res);
               echo $json;
            };

            break;

         case 'apellido': {
               //obtener de la tabla alumno en el campo apellido todos los datos que sean similares al dato del post
               $res = Lider_celula::where('firstLastName', 'like', '%' . $datos['dato'] . '%')->get();
               //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
               $json = json_encode($res);
               echo $json;
            };

            break;

         default: {
               $res = Lider_celula::all();
               //transformar los resultados(que vienen como objeto JSON)a string para poder ser enviados al JS
               $json = json_encode($res);
               echo $json;
            }
      } //switch
   } //asincronizarlider

   public function consultaLider($post)
   {
      $datos = $post->getParsedBody();
      $res = Lider_celula::where('id', $datos['id'])->get();
      $json = \json_encode($res);
      echo $json;
   } //consultar lideres

   public function consultaLiderEditar($datos)
   {

      $lider = new ConsultaController();
      $val = new ValidatorController();

      $post = $datos->getParsedBody();

      $idLider = [
         'filtro' => 'id',
         'parametro' => $post['id']
      ];
      $lider = $lider->getLider($idLider); //usamos el controlador de consulta para obetener el lider que

      $val->validarTexto($post['firstName'], 4, 15, false);
      $lider->firstName = $post['firstName'];

      $val->validarTexto($post['secondName'], 4, 22, true);
      $lider->secondName = $post['secondName'];

      $val->validarTexto($post['firstLastName'], 4, 15, false);
      $lider->firstLastName = $post['firstLastName'];

      $val->validarTexto($post['secondLastName'], 4, 15, false);
      $lider->secondLastName = $post['secondLastName'];

      $val->validarTelefono($post['phone'], false);
      $lider->phone = $post['phone'];

      //validacion de errores
      $error = $val->validarErrores();

      if ($error != false) {
         echo $error;
      } else {
         $lider->save();
         echo 'Exito al guardar';
      }
   }

   public function consultaCursos($request)
   {
      $dataPost = $request->getParsedBody();
      $res = Curso::all();
      $json = json_encode($res);
      echo $json;
   }

   public function consultaProf($request){
      $dataPost = $request->getParsedBody();
      $res = Profesor::find($dataPost['id']);
      $res = $res->firstName + " " + $res->secondName;
      $json = json_encode($res);
      echo $json;
   }

   public function buscarCursos($request){
      $datos = $request->getParsedBody($request);
      $res = Curso::where('idCurso', $datos['id'])->get();
      $json = \json_encode($res);
      echo $json;
   }//buscarcurso

   public function editarCursos($request){
      $post = $request->getParsedBody($request);
      $val = new ValidatorController();
      $curso = new ActualizarController();

      $val->validarTexto($post['name'], 4, 70, false);
      $val->validarNumero($post['nivel'],1,20);
      $val->validarTexto($post['descripcion'],4,null,false);
      $val->validarNumero($post['subnivel'],1,20);

      //validacion de errores
      $error = $val->validarErrores();
      
      if ($error != false) {
         echo $error;
      } else {
         $curso->actualizarCursos($curso,$post);
         echo 'Exito al guardar';
      }

   }//editar cursos

}//consultar editar lider
//controlador ajax
