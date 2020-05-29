<?php

namespace App\Controllers;

use App\Controllers\{RegistrarController};
use App\Controllers\{ConsultaController};

class RouteAdminController
{

    public function AgregarAdj($request)
    {
        if ($request->getMethod() == 'POST') {
            $adjunto = new RegistrarController();
            $postData = $request->getParsedBody();
            $adjunto->regAdjunto($postData);
        }
        require_once '../app/views/Admi/adj_agregar.html';
    }

    public function AgregarADM($request)
    {
        if ($request->getMethod() == 'POST') {
            $admin = new RegistrarController();
            $postData = $request->getParsedBody();
            $admin->regAdministrador($postData);
        }
        require_once '../app/views/Admi/admin_agregar.html';
    }

    public function AgregarALU($request)
    {
        if ($request->getMethod() == 'POST') {
            $alumno = new RegistrarController();
            $postData = $request->getParsedBody();
            $alumno->regAlumno($postData);
        }
        require_once '../app/views/principal/registro.php';
    }

    public function AgregarLIDER($request)
    {
        if ($request->getMethod() == 'POST') {
            $lider = new RegistrarController();
            $postData = $request->getParsedBody();
            $lider->regLider($postData);
        }
        require_once '../app/views/Admi/lider_agregar.html';
    }

    public function AgregarPROF($request)
    {
        if ($request->getMethod() == 'POST') {
            $profesor = new RegistrarController();
            $postData = $request->getParsedBody();
            $profesor->regProfesor($postData);
            require_once '../app/views/Admi/prof_agregar.html';
        }
        require_once '../app/views/Admi/prof_agregar.html';
    }

    public function consultaADJ($request)
    {
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
    }

    public function consultaADM($request)
    {
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
    }

    public function consultaALU($request)
    {
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
    }

    public function consultaLIDER($request)
    {
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
    }

    public function consultaPROF($request)
    {
        $profesores = new ConsultaController();
        $filtro = "none";
        if ($request->getMethod() == 'GET') {
            $profesores = $profesores->getAllProfesor();
        } else {
            $data = $request->getParsedBody();
            $filtro = $data['filtro'];
            $profesores = $profesores->getProfesor($data);
        }
        require_once '../app/views/Admi/prof_consulta.php';
    }
}
