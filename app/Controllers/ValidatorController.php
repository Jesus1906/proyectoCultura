<?php
namespace App\Controllers;

use Respect\Validation\Validator as v;

class ValidatorController{



   public function validarEdad($edad){
      //funcion para validad la edad minima para usar,en este caso es 18
      //requiere un string con la fecha de nacimiento en formato 'YYYY-MM-DD' o 'DD-MM-YYY'
      //validamos que no sea este vacio
      if(!v::stringType()->notEmpty()->validate($edad)){
         return false;
      }
      //validamos la edad minima
      if(v::MinAge(15)->validate($edad)){
         return true;
      }else{
         return false;
      }
      //retorna un bolean
   }//val edad|

   public function validarPassIgual($pass1, $pass2){
      //funcion que valida si el password es igual en 2 campos, requiere un string retorna un bolean

      //primero revisa que las entradas no esten vacias
      if(!v::stringType()->notEmpty()->validate($pass1) && !v::stringType()->notEmpty()->validate($pass2) ){
         return false;
      }

      //revisa que sean datos iguales y que sean tipos de datos iguales
      if(v::equals($pass1)->validate($pass2) && v::identical($pass1)->validate($pass2)){
         return true;
      }else{
         return false;
      }
   }//val pas

   public function validarTamaño($min, $max, $cadena){
      //funcion que valida el tamaño minimo y maximo que debe tener un string, requiere 2 enteros min y max y el campo de tipo string que se validara, retorna un boleano
      //si no se ocupa un min o max se ingresa como null
      if(v::stringType()->length($min,$max)->validate($cadena)){
         return true;
      }else{
         return false;
      }
   }//validar tamañon

   public function validarCorreo($correo){
      //validar que sea una direccion de correo valida
      if(!v::stringType()->notEmpty()->validate($correo)){
         return false;
      }

      if(v::email()->validate($correo)){
         return true;
      }else{
         return false;
      }
   }

   public function validarNulo($campo, $espacio){
      //funcion para validar si algun campo es nulo, para usar requiere un campo,(string "text") un dato, y si este en caso de ser texto puede contener o no espacios en blanco
      //retorna un bolean

   }

}//fin clase validador
