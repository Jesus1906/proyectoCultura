<?php

namespace App\Controllers;

use App\Controllers\ConsultaController;
use App\Http\Controllers\Controller;
use App\Models\{Lider_celula, Profesor, Curso};

class ActualizarController extends BaseController
{

    public function __construct()
    {
        $this->iniciarControladorBase();
    }

    public function updateLider($post)
    {
        $datosLider = [
            'filtro' => 'id',
            'parametro' => $post['id']
        ];
        $lider = new ConsultaController();
        $lider = $lider->getLider($datosLider); //usamos el controlador de consulta para obetener el lider que
        $lider->firstName = $post['firstName']; // queremos actualizar y sobreescribir sus datos
        $lider->secondName = $post['secondName'];
        $lider->firstLastName = $post['firstLastName'];
        $lider->secondLastName = $post['secondLastName'];
        $lider->phone = $post['phone'];
        $lider->save(); //guardamos los nuevos datos ;v
    }

    public function updateProfesor($post)
    {
        $datosProfesor = [
            'filtro' => 'Profesor_Matricula',
            'parametro' => $post['id']
        ];
        $profesor = new ConsultaController();
        $profesor = $profesor->getProfesor($datosProfesor); //usamos el controlador de consulta para obetener el prof que
        $profesor->firstName = $post['firstName']; // queremos actualizar y sobreescribir sus datos
        $profesor->secondName = $post['secondName'];
        $profesor->firstLastName = $post['firstLastName'];
        $profesor->secondLastName = $post['secondLastName'];
        $profesor->email = $post['email'];
        $profesor->phone = $post['phone'];
        $profesor->save(); //guardamos los nuevos datos ;v
    }

    public function actualizarPerfilAlm($alumno, $post)
    {
        $alumno->firstName = $post['firstName'];
        if ($post['secondName']) {
            $alumno->secondName = $post['secondName'];
        } else {
            $alumno->secondName = null;
        }
        $alumno->firstLastName = $post['firstLastName'];
        $alumno->secondLastName = $post['secondLastName'];
        $alumno->cellPhone = $post['phone'];
        $alumno->housePhone = null; //este
        $alumno->birthday = $post['birthday'];
        $alumno->maritalStatus = $post['statusCivil'];
        $alumno->serviseStatus = $post['statusService'];
        $alumno->statusBautizo = $post['statusBautizo'];
        $alumno->email = $post['email'];
        $alumno->photo = null;
        $alumno->activo = 'true';
        $alumno->pago = false;
        $alumno->pagoCongelado = false;
        $alumno->Lider_Celula_id = $post['lider'];
        $alumno->save();
    }

    public function actualizarPerfilAdm($administrador, $post)
    {
        $administrador->firstname = $post['firstName'];
        if (isset($post['secondName'])) {
            $administrador->secondName = $post['secondName'];
        } else {
            $administrador->secondName = null;
        }
        $administrador->firstLastName = $post['firstLastName'];
        $administrador->secondLastName = $post['secondLastName'];
        $administrador->email = $post['email'];
        $administrador->phone = $post['phone'];
        $administrador->save();
    }

    public function actualizarPerfilAdj($adjunto, $post)
    {
        $adjunto->firstName = $post['firstName'];
        if ($post['secondName']) {
            $adjunto->secondName = $post['secondName'];
        } else {
            $adjunto->secondName = null;
        }
        $adjunto->firstLastName = $post['firstLastName'];
        $adjunto->secondLastName = $post['secondLastName'];
        $adjunto->birthday = $post['birthday'];
        $adjunto->email = $post['email'];
        $adjunto->phone = $post['phone'];
        $adjunto->save();
    }

    public function actualizarPassword($user, $post)
    {
        $validator = new ValidatorController();

        if (password_verify($post['oldPassword'], $user->password)) {

            if($validator->validarTamaño(8, 16, $post['newPassword'])){

                if ($validator->validarPassIgual($post['confPassword'], $post['newPassword'])) {
                
                    $user->password = password_hash($post['newPassword'], PASSWORD_DEFAULT);
                    $user->save();
                    echo 'contraseña guardada con exito';
                }else{
                    echo 'las contraseñas no coinciden';
                }

            }else{
                echo 'la nueva contraseña debe tener 8 caracteres como minimo';
            }

        }else{
            echo 'la contraseña es incorrecta';
        }
    }

    public function actualizarPeriodo($periodo, $post)
    {
        $periodo->inscripcion = $post['inscripcion'];
        $periodo->inicio = $post['inicio'];
        $periodo->fin = $post['fin'];
        $periodo->periodo = $post['periodo'];
        $periodo->save();
    }

    public function actualizarCursoAyS($cursos, $post)
    {
        $indice = 0;
        foreach ($cursos as $curso) {
            $curso->subnivel = $post['subnivel' . $indice];
            $curso->save();
            $indice++;
        }
    }

    public function actualizarCursos($curso, $post, $files)
    {
        //requiere el objeto cursos , los datos del post(formulario) y los archivos del post(files)
        //instancian controladores
        $curso = new ConsultaController();
        $archivo = new RegistrarController();
        //se crea array de respuestas
        $exito = [];
        //se obtiene el curso a editar
        $id = $post['idCurso'];
        $curso = $curso->getCurso($id);

        //se obtienen los correspondientes archivs
        $temario = $files['temario'];
        $manual = $files['manual'];
        $examen = $files['examen'];
        $hoja = $files['answers'];
        $imgCurso = $files['photo'];

        //se obtienen los nombres de los archivos en caso de ser correcto el tipo o el mensaje de error en caso de no serlo
        $temarioNombre = $this->subidaArchivo($temario, $post['name']);
        $manualNombre = $this->subidaArchivo($manual, $post['name']);
        $examenNombre = $this->subidaArchivo($examen, $post['name']);
        $hojaNombre = $this->subidaArchivo($hoja, $post['name']);
        $imgCursoNombre = $this->subidaArchivo($imgCurso, $post['name']);

        //si se obtiene un archivo y este tiene un nombre valido se actualiza su correspondiente registro en db y el status de exito se guarda en el array de respuestas
        //en caso de que no exista un archivo y/o este tenga como nombre error solo se ingresa en el array de respuestas
        $exito[] = $this->ActualizarArchivo($temarioNombre, $curso, 'temario', $temario, 'temarios');
        $exito[] = $this->ActualizarArchivo($manualNombre, $curso, 'manual', $manual, 'manuales');
        $exito[] = $this->ActualizarArchivo($examenNombre, $curso, 'examen', $examen, 'examenes');
        $exito[] = $this->ActualizarArchivo($hojaNombre, $curso, 'answers', $hoja, 'hojas');
        $exito[] = $this->ActualizarArchivo($imgCursoNombre, $curso, 'photo', $imgCurso, 'img');

        //se cambian los datos del formulario
        $curso->name = $post['name'];
        $curso->nivel = $post['nivel'];
        $curso->descripcion = $post['descripcion'];
        $curso->subnivel = $post['subnivel'];

        $curso->temario = $this->actualizarNombre($post['name'], $curso->temario, 'temarios');
        $curso->manual = $this->actualizarNombre($post['name'], $curso->manual, 'manuales');
        $curso->examen = $this->actualizarNombre($post['name'], $curso->examen, 'examenes');
        $curso->answers = $this->actualizarNombre($post['name'], $curso->answers, 'hojas');
        $curso->photo = $this->actualizarNombre($post['name'], $curso->photo, 'img');

        foreach ($exito as $error) {
            if ($error === "Error al subir archivo") {
                return $exito;
            }
        }
        $curso->save();
        //se regresa el array de respuestas
        return $exito;
    } //actualizarcurso

    public function subidaArchivo($file, $name)
    {
        $archivo = new RegistrarController();
        if ($file->getError() == UPLOAD_ERR_OK) {
            $fileName = $archivo->generateName($file->getClientFilename(), $name);
            return $fileName;
        }
    } //subidaArchivo
    public function errorArchivo($fileNombre, $name)
    {
        if ($fileNombre == "erroneo") {
            $error = "Error al subir archivo";
            return $error;
        } else {
            //false significa que no hubo error
            return false;
        }
    } //error archivo

    public function ActualizarArchivo($archivoNombre, $curso, $tabla, $archivo, $carpeta)
    {
        //requiere el nombre del archivo, el objeto curso y que archivo es el que se va a subir
        if (isset($archivoNombre)) {
            $curso->$tabla = $archivoNombre;
            $error = $this->errorArchivo($archivoNombre, $archivo->getClientFilename());

            if ($error == false) {
                //si el archivo ya existe, remplazalo
                if (file_exists("Uploads/cursos/$carpeta/$archivoNombre")) {
                    $curso->save();
                    return "Archivo ya existente no se guardaran cambios en $archivoNombre";
                } else {
                    $archivo->moveTo("Uploads/cursos/$carpeta/$archivoNombre"); //mevemos el archivo a la carpeta que queremos
                    $curso->save();
                }
                return "exito al guardar";
            } else {
                return $error;
            }
        } else {
            return "no seteado";
        }
    } //actualizar Archivo

    public function actualizarNombre($postName, $archivo, $carpeta)
    {


        $exNombre = explode('-', $archivo);
        $extension = explode('.', $archivo);


        if (count($extension) == 1 || count($extension) < 2 || ($extension[1] != "pdf" && $extension[1] != "jpg" &&  $extension[1] != "png")) { //validaremos si el tipo de archivo es compatible
            return "erroneo"; //... con el sistema :V
        } else {
            $nNombre = $exNombre[0] . '-' . $postName . '.' . $extension[1];
            rename(RAIZ . "\Uploads\cursos\\$carpeta\\$archivo", RAIZ . "\Uploads\cursos\\$carpeta\\$nNombre");
            return $nNombre;
        }
    }
}
