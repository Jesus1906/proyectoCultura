<?php

namespace App\Controllers;

use App\Controllers\{RegistrarController, ConsultaController, ActualizarController};

class RouteAdminController
{
   public function inicioADM()
   {
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/clasi_adm.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function principalCursos($request){
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_cursos.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function principalEvaluaciones($request){
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_Eva.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function principalConsulta($request){
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_cons.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function principalAlumnos($request){
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_alumnos.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function principalProfesores($request){
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_prof.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function principalAdjuntos($request){
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_adj.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function principalLideres($request){
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_lider.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function principalAdministradores($request){
      if ($_SESSION['user'] == 'admi') {
         require_once '../app/views/Admi/inicio_adm_administrador.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function actualizarPerfil($request){
      if ($_SESSION['user'] == 'admi') {
         $admin = new ConsultaController;
         $admin = $admin->getAdministrador([
            'filtro' => 'matricula',
            'parametro' => $_SESSION['matricula']
         ]);
         if ($request->getMethod() == 'POST') {
            $data = $request->getParsedBody();
            if($data['firstName']){
               $actualiza = new ActualizarController();
               $actualiza->actualizarPerfilAdm($admin, $data);
            }else{
               $actualiza = new ActualizarController();
               $actualiza->actualizarPassword($admin, $data);
            }
         }
         require_once '../app/views/Admi/perfil_admin.php';
      } else {
         echo 'No eres administrador';
      }
   }

   public function AgregarAdj($request)
   {
      if ($_SESSION['user'] == 'admi') {
         if ($request->getMethod() == 'POST') {
            $adjunto = new RegistrarController();
            $postData = $request->getParsedBody();
            $adjunto->regAdjunto($postData);
         }
         require_once '../app/views/Admi/adj_agregar.html';
      } else {
         echo 'No eres administrador';
      }
   }

   public function AgregarADM($request)
   {
      if ($_SESSION['user'] == 'admi') {
         if ($request->getMethod() == 'POST') {
            $admin = new RegistrarController();
            $postData = $request->getParsedBody();
            $admin->regAdministrador($postData);
         }
         require_once '../app/views/Admi/admin_agregar.html';
      } else {
         echo 'No eres administrador';
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
         echo 'No eres administrador';
      }
   }

   public function AgregarLIDER($request)
   {
      if ($_SESSION['user'] == 'admi') {
         if ($request->getMethod() == 'POST') {
            $lider = new RegistrarController();
            $postData = $request->getParsedBody();
            $lider->regLider($postData);
         }
         require_once '../app/views/Admi/lider_agregar.html';
      } else {
         echo 'No eres administrador';
      }
   }

   public function AgregarPROF($request)
   {
      if ($_SESSION['user'] == 'admi') {
         if ($request->getMethod() == 'POST') {
            $profesor = new RegistrarController();
            $postData = $request->getParsedBody();
            $profesor->regProfesor($postData);
            require_once '../app/views/Admi/prof_agregar.html';
        } else {
            echo 'No eres administrador';
        }
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
            echo 'No eres administrador';
        }
    }

    public function confirmaCurso($request){
        if ($_SESSION['user'] == 'admi') {
            $curso = new ConsultaController();
            $cursos = $curso->CursosOrdenadosNivel();

            if ($request->getMethod() == 'POST') {
                $curso = new ActualizarController();
                $postData = $request->getParsedBody();
                $curso->actualizarCursoAyS($cursos, $postData);
            }
            require_once '../app/views/Admi/confirma_curso.php';
        } else {
            echo 'No eres administrador';
        }
    }

    public function registrarPeriodo($request){
        if ($_SESSION['user'] == 'admi') {
            $periodo = new ConsultaController();
            $periodo = $periodo->getPeriodo();
            if ($request->getMethod() == 'POST') {
                if($periodo){//validamos si existe un periodo existente
                    $actualizar = new ActualizarController();
                    $actualizar->actualizarPeriodo($periodo, $request->getParsedBody());
                }else{
                    $registro = new RegistrarController();
                    $registro->regPeriodo($request->getParsedBody());
                }
            }
            require_once '../app/views/Admi/periodo.php';
        } else {
            echo 'No eres administrador';
        }
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
            echo 'No eres administrador';
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
            echo 'No eres administrador';
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
            echo 'No eres administrador';
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
            echo 'No eres administrador';
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
            echo 'No eres administrador';
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
            echo 'No eres administrador';
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
              
               if(count($ofertaExistente) == 0){

                  $oferta = new RegistrarController();
                  $oferta->regOfertaNueva($request->getParsedBody(), $periodo);
               
               }else{
                  echo 'en este periodo ya se oferto el curso en el turno indicado';
               }
                
            }
            require_once '../app/views/Admi/cursos_ofertar.php';
        } else {
            echo 'No eres administrador';
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
            $val->validarNumero($post['nivel'],1,20);
            $val->validarTexto($post['descripcion'],4,null,false);
            $val->validarNumero($post['subnivel'],1,20);

            //validacion de errores en formulario
            $error = $val->validarErrores();

            if ($error != false) {
               //si hay errores en formulario muestra errores
               var_dump($error);
            } else {
                  //si no hay errores en formulario  actualiza cursos
                  $exito = $curso->actualizarCursos($curso,$post, $files);
                  if(isset($exito)){
                     //si existe exito(se llamo al controlador actualizar y este realizo su tarea)
                     var_dump($exito);
                  }
               }
         }//if request met
         require_once '../app/views/Admi/cursos_modificar.php';
      } else {
         echo 'No eres administrador';
      }
   }//modificarCurso


}
