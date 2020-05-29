<?php

namespace App\Controllers;
use App\Controllers\{RegistrarController};

class RouteAdminController
{

    public function gAgregarAdj()
    {
        require_once '../app/views/Admi/adj_agregar.html';
    }

    public function pAgregarAdj($request)
    {
        $adjunto = new RegistrarController();
        $postData = $request->getParsedBody();
        $adjunto->regAdjunto($postData);
        
        require_once '../app/views/Admi/adj_agregar.html';
    }

    public function gAgregarADM()
    {
        require_once '../app/views/Admi/admin_agregar.html';
    }

    public function pAgregarADM($request)
    {
        $admin = new RegistrarController();
        $postData = $request->getParsedBody();
        $admin->regAdministrador($postData);
        require_once '../app/views/Admi/admin_agregar.html';
    }

    public function gAgregarALU()
    {
        require_once '../app/views/principal/registro.php';
    }

    public function pAgregarALU($request)
    {
        $alumno = new RegistrarController();
        $postData = $request->getParsedBody();
        $alumno->regAlumno($postData);
        require_once '../app/views/principal/registro.php';
    }
    
    public function gAgregarLIDER()
    {
        require_once '../app/views/Admi/lider_agregar.html';
    }

    public function pAgregarLIDER($request)
    {
        $lider = new RegistrarController();
        $postData = $request->getParsedBody();
        $lider->regLider($postData);
        require_once '../app/views/Admi/lider_agregar.html';
    }

    public function gAgregarPROF()
    {
        require_once '../app/views/Admi/prof_agregar.html';
    }

    public function pAgregarPROF($request)
    {
        $profesor = new RegistrarController();
        $postData = $request->getParsedBody();
        $profesor->regProfesor($postData);
        require_once '../app/views/Admi/prof_agregar.html';
    }

    public function consultaAdj()
    {
        require_once '../app/views/Admi/adj_consulta.php';
    }
}
