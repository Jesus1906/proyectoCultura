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
}
