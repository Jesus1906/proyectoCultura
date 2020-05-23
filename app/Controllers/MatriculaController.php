<?php

namespace App\Controllers;
use App\Models\{Alumno, Adjunto, Administrador};


class MatriculaController extends BaseController{

   public function __construct($usr){
      $this->usr = $usr;
   }

   public function AsignarMatricula(){
      //crear matricula de 5 digitos XXXXX
      //ultimo digito para asignar matricula 1.- Alumno 2.-Adjunto 3.-Administrador
       switch($this->usr){
          case "Alum":{
             if(/*verificar ultima matricula*/ true){

             }
          }
          break;
          case "Adju":{

          }
          break;
          case"Admi":{

          }
          break;
       }//fin switch

   }//fin asignar Matriculas

   }
