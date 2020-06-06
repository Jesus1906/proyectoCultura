<?php

namespace App\Controllers;

use App\Controllers\ConsultaController;
use App\Http\Controllers\Controller;
use App\Models\{Lider_celula, Profesor};

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
        if($post['secondName']){
            $alumno->secondName = $post['secondName'];
        }else{
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
        if(isset($post['secondName'])){
            $administrador->secondName = $post['secondName'];
        }else{
            $administrador->secondName = null;
        }
        $administrador->firstLastName = $post['firstLastName'];
        $administrador->secondLastName = $post['secondLastName'];
        $administrador->email = $post['email'];
        $administrador->phone = $post['phone'];
        $administrador->save();
    }

    public function actualizarPerfilAdj($adjunto, $post){
        $adjunto->firstName = $post['firstName'];
        if($post['secondName']){
            $adjunto->secondName = $post['secondName'];
        }else{
            $adjunto->secondName = null;
        }
        $adjunto->firstLastName = $post['firstLastName'];
        $adjunto->secondLastName = $post['secondLastName'];
        $adjunto->birthday = $post['birthday'];
        $adjunto->email = $post['email'];
        $adjunto->phone = $post['phone'];
        $adjunto->save();
    }

    public function actualizarPassword($user, $post){

        $user->password = password_hash($post['newPassword'], PASSWORD_DEFAULT);
        $user->save();

    }

    public function actualizarPeriodo($periodo, $post){
        $periodo->inscripcion = $post['inscripcion'];
        $periodo->inicio = $post['inicio'];
        $periodo->fin = $post['fin'];
        $periodo->save();
    }

    public function actualizarCursoAyS($cursos, $post){
        $indice = 0;
        foreach($cursos as $curso){
            $curso->subnivel = $post['subnivel'.$indice];
            $curso->save();
            $indice++;
        }
    }
}
