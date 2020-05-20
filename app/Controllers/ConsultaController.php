<?php
namespace App\Controllers;
use App\Models\{Lider_celula, Alumno};

class ConsultaController extends BaseController{

    public function __construct(){
        $this->iniciarControladorBase();
    }

    public function getAllLideres(){
        return Lider_celula::all();
    }

    public function getAllAlumno(){
        return Alumno::all();
    }


}