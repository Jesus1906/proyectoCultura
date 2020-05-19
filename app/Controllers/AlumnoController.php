<?php 
namespace App\Controllers;
use App\Models\Alumno;

class AlumnoController extends BaseController{

    public function __construct(){
        $this->iniciarControladorBase();
    }

    public function newAlumno($post){
        var_dump($post);
    }
}
