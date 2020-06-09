<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Alumno_ofertaCursos extends Model{
    
    protected $table = 'alumno_ofertacursos';
    protected $primaryKey = ['Alumno_matriculaAlumno', 'Oferta_Cursos_idOferta_Cursos'];
    public $incrementing = false;
    
}