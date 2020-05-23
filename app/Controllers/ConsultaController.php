<?php

namespace App\Controllers;

use App\Models\{Lider_celula, Alumno, Adjunto};

class ConsultaController extends BaseController
{

    public function __construct()
    {
        $this->iniciarControladorBase();
    }

    public function getAllLideres()
    {
        return Lider_celula::all();
    }

    public function getAllAlumno()
    {
        return Alumno::all();
    }

    public function getAllAdjunto()
    {
        return Adjunto::all();
    }

    public function getAdjunto($post)
    {
        switch ($post['filtro']) {
            case 'matricula': {
                    return Adjunto::find($post['parametro'])->first();
                }
                break;

            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Adjunto::where('firstName',$names[0]);
                }
                break;

            case 'apPaterno': {
                return Adjunto::where('firstLastName',$post['parametro']);
                }
                break;
        }
    }
}
