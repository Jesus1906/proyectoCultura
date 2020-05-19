<?php

namespace App\Controllers;
use App\Models\Lider_celula;


class LiderController extends BaseController{
    public function __construct()
    {
        $this->iniciarControladorBase();
    }

    public function getLideres(){
        return Lider_celula::all();
    }
}
