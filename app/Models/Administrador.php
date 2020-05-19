<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model; //uasamos el orm de eloquent

class Administrador extends Model{

    protected $table = 'administrador';
    protected $primaryKey = 'matriculaAdministrador';
    public $incrementing = false;
}