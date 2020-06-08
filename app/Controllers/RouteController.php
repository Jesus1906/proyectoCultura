<?php

namespace App\Controllers;

class RouteController
{

   public function vistaHome()
   {
      require_once "../app/views/principal/index.php";
   }

   public function vistaRegistro($request)
   {
      $lideres = new ConsultaController();
      $lideres = $lideres->getAllLideres();

      $alumno = new RegistrarController();

      if ($request->getMethod() == 'POST') {
         //si existe un post
         $mat = date('y') . date('w') . $_POST['day'] . $_POST['month'];
         //se genere una matricula con año semana del año dia y mes de inscripcion
         $alumno->regAlumno($_POST, $mat);
      }

      require_once '../app/views/principal/registro.php';
   }

   public function inicioALU()
   {
      if ($_SESSION['user'] == 'alumno') {
         require_once '../app/views/Alumno/principal_alumno.php';
      } else {
         echo 'No eres alumno';
      }
   }

   public function actualizarPerfil($request)
   {
      if ($_SESSION['user'] == 'alumno') {
         $lideres = new ConsultaController();
         $lideres = $lideres->getAllLideres();
         $alumno = new ConsultaController;
         $alumno = $alumno->getAlumno([
            'filtro' => 'matricula',
            'parametro' => $_SESSION['matricula']
         ]);
         if ($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();
            if ($data['firstName']) {
               $actualiza = new ActualizarController();
               $actualiza->actualizarPerfilAlm($alumno, $data);
            } else {
               $actualiza = new ActualizarController();
               $actualiza->actualizarPassword($alumno, $data);
            }
         }
         require_once '../app/views/Alumno/datosGenerales.php';
      } else {
         echo 'No eres alumno';
      }
   }

   public function inscripcionAlm()
   {
      if ($_SESSION['user'] == 'alumno') {
         $consulta = new ConsultaController();
         $alumno = $consulta->getAlumno([
            'filtro' => 'matricula',
            'parametro' => $_SESSION['matricula']
         ]);
         if ($alumno->ultimoCurso) {
            $curso = null;
         } else {
            //oferta Matutina
            $curso = $consulta->getPrimerCurso(); //nos trae un arreglo de cursos
            $curso = $curso[0]; //tomamos el primero y unico
            $ofertaMatutin = $consulta->getCursoOferta($curso->idCurso, 'M');
            if (count($ofertaMatutin) > 0) {
               $ofertaMatutina = $ofertaMatutin[0];

               $profesor = $ofertaMatutina->Profesor_Profesor_Matricula1;
               $profesor = $consulta->getProfesor([
                  'filtro' => 'Profesor_Matricula',
                  'parametro' => $profesor
               ]);
               $profesor = $profesor['firstName'] . ' ' . $profesor['secondName'] . " " . $profesor['firstLastName'] . " " . $profesor['secondLastName'];
               $adjunto = $ofertaMatutina->Adjunto_matriculaAdjunto;
               $adjunto = $consulta->getAdjunto([
                  'filtro' => 'matricula',
                  'parametro' => $adjunto
               ]);
               $adjunto = $adjunto['firstName'] . ' ' . $adjunto['secondName'] . " " . $adjunto['firstLastName'] . " " . $adjunto['secondLastName'];
            }

            //oferta Vespertina
            $ofertaVespertin = $consulta->getCursoOferta($curso->idCurso, 'V');
            if (count($ofertaVespertin) > 0) {
               $ofertaVespertina = $ofertaVespertin[0];
               $profesor1 = $ofertaVespertina->Profesor_Profesor_Matricula1;
               $profesor1 = $consulta->getProfesor([
                  'filtro' => 'Profesor_Matricula',
                  'parametro' => $profesor
               ]);
               $profesor1 = $profesor1['firstName'] . ' ' . $profesor1['secondName'] . " " . $profesor1['firstLastName'] . " " . $profesor1['secondLastName'];
               $adjunto1 = $ofertaVespertina->Adjunto_matriculaAdjunto;
               $adjunto1 = $consulta->getAdjunto([
                  'filtro' => 'matricula',
                  'parametro' => $adjunto
               ]);
               $adjunto1 = $adjunto1['firstName'] . ' ' . $adjunto1['secondName'] . " " . $adjunto1['firstLastName'] . " " . $adjunto1['secondLastName'];
            }
         }
         require_once '../app/views/Alumno/inscripciones.php';
      } else {
         echo 'No eres alumno';
      }
   }
}
