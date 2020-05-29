<?php

namespace App\Controllers;
use App\Controllers\{RegistrarController};

class RouteAdminController
{

    public function gAgregarAdj()
    {
        require_once '../app/views/Admi/adj_agregar.php';
    }

    public function pAgregarAdj()
    {
        $adjunto = new RegistrarController();
        $adjunto->regAdjunto($_POST);
        require_once '../app/views/Admi/adj_agregar.php';
    }

    public function AgregarADM()
    {
        require_once '../app/views/Admi/admin_agregar.php';
    }

    public function AgregarALU()
    {
        require_once '../principal/registro.php';
    }

    public function AgregarLIDER()
    {
        require_once '../app/views/Admi/lider_agregar.php';
    }

    public function AgregarPROF()
    {
        require_once '../app/views/Admi/prof_agregar.php';
    }

    public function consultaAdj()
    {
        require_once '../app/views/Admi/adj_consulta.php';
    }
}
