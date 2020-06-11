<?php

namespace App\Controllers;

use App\Models\{Alumno, Lider_celula, Profesor, Adjunto, Administrador, Curso, Periodo, Oferta_cursos, Alumno_ofertaCursos};
use App\Controllers\ValidatorController;

class RegistrarController extends BaseController
{

   public function __construct()
   {
      $this->iniciarControladorBase();
   }

   public function regUsuario($queReg, $quienReg)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         switch ($quienReg) {
            case '3': {
                  echo "Admin reg";
               }
               break;
            case '2': {
                  echo "Adjun reg";
               }
               break;
            case '1': {
                  echo "Alumn reg";
               }
               break;
         } // fin de switch
      } else {
         die('Error al realizar Registro');
      }
   }

   public function regLider($post)
   {
      $lider = new Lider_celula();
      $val = new ValidatorController();

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
         return $error;
      } else {
         $lider->save();
         return 'Exito al guardar';
      }
   }

   public function regAlumno($post)
   {
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

      $alumno->housePhone = null; //este

      $val->validarEdad($post['birthday'], 15);
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

      if ($error != false) {
         return $error;
      } else {
         $alumno->save();
         echo "<script>
               alert('Te registraste con exito, tu numero de cuenta es: ' . $alumno->matriculaAlumno')
               </script>";
      }
   }

   public function regAdministrador($post)
   {
      $matricula = new MatriculaController();
      $administrador = new Administrador();
      $val = new ValidatorController();

      $administrador->matriculaAdministrador = $matricula->asignarMatricula('adm');

      $val->validarTexto($post['firstName'], 4, 15, false);
      $administrador->firstName = $post['firstName'];

      $val->validarTexto($post['secondName'], 4, 22, true);
      $administrador->secondName = $post['secondName'];

      $val->validarTexto($post['firstLastName'], 4, 15, false);
      $administrador->firstLastName = $post['firstLastName'];

      $val->validarTexto($post['secondLastName'], 4, 15, false);
      $administrador->secondLastName = $post['secondLastName'];

      $val->validarCorreo($post['email']);
      $administrador->email = $post['email'];

      $val->validarPassIgual($post['password'], $post['password1']);
      $administrador->password = password_hash($post['password'], PASSWORD_DEFAULT);

      $val->validarTelefono($post['phone'], false);
      $administrador->phone = $post['phone'];

      //validacion de errores
      $error = $val->validarErrores();

      if ($error != false) {
         return $error;
      } else {
         $administrador->save();
         return 'Exito al guardar Tu numero de cuenta es: ' . $administrador->matriculaAdministrador;
      }
   }

   public function regAdjunto($post)
   {
      $matricula = new MatriculaController();
      $adjunto = new Adjunto();
      $val = new ValidatorController();

      $adjunto->matriculaAdjunto = $matricula->asignarMatricula('adj');

      $val->validarTexto($post['firstName'], 4, 15, false);
      $adjunto->firstName = $post['firstName'];

      $val->validarTexto($post['secondName'], 4, 22, true);
      $adjunto->secondName = $post['secondName'];

      $val->validarTexto($post['firstLastName'], 4, 15, false);
      $adjunto->firstLastName = $post['firstLastName'];

      $val->validarTexto($post['secondLastName'], 4, 15, false);
      $adjunto->secondLastName = $post['secondLastName'];

      $val->validarEdad($post['birthday'], null);
      $adjunto->birthday = $post['birthday'];

      $val->validarCorreo($post['email']);
      $adjunto->email = $post['email'];

      $val->validarPassIgual($post['password'], $post['password1']);
      $adjunto->password = password_hash($post['password'], PASSWORD_DEFAULT);

      $val->validarTelefono($post['phone'], false);
      $adjunto->phone = $post['phone'];

      //validacion de errores
      $error = $val->validarErrores();

      if ($error != false) {
         return $error;
      } else {
         $adjunto->save();
         return 'Exito al guardar Tu numero de cuenta es: ' . $adjunto->matriculaAdjunto;
      }
   }

   public function regProfesor($post)
   {
      $profesor = new Profesor();
      $val = new ValidatorController();

      $val->validarTexto($post['firstName'], 4, 15, false);
      $profesor->firstName = $post['firstName'];

      $val->validarTexto($post['secondName'], 4, 22, true);
      $profesor->secondName = $post['secondName'];

      $val->validarTexto($post['firstLastName'], 4, 15, false);
      $profesor->firstLastName = $post['firstLastName'];

      $val->validarTexto($post['secondLastName'], 4, 15, false);
      $profesor->secondLastName = $post['secondLastName'];

      $val->validarCorreo($post['email']);
      $profesor->email = $post['email'];

      $val->validarTelefono($post['phone'], false);
      $profesor->phone = $post['phone'];

      //validacion de errores
      $error = $val->validarErrores();

      if ($error != false) {
         return $error;
      } else {
         $profesor->save();
         return 'Exito al guardar';
      }
   }

   public function regPeriodo($post){
      $periodo = new Periodo();
      $periodo->inscripcion = $post['inscripcion'];
      $periodo->inicio = $post['inicio'];
      $periodo->fin = $post['fin'];
      $periodo->periodo = $post['periodo'];
      var_dump($periodo);
      $periodo->save();
   }

   public function regCurso($post, $request)
   {
      $curso = new Curso();
      $val = new ValidatorController();

      $val->validarTexto($post['name'], 4, 50, false);
      $curso->name = $post['name'];

      $val->validarNumero($post['nivel'],1,20);
      $curso->nivel = $post['nivel'];

      $val->validarNumero($post['subnivel'],1,20);
      $curso->subnivel = $post['subnivel'];

      $val->validarTexto($post['descripcion'], 1, null, false);
      $curso->descripcion = $post['descripcion'];

      $files = $request->getUploadedFiles(); //obtenemos todos los archivos que se estan subiendo
      $temario = $files['temario']; // obtenemos el temario de los archivos subidos
      $manual = $files['manual'];
      $examen = $files['examen'];
      $hoja = $files['hojaRespuestas'];
      $imgCurso = $files['imgCurso'];
      if (
         $temario->getError() == UPLOAD_ERR_OK && $manual->getError() == UPLOAD_ERR_OK
         && $examen->getError() == UPLOAD_ERR_OK && $hoja->getError() == UPLOAD_ERR_OK
         && $imgCurso->getError() == UPLOAD_ERR_OK
      ) {
         // preguntamos si hay algun error en la subida del alguno de los archivos
         $fileNameT = $this->generateName($temario->getClientFilename(), $post['name']); //obtenemos el nombre del archivo
         $curso->temario = $fileNameT;

         $fileNameM = $this->generateName($manual->getClientFilename(), $post['name']); //obtenemos el nombre del archivo
         $curso->manual = $fileNameM;

         $fileNameE = $this->generateName($examen->getClientFilename(), $post['name']); //obtenemos el nombre del archivo
         $curso->examen = $fileNameE;

         $fileNameH = $this->generateName($hoja->getClientFilename(), $post['name']); //obtenemos el nombre del archivo
         $curso->answers = $fileNameH;

         $fileNameI = $this->generateName($imgCurso->getClientFilename(), $post['name']); //obtenemos el nombre del archivo
         $curso->photo = $fileNameI;

         //validacion de errores
         $error = $val->validarErrores();

         if($fileNameT == "erroneo" || $fileNameM == "erroneo" || $fileNameE == "erroneo"
         || $fileNameH == "erroneo" || $fileNameI == "erroneo"){ // si alguno de los nombres trae algun error
            $error = "algun archivo no es del formato compatible";//cambiar el valor de error por el mensaje
         }

         if ($error != false) {
            var_dump($error);
         } else {

            $temario->moveTo("Uploads/cursos/temarios/$fileNameT"); //mevemos el archivo a la carpeta que queremos
            $manual->moveTo("Uploads/cursos/manuales/$fileNameM"); //mevemos el archivo a la carpeta que queremos
            $examen->moveTo("Uploads/cursos/examenes/$fileNameE"); //mevemos el archivo a la carpeta que queremos
            $hoja->moveTo("Uploads/cursos/hojas/$fileNameH"); //mevemos el archivo a la carpeta que queremos
            $imgCurso->moveTo("Uploads/cursos/img/$fileNameI"); //mevemos el archivo a la carpeta que queremos
            $curso->save();
            header(sprintf('%s: %s', 'location', '/proyectocultura/adm/registro/confirma_curso'), false);

         }
      }else{
         echo "error archivos";
      }
   }


   public function generateName($name, $curso){ //agregaremos el nombre del curso al archivo
      $names = explode('.', $name);
      if(count($names)== 1 || count($names) < 2 || ($names[1] != "pdf" && $names[1] != "jpg" &&  $names[1] != "png")){ //validaremos si el tipo de archivo es compatible
         return "erroneo"; //... con el sistema :V
      }else{
         return $names[0] . "-$curso." . $names[1];
      }
   }

   public function siguienteOAnterior($cursoSigOAnt){
      if($cursoSigOAnt == "noHayCurso" || $cursoSigOAnt == "noCurso"){
         return null;
      }else{
         return $cursoSigOAnt;
      }
   }

   public function regOfertaNueva($post, $periodo){
      $oferta = new Oferta_cursos();
      $oferta->periodo = $periodo['periodo'];
      $oferta->fechaInicio = $periodo['inicio'];
      $oferta->fechaTermino = $periodo['fin'];
      $oferta->inicio_fecha_inscripcion = $periodo['inscripcion'];
      $oferta->StatusActivo = 'n';//definimos el estatus en no, porque cuadno este en si es porque el curso cumplio con todos los requisitos para ser impartido
      $oferta->turno = $post['turno'];
      $oferta->Adjunto_matriculaAdjunto = $post['adjunto'];
      $oferta->Profesor_Profesor_Matricula1 = $post['profesor']; //nose que paso con los nombres de los campos aqui O.o estan horribles XD
      $oferta->Curso_idCurso = $post['idCurso'];
      $oferta->cupoMinimo = $post['cupoMinimo'];
      $oferta->save();
   }

   public function regInscripcion($post){
      $registro = new Alumno_ofertaCursos();
      $registro->Alumno_matriculaAlumno = $post['idAlumno'];
      if($post['turno'] == 'M'){
         $registro->Oferta_Cursos_idOferta_Cursos = $post['idOfertaM'];
      }else{
         $registro->Oferta_Cursos_idOferta_Cursos = $post['idOfertaV'];
      }
      $registro->save();
      
   }
}
