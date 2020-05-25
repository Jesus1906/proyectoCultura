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

    public function getMatricula($usr){
      //obtener el ultimo id registrado en la tabla en caso ser true retornar el id
      //si no existe id previo retornar false
      switch($usr){
         case 'Adm' : {
            $row = Administrador::count();
         if($row!=0){
               $matricula = 1000 + $row . "3";
               return (int)$matricula;
            }else{
               return false;
            }
         }
         break;

         case 'Adj' : {
            $row = Adjunto::count();
         if($row!=0){
               $matricula = 1000 + $row . "2";
               return (int)$matricula;
            }else{
               return false;
            }
         }
         break;

         case 'Alu' : {
            $row = Alumno::count();
         if($row!=0){
               $matricula = 1000 + $row . "1";
               return (int)$matricula;
            }else{
               return false;
            }
         }
         break;
      }//switch
   }//fin getmatricula

}
