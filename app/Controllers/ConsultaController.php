<?php

namespace App\Controllers;

use App\Models\{Lider_celula, Alumno, Adjunto, Administrador};

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

    public function getAllAdmin()
    {
        return Administrador::all();
    }

    public function getAdjunto($post){
        switch ($post['filtro']) {
            case 'matricula': {
                    return Adjunto::find($post['parametro']);
                }
                break;

            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Adjunto::where('firstName', $names[0])->get();
                }
                break;

            case 'apPaterno': {
                    $registro = Adjunto::where('firstLastName', $post['parametro'])->get();
                    return $registro;
                }
                break;
            case 'all': {
                    
                    return $this->getAllAdjunto();
                }
                break;
        }
    }

    public function getAlumno($post){
        switch ($post['filtro']) {
            case 'matricula': {
                    return Alumno::find($post['parametro']);
                }
                break;

            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Alumno::where('firstName', $names[0])->get();
                }
                break;

            case 'apPaterno': {
                    $registro = Alumno::where('firstLastName', $post['parametro'])->get();
                    return $registro;
                }
                break;
            case 'all': {
                    
                    return $this->getAllAlumno();
                }
                break;
        }
    }

    public function getLider($post){
        switch ($post['filtro']) {
            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Lider_celula::where('firstName', $names[0])->get();
                }
                break;

            case 'apPaterno': {
                    $registro = Lider_celula::where('firstLastName', $post['parametro'])->get();
                    return $registro;
                }
                break;
            case 'all': {
                    
                    return $this->getAllLideres();
                }
                break;
        }
    }
    
    public function getAdministrador($post){
        switch ($post['filtro']) {
            case 'matricula': {
                return Administrador::find($post['parametro']);
            }
            break;

        case 'name': {
                $names = explode(' ', $post['parametro']);
                return Administrador::where('firstName', $names[0])->get();
            }
            break;

        case 'apPaterno': {
                $registro = Administrador::where('firstLastName', $post['parametro'])->get();
                return $registro;
            }
            break;
        case 'all': {
                
                return $this->getAllAdmin();
            }
            break;
    }
    }

    public function getMatricula($usr)
    {
        //obtener el ultimo id registrado en la tabla en caso ser true retornar el id
        //si no existe id previo retornar false
        switch ($usr) {
            case 'Adm': {
                    $row = Administrador::count();
                    if ($row != 0) {
                        $matricula = 1000 + $row . "3";
                        return (int) $matricula;
                    } else {
                        return false;
                    }
                }
                break;

            case 'Adj': {
                    $row = Adjunto::count();
                    if ($row != 0) {
                        $matricula = 1000 + $row . "2";
                        return (int) $matricula;
                    } else {
                        return false;
                    }
                }
                break;

            case 'Alu': {
                    $row = Alumno::count();
                    if ($row != 0) {
                        $matricula = 1000 + $row . "1";
                        return (int) $matricula;
                    } else {
                        return false;
                    }
                }
                break;
        } //switch
    } //fin getmatricula

}
