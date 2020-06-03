<?php

namespace App\Controllers;

use App\Controllers\{RegistrarController};
use App\Controllers\{ConsultaController};

class RouteAdjController
{
    public function inicioADJ()
    {
        if ($_SESSION['user'] == 'adjunto') {
            require_once '../app/views/Adjunto/principal_adjunto.php';
        } else {
            echo 'No eres administrador';
        }
    }

    public function actualizarPerfil($request){
        if ($_SESSION['user'] == 'adjunto') {
            $adjunto = new ConsultaController;
            $adjunto = $adjunto->getAdjunto([
                'filtro' => 'matricula',
                'parametro' => $_SESSION['matricula']
            ]);  
            if ($request->getMethod() == 'POST') {
                $actualiza = new ActualizarController();
                $actualiza->actualizarPerfilAdj($adjunto, $request->getParsedBody());
            }
            require_once '../app/views/adjunto/perfil_adju.html';
        } else {
            echo 'No eres adjunto';
        }
    }
}
