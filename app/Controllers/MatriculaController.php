<?php

namespace App\Controllers;
use App\Controllers\ConsultaController;


class MatriculaController extends BaseController{

   public function __construct(){
      $this->iniciarControladorBase();
   }

   public function asignarMatricula($usr){
      $consulta = new ConsultaController;
      //crear matricula de 5 digitos XXXXX
      //ultimo digito para asignar matricula 1.- Alumno 2.-Adjunto 3.-Administrador
      switch($usr){
         case "Alu":{
            $matricula = $consulta->getMatricula('Alu');
            if($matricula !=false){
               $matricula+=10;
            }else{
               //en caso de que no exista matricula crear una nueva
               $matricula = 10011;
               return $matricula;
            }
         }
         break;
         case "Adj":{
            $matricula = $consulta->getMatricula('Adj');
            if($matricula !=false){
               $matricula+=10;
            }else{
               //en caso de que no exista matricula crear una nueva
               $matricula = 10012;
               return $matricula;
            }
         }
         break;
         case"Adm":{
            $matricula = $consulta->getMatricula('Adm');
            if($matricula !=false){
               $matricula+=10;
            }else{
               //en caso de que no exista matricula crear una nueva
               $matricula = 10013;
               return $matricula;
            }
         }
         break;
      }//fin switch

   }//fin asignar Matriculas

}
