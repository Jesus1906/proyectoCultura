<?php

namespace App\Controllers;

use App\Controllers\{RegistrarController, ConsultaController, ActualizarController};
use App\Models\Periodo;

class RouteAdminController
{
   public function inicioADM()
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/clasi_adm.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function principalCursos($request)
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_cursos.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function principalEvaluaciones($request)
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_Eva.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function principalConsulta($request)
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_cons.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function principalAlumnos($request)
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_alumnos.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function principalProfesores($request)
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_prof.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function principalAdjuntos($request)
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_adj.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function principalLideres($request)
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_lider.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function principalAdministradores($request)
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_administrador.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function actualizarPerfil($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $admin = new ConsultaController;
         $admin = $admin->getAdministrador([
            'filtro' => 'matricula',
            'parametro' => $_SESSION['matricula']
         ]);
         if ($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();
            if ($data['firstName']) {
               $actualiza = new ActualizarController();
               $actualiza->actualizarPerfilAdm($admin, $data);
               echo "<script>
               alert('Datos Guardados con exito')
               </script>";
            } else {
               $actualiza = new ActualizarController();
               $actualiza->actualizarPassword($admin, $data);
               echo "<script>
               alert('Contraseña guardada con exito')
               </script>";
            }
         }
         require_once '../app/views/Admi/perfil_admin.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function AgregarAdj($request)
   {
      if ($_SESSION['user'] == 'admi') {
         if ($request->getMethod() == 'POST') {
            $adjunto = new RegistrarController();
            $postData = $request->getParsedBody();
            $adjunto->regAdjunto($postData);
            echo "<script>
               alert('Adjunto registrado con exito')
               </script>";
         }
         require_once '../app/views/Admi/adj_agregar.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function AgregarADM($request)
   {
      if ($_SESSION['user'] == 'admi') {
         if ($request->getMethod() == 'POST') {
            $admin = new RegistrarController();
            $postData = $request->getParsedBody();
            $admin->regAdministrador($postData);
            echo "<script>
               alert('Administrador registrado con exito')
               </script>";
         }
         require_once '../app/views/Admi/admin_agregar.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function AgregarALU($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $lideres = new ConsultaController();
         $lideres = $lideres->getAllLideres();
         $alumno = new RegistrarController();
         if ($request->getMethod() == 'POST') {
            $alumno = new RegistrarController();
            $postData = $request->getParsedBody();
            $alumno->regAlumno($postData);
         }
         require_once '../app/views/principal/registro.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function AgregarLIDER($request)
   {
      if ($_SESSION['user'] == 'admi') {
         if ($request->getMethod() == 'POST') {
            $lider = new RegistrarController();
            $postData = $request->getParsedBody();
            $lider->regLider($postData);
            echo "<script>
               alert('Lider registrado con exito')
               </script>";
         }
         require_once '../app/views/Admi/lider_agregar.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function AgregarPROF($request)
   {
      if ($_SESSION['user'] == 'admi') {

         if ($request->getMethod() == 'POST') {
            $profesor = new RegistrarController();
            $postData = $request->getParsedBody();
            $profesor->regProfesor($postData);
            echo "<script>
               alert('Profesor Agregado con exito :)')
            </script>";
         }
         require_once '../app/views/Admi/prof_agregar.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function AgregarCurso($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $curso = new ConsultaController();
         $cursos = $curso->getAllCursos();

         if ($request->getMethod() == 'POST') {
            $curso = new RegistrarController();
            $postData = $request->getParsedBody();
            $curso->regCurso($postData, $request);
         }
         require_once '../app/views/Admi/cursos_agregar.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function confirmaCurso($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $curso = new ConsultaController();
         $cursos = $curso->CursosOrdenadosNivel();

         if ($request->getMethod() == 'POST') {
            $curso = new ActualizarController();
            $postData = $request->getParsedBody();
            $curso->actualizarCursoAyS($cursos, $postData);
            echo "<script>
               alert('Cambios guardados con exito')
            </script>";
            require_once '../app/views/Admi/Clasi_adm.php';
         } else {
            require_once '../app/views/Admi/confirma_curso.php';
         }
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function registrarPeriodo($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $periodo = new ConsultaController();
         $periodo = $periodo->getPeriodo();
         $inscripcion = $periodo->inscripcionFin;
         if ($request->getMethod() == 'POST') {
            if ($periodo) { //validamos si existe un periodo existente
               $actualizar = new ActualizarController();
               $actualizar->actualizarPeriodo($periodo, $request->getParsedBody());
               echo "<script>
               alert('Se actualizo el periodo con exito')
               </script>";
            } else {
               $registro = new RegistrarController();
               $registro->regPeriodo($request->getParsedBody());
               echo "<script>
               alert('Se registro el periodo con exito')
               </script>";
            }
         }

         require_once '../app/views/Admi/periodo.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function cerrarInscripcion(){
      $consulta = new ConsultaController();
      $periodo = $consulta->getPeriodo();
      $periodo->inscripcionFin = 1;
      $periodo->save();

      $ofertasCurso = $consulta->getCursosPeriodo($periodo->periodo);

      foreach($ofertasCurso as $ofertaCurso){
         
         $cupoMinimo = $ofertaCurso->cupoMinimo;
         $alumnosPagados = $consulta->getDataPagosCompletados($ofertaCurso->idOferta_Cursos);
         
         if($cupoMinimo <= $alumnosPagados){//si cupo minimo es menor o igual a los alumnos pagados

            $ofertaCurso->StatusActivo = 'y';

         }else{

            $ofertaCurso->StatusActivo = 'n';

         }

         $ofertaCurso->save();
      }

      header('Location: '.RUTA_URL.'adm');
   }

   public function consultaADJ($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $adjuntos = new ConsultaController();
         $filtro = "none";
         if ($request->getMethod() == 'GET') {
            $adjuntos = $adjuntos->getAllAdjunto();
         } else {
            $data = $request->getParsedBody();
            $filtro = $data['filtro'];
            $adjuntos = $adjuntos->getAdjunto($data);
         }
         require_once '../app/views/Admi/adj_consulta.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function consultaADM($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $administradores = new ConsultaController();
         $filtro = "none";
         if ($request->getMethod() == 'GET') {
            $administradores = $administradores->getAllAdmin();
         } else {
            $data = $request->getParsedBody();
            $filtro = $data['filtro'];
            $administradores = $administradores->getAdministrador($data);
         }
         require_once '../app/views/Admi/admin_consulta.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function consultaALU($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $alumnos = new ConsultaController();
         $filtro = "none";
         if ($request->getMethod() == 'GET') {
            $alumnos = $alumnos->getAllAlumno();
         } else {
            $data = $request->getParsedBody();
            $filtro = $data['filtro'];
            $alumnos = $alumnos->getAlumno($data);
         }
         require_once '../app/views/Admi/alumnos_consulta.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function consultaLIDER($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $lideres = new ConsultaController();
         $filtro = "none";
         if ($request->getMethod() == 'GET') {
            $lideres = $lideres->getAllLideres();
         } else {
            $data = $request->getParsedBody();
            $filtro = $data['filtro'];
            $lideres = $lideres->getLider($data);
         }
         require_once '../app/views/Admi/lider_consulta.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function consultaPROF($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $profesores = new ConsultaController();
         $filtro = "none";
         if ($request->getMethod() == 'GET') {
            $profesores = $profesores->getAllProfesor();

            require_once '../app/views/Admi/prof_consulta.php';
         } else {
            require_once '../app/views/principal/error.php';
         }
      }
   }

   public function consultaCurso($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $cursos = new ConsultaController();
         $cursos = $cursos->CursosOrdenados();

         require_once '../app/views/Admi/cursos_consulta.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function ofertaCurso($request)
   {
      if ($_SESSION['user'] == 'admi') {
         $consulta = new ConsultaController();
         $profesores = $consulta->getAllProfesor();
         $adjuntos = $consulta->getAllAdjunto();
         $periodo = $consulta->getPeriodo();
         $cursos = $consulta->CursosOrdenados();
         if ($request->getMethod() == 'POST') {

            $ofertaExistente = $consulta->getOfertaExistente($request->getParsedBody(), $periodo);

            if (count($ofertaExistente) == 0) {

               $oferta = new RegistrarController();
               $oferta->regOfertaNueva($request->getParsedBody(), $periodo);
               echo "<script>
               alert('Se ha ofertado el curso con Exito')
               </script>";
            } else {
               echo "<script>
               alert('en este periodo ya se oferto el curso en el turno indicado')
               </script>";
            }
         }
         require_once '../app/views/Admi/cursos_ofertar.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }

   public function modificarCurso($request)
   {
      //revision de usuario
      if ($_SESSION['user'] == 'admi') {
         //si se envia por post
         if ($request->getMethod() == 'POST') {

            //obtenemos archivos y datos del formulario
            $post = $request->getParsedBody($request);
            $files = $request->getUploadedFiles();

            //instancian controladores validar y actualizar
            $val = new ValidatorController();
            $curso = new ActualizarController();

            //se validan los campos del formulario
            $val->validarTexto($post['name'], 4, 70, false);
            $val->validarNumero($post['nivel'], 1, 20);
            $val->validarTexto($post['descripcion'], 4, null, false);
            $val->validarNumero($post['subnivel'], 1, 20);

            //validacion de errores en formulario
            $error = $val->validarErrores();

            if ($error != false) {
               //si hay errores en formulario muestra errores
               var_dump($error);
            } else {
               //si no hay errores en formulario  actualiza cursos
               $exito = $curso->actualizarCursos($curso, $post, $files);
               if (isset($exito)) {
                  //si existe exito(se llamo al controlador actualizar y este realizo su tarea)
                  var_dump($exito);
               }
            }
         } //if request met
         require_once '../app/views/Admi/cursos_modificar.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   } //modificarCurso

   public function consultaPagos()
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Adjunto/pagos.php';
      } else {
         require_once '../app/views/principal/error.php';
      }
   }


}
