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

    public function updateAlumno($post)
    {
        $birthday = $post['year'] . '-' . $post['month'] . '-' . $post['day'];
        $alumno = new ConsultaController;
        $datosAlumno = [
            'filtro' => 'matricula',
            'parametro' => $post['matricula']
        ];
        $alumno = $alumno->getAlumno($datosAlumno);
        $alumno->firstName = $post['firstName'];
        $alumno->secondName = $post['secondName'];
        $alumno->firstLastName = $post['firstLastName'];
        $alumno->secondLastName = $post['secondLastName'];
        $alumno->cellPhone = $post['phone'];
        $alumno->housePhone = null; //este
        $alumno->birthday = $birthday;
        $alumno->maritalStatus = $post['statusCivil'];
        $alumno->serviseStatus = $post['statusService'];
        $alumno->statusBautizo = $post['statusBautizo'];
        $alumno->email = $post['email'];
        $alumno->password = password_hash($post['password'], PASSWORD_DEFAULT);
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
        $administrador->secondName = $post['secondName'];
        $administrador->firstLastName = $post['firstLastName'];
        $administrador->secondLastName = $post['secondLastName'];
        $administrador->email = $post['email'];
        $administrador->phone = $post['phone'];
        $administrador->save();
    }

    public function actualizarPerfilAdj($adjunto, $post){
        $adjunto->firstName = $post['firstName'];
        $adjunto->secondName = $post['secondName'];
        $adjunto->firstLastName = $post['firstLastName'];
        $adjunto->secondLastName = $post['secondLastName'];
        $adjunto->birthday = $post['birthday'];
        $adjunto->email = $post['email'];
        $adjunto->phone = $post['phone'];
        $adjunto->save();
    }

}
