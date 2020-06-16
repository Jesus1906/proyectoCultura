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

   public function regLider($post)
   {
      //registramos lider

      $lider = new Lider_celula();
      //creamos un nuevo lider

      $val = new ValidatorController();
      //instancia de la clase validadora

      $val->validarTexto($post['firstName'], 4, 15, false);
      $lider->firstName = $post['firstName'];
      //validamos si el texto ingresado en el primer nombre cumpla con un rango de tamaño y lo asignamos

      $val->validarTexto($post['secondName'], 4, 22, true);
      $lider->secondName = $post['secondName'];


      $val->validarTexto($post['firstLastName'], 4, 15, false);
      $lider->firstLastName = $post['firstLastName'];

      $val->validarTexto($post['secondLastName'], 4, 15, false);
      $lider->secondLastName = $post['secondLastName'];

      $val->validarTelefono($post['phone'], false);
      $lider->phone = $post['phone'];

      //validacion de errores si algo salio mal por defecto se habra guardado un false
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
      //creamos una instancia del controlador de la matricula

      $alumno = new Alumno();
      //un nuevo modelo de alumno

      $val = new ValidatorController();
      //la clase validadora

      $matri = $matricula->asignarMatricula('alu');
      $alumno->matriculaAlumno = $matri;
      // asignamos la matrucula a una variable que usaremos mas abajo y tambien se la pasamos al alumno

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

      $val->validarEdad($post['birthday'], 15);
      $alumno->birthday = $post['birthday'];
      //validamos que tenga minimo 15 años de edad 

      $alumno->maritalStatus = $post['statusCivil'];
      $alumno->serviseStatus = $post['statusService'];
      $alumno->statusBautizo = $post['statusBautizo'];

      $val->validarCorreo($post['email']);
      $alumno->email = $post['email'];

      $val->validarPassIgual($post['password'], $post['password1']);
      $alumno->password = password_hash($post['password'], PASSWORD_DEFAULT);
      //validamos que las contraseñas que digito sean iguales y una vez que sea asi la hashearemos y la guardamos en la bd

      $alumno->photo = null;
      $alumno->activo = 'true';
      $alumno->pago = false;
      $alumno->pagoCongelado = false;
      $alumno->Lider_Celula_id = $post['lider'];

      //validacion de errores
      $error = $val->validarErrores();

      if ($error != false) {
         return [
            'error' => true,
            'value' => $error
         ];
      } else {
         //si no dio error guardamos en un array que la operacion no tuvo errores 
         //y mandamos la matricula para ser impresa en pantalla
         $alumno->save();
         return [
            'error' => false,
            'value' => $matri
         ];
      }
   }

   public function regAdministrador($post)
   {
      $matricula = new MatriculaController();
      $administrador = new Administrador();
      $val = new ValidatorController();

      $matri = $matricula->asignarMatricula('adm');

      $administrador->matriculaAdministrador = $matri;

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
         return [
            'error' => true,
            'value' => $error
         ];
      } else {
         $administrador->save();
         return [
            'error' => false,
            'value' => $matri
         ];
      }
   }

   public function regAdjunto($post)
   {
      $matricula = new MatriculaController();
      $adjunto = new Adjunto();
      $val = new ValidatorController();

      $matri = $matricula->asignarMatricula('adj');
      $adjunto->matriculaAdjunto = $matri;

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
         return [
            'error' => true,
            'value' => $error
         ];
      } else {
         $adjunto->save();
         return [
            'error' => false,
            'value' => $matri
         ];
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
