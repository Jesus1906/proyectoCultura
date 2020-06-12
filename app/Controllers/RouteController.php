<?php

namespace App\Controllers;

use App\Models\Adjunto;
use DateTime;
use Symfony\Component\VarDumper\VarDumper;

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

   public function cursos()
   {
      if ($_SESSION['user'] == 'alumno') {
         $consulta = new ConsultaController();
         $periodo = $consulta->getPeriodo();
         $data = $consulta->getCursoInscritoEnPeriodoActual($_SESSION['matricula'], $periodo->periodo);
         if (count($data) != 0) {
            $data = $data[0];

            require_once '../app/views/Alumno/cursos_alumn.php';
         } else {

            require_once '../app/views/Alumno/sincurso.php';
         }
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
         ]); //traemos la matricula del alumno

         $periodo = $consulta->getPeriodo(); //traemos el periodo actual
         $inicioClases = strtotime($periodo->inicio); //convertimos la fecha de inicio de clase en time
         $fecha = strtotime($consulta->getFecha()); //convertimos la fecha de hoy en time
         $ultimaOfertaIgualAPeriodo = $consulta->periodoYOfertaActual($periodo); //traemos si la ultima oferta que se hizo fue dentro del periodo actual
         if ($fecha > $inicioClases || $ultimaOfertaIgualAPeriodo || $periodo->inscripcionFin == 1) { //preguntamos si la fecha actual es menor al inicio de clase y si la ultima oferta que se hizo fue dentro de este periodo
            require_once '../app/views/Alumno/inscripcionNoDisponible.php';
         } else {


            if ($alumno->ultimoCurso) {

               $curs = explode("-", $alumno->ultimoCurso);
               $curso = $consulta->getCursos($curs[0], $curs[1] + 1); //nos trae un arreglo de cursos que coinsidan con el nivel y el subnivel mandado

               if (count($curso) == 0) { // preguntamos si existe el curso siguiente del ultimo que curso, si no preguntamos en el siguiente nivel

                  $curso = $consulta->getCursos($curs[0] + 1, 1);
               }

               if (count($curso) > 0) { //si no hay curso aqui es porque ya no hay mas cursos que este alumno pueda cursar

                  $completoCursos = false;
                  $curso = $curso[0]; //tomamos el primero y unico
                  $ofertaMatutin = $consulta->getCursoOferta($curso->idCurso, 'M', $periodo->periodo); //esto me trae un arreglo de las ofertas matutinas de un curso

                  if (count($ofertaMatutin) > 0) { //si el arreglo esta en 0 significa que no hay oferta matutina

                     $ofertaMatutina = $ofertaMatutin[0]; //obtenemos la oferta matutina

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
                  $ofertaVespertin = $consulta->getCursoOferta($curso->idCurso, 'V', $periodo->periodo); //esto me trae un arreglo de las ofertas vespertinas de un curso

                  if (count($ofertaVespertin) > 0) { //si el arreglo esta en 0 significa que no hay oferta vespertina

                     $ofertaVespertina = $ofertaVespertin[0]; //obtenemos la oferta vespertina
                     $profesor1 = $ofertaVespertina->Profesor_Profesor_Matricula1;
                     $profesor1 = $consulta->getProfesor([
                        'filtro' => 'Profesor_Matricula',
                        'parametro' => $profesor1
                     ]);
                     $profesor1 = $profesor1['firstName'] . ' ' . $profesor1['secondName'] . " " . $profesor1['firstLastName'] . " " . $profesor1['secondLastName'];
                     $adjunto1 = $ofertaVespertina->Adjunto_matriculaAdjunto;
                     $adjunto1 = $consulta->getAdjunto([
                        'filtro' => 'matricula',
                        'parametro' => $adjunto1
                     ]);
                     $adjunto1 = $adjunto1['firstName'] . ' ' . $adjunto1['secondName'] . " " . $adjunto1['firstLastName'] . " " . $adjunto1['secondLastName'];
                  }
               } else {

                  $curso = $consulta->getCursos(1, 1); //nos trae un arreglo de cursos que coinsidan con el nivel y el subnivel mandado
                  $curso = $curso[0]; //tomamos el primero y unico
                  $curso->name = "Felicidades!!!!, no existen más cursos ya tomaste todos";
                  $completoCursos = true;
                  $profesor = "Felicidades!!!!, no existen más cursos ya tomaste todos";
                  $adjunto = $profesor;
                  $profesor1 = $profesor;
                  $adjunto1 = $profesor;
                  $ofertaMatutin = [];
                  $ofertaVespertin = [];
               }
            } else {

               //oferta Matutina
               $completoCursos = false;
               $curso = $consulta->getCursos(1, 1); //nos trae un arreglo de cursos que coinsidan con el nivel y el subnivel mandado
               $curso = $curso[0]; //tomamos el primero y unico
               $ofertaMatutin = $consulta->getCursoOferta($curso->idCurso, 'M', $periodo->periodo);

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
               $ofertaVespertin = $consulta->getCursoOferta($curso->idCurso, 'V', $periodo->periodo);
               if (count($ofertaVespertin) > 0) {
                  $ofertaVespertina = $ofertaVespertin[0];
                  $profesor1 = $ofertaVespertina->Profesor_Profesor_Matricula1;
                  $profesor1 = $consulta->getProfesor([
                     'filtro' => 'Profesor_Matricula',
                     'parametro' => $profesor1
                  ]);
                  $profesor1 = $profesor1['firstName'] . ' ' . $profesor1['secondName'] . " " . $profesor1['firstLastName'] . " " . $profesor1['secondLastName'];
                  $adjunto1 = $ofertaVespertina->Adjunto_matriculaAdjunto;
                  $adjunto1 = $consulta->getAdjunto([
                     'filtro' => 'matricula',
                     'parametro' => $adjunto1
                  ]);
                  $adjunto1 = $adjunto1['firstName'] . ' ' . $adjunto1['secondName'] . " " . $adjunto1['firstLastName'] . " " . $adjunto1['secondLastName'];
               }
            }
            require_once '../app/views/Alumno/inscripciones.php';
         }
      } else {
         echo 'No eres alumno';
      }
   }

   public function pInscripcionAlm($request)
   {
      if ($_SESSION['user'] == 'alumno') {
         $dataInscripcion = $request->getParsedBody();
         $consulta = new ConsultaController();
         $periodo = $consulta->getPeriodo();
         $registro = $consulta->getInscripcion($dataInscripcion['idAlumno'], $dataInscripcion['idOfertaM'], $dataInscripcion['idOfertaV'], $periodo->periodo);
         //buscamos si ya esta registrado ya sea en el turno de la mañana o de la tarde
         if (count($registro) == 0) { // si el registro es igual a 0 es porque no se ha inscrito aun si es diferente es porque ya tiene una inscripcion
            $registro = new RegistrarController();
            $registro->regInscripcion($dataInscripcion);
            $data = $consulta->getInfoFirstComprobante($periodo->periodo, $dataInscripcion['idAlumno']);

            if (count($data) != 0) {
               $data = $data[0];

               require_once '../app/views/Alumno/comprobante1.php';
            } else {

               echo "<script>
               alert('Algo Salio mal ve a la ventana de comprobantes y/o cursos y verifica tu incripcion')
               </script>";
               $this->inscripcionAlm();
            }
         } else {
            echo "<script>
               alert('ya te has inscrito')
               </script>";
            $this->inscripcionAlm();
         }
      } else {
         echo 'No eres alumno';
      }
   }

   public function consultaComprobante()
   {
      $consulta = new ConsultaController();
      $periodo = $consulta->getPeriodo();
      $data = $consulta->dataComprobantes($_SESSION['matricula'], $periodo->periodo); //consultamos el curso al cual esta inscrito en este periodo

      if (count($data) != 0) {//preguntamos si esta inscrito a un curso
         
         $data = $data[0];

         if ($periodo->inscripcionFin != 1) {//preguntamos si las inscripciones ya finalizaron

            require_once '../app/views/Alumno/comprobante1.php';

         }else{
            
            if($data->cursoStatus == 'y'){//preguntamos si el curso en el que se inscribio si se abrio para el publico
               
               if($data->pago == 1){//preguntamos si el alumno pago el curso

                  require_once '../app/views/Alumno/comprobante4.php';

               }else{

                  require_once '../app/views/Alumno/comprobante3.php';

               }

            }else{

               require_once '../app/views/Alumno/comprobante2.php';

            }
         }

      } else {

         require_once '../app/views/Alumno/sincurso.php';
      }
   }
}
