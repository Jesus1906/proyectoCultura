<?php

namespace App\Controllers;

use App\Models\{Lider_celula, Alumno, Adjunto, Administrador, Profesor, Curso};

class ConsultaController extends BaseController
{

    public function __construct()
    {
        $this->iniciarControladorBase();
    }

    public function CursosOrdenadosNivel(){
        $UltimoCurso = $this->getAllCursos();
        $numero = count($UltimoCurso);
        $UltimoCurso = Curso::find($UltimoCurso[$numero-1]->idCurso);
        return Curso::where('nivel', $UltimoCurso->nivel)
        //->orWhere('nivel', 2)
        //->orWhere('nivel', 3)
        //->orderBy('nivel', 'asc')
        ->get();
    }

    public function CursosOrdenados(){
        return Curso::where('nivel', 1)
        ->orWhere('nivel', 2)
        ->orWhere('nivel', 3)
        ->orderBy('nivel', 'asc')
        ->get();
    }

    public function getAllCursos()
    {
        return Curso::all();
    }

    public function getAllLideres()
    {
        return Lider_celula::all();
    }

    public function getAllProfesor()
    {
        return Profesor::all();
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

    public function getAdjunto($post)
    {
        switch ($post['filtro']) {
            case 'matricula': {
                    return Adjunto::find($post['parametro']);
                }
                break;

            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Adjunto::where('firstName', $names[0])
                        ->orWhere('secondName', $names[0])
                        ->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Adjunto::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {

                    return $this->getAllAdjunto();
                }
                break;
        }
    }

    public function getAlumno($post)
    {
        switch ($post['filtro']) {
            case 'matricula': {
                    return Alumno::find($post['parametro']);
                }
                break;

            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Alumno::where('firstName', $names[0])
                        ->orWhere('secondName', $names[0])->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Alumno::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {

                    return $this->getAllAlumno();
                }
                break;
        }
    }

    public function getLider($post)
    {
        switch ($post['filtro']) {
            case 'id': {
                    return Lider_celula::find($post['parametro']);
                }
                break;
            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Lider_celula::where('firstName', $names[0])
                        ->orWhere('secondName', $names[0])->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Lider_celula::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {

                    return $this->getAllLideres();
                }
                break;
        }
    }
    public function getProfesor($post)
    {
        switch ($post['filtro']) {
            case 'Profesor_Matricula': {
                    return Profesor::find($post['parametro']);
                }
                break;
            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Profesor::where('firstName', $names[0])
                        ->orWhere('secondName', $names[0])->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Profesor::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {

                    return $this->getAllProfesor();
                }
                break;
        }
    }

    public function getAdministrador($post)
    {
        switch ($post['filtro']) {
            case 'matricula': {
                    return Administrador::find($post['parametro']);
                }
                break;
            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Administrador::where('firstname', $names[0])
                        ->orWhere('secondName', $names[0])->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Administrador::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
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

    public function getCurso($id){
      return Curso::find($id);
   }

}
