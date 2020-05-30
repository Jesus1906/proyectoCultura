<?php
namespace App\Controllers;

use Respect\Validation\Validator as v;

class ValidatorController{

   private $error = [];

   public function validarEdad($edad, $min){
      //funcion para validad la edad minima para usar,en este caso es 18
      //requiere un string con la fecha de nacimiento en formato 'YYYY-MM-DD' o 'DD-MM-YYY'
      //validamos que no sea este vacio
      if(!v::stringType()->validate($edad)){
         //si lo que esta entrando no es una cadena regresa false
         $this->error[]="Tipo de dato invalido en Edad";
         return false;
      }

      if(!v::stringType()->notEmpty()->validate($edad)){
         $this->error[]="Edad no puede estar vacia";
         return false;
      }

      if($min == null){
         //revisa el año actual y lo compara con el año ingresado
         $FechaActual = date();
         if($edad > $FechaActual){
            $this->error[] = "Fecha incorrecta, mayor a fecha actual";
            return false;
         }
      }else{
         //validamos la edad minima
         if(v::MinAge($min)->validate($edad)){
            return true;
         }else{
            $this->error[]="Edad menor al limite (15)";
            return false;
         }
         //retorna un bolean
      }
   }//val edad|

   public function validarPassIgual($pass1, $pass2){
      //funcion que valida si el password es igual en 2 campos, requiere un string retorna un bolean
      if(!v::stringType()->validate($pass1)&&!v::stringType()->validate($pass2)){
         //si lo que esta entrando no es una cadena regresa false
         $this->error[]="Tipo de dato invalido en Contraseña";
         return false;
      }

      //primero revisa que las entradas no esten vacias
      if(!v::stringType()->notEmpty()->validate($pass1) && !v::stringType()->notEmpty()->validate($pass2) ){
         $this->error[]="Contraseña(s) no puede estar vacia";
         return false;
      }

      //revisa que sean datos iguales y que sean tipos de datos iguales
      if(v::equals($pass1)->validate($pass2) && v::identical($pass1)->validate($pass2)){
         return true;
      }else{
         $this->error[]="Contraseñas diferentes";
         return false;
      }
   }//val pas

   public function validarTamaño($min, $max, $cadena){
      //funcion que valida el tamaño minimo y maximo que debe tener un string, requiere 2 enteros min y max y el campo de tipo string que se validara, retorna un boleano

      //validar si esta un string vacio
      if(!v::stringType()->notEmpty()->validate($cadena)){
         $this->error[]="Dato vacio";
         return false;
      }

      //si no se ocupa un min o max se ingresa como null
      if(v::stringType()->length($min,$max)->validate($cadena)){
         return true;
      }else{
         $this->error[]="Tamaño invalido";
         return false;
      }
   }//validar tamañon

   public function validarCorreo($correo){
      //validar que sea una direccion de correo valida

      if(!v::stringType()->validate($correo)){
         //si lo que esta entrando no es una cadena regresa false
         $this->error[]="Tipo de dato invalido en Correo";
         return false;
      }
      //checar que no este vacio el correo enviado
      if(!v::stringType()->notEmpty()->validate($correo)){
         $this->error[]="Correo no puede estar Vacio";
         return false;
      }
      //valida que sea un correo valido pero no se como :v
      //por lo visto busca que tenga un dominio conocido (.com, .net, .gob, etc)
      if(v::email()->validate($correo)){
         return true;
      }else{
         $this->error[]="Correo invalido";
         return false;
      }
   }//validar correo

   public function validarTelefono($num, $nulo){
      //funcion para validar un telefono valido, recibe $num(string 10 caracteres), este debe tener 10 dig ser tipo string y puede o no estar vacio $nulo(boleano) define si se puede o no acptar vacio

      if(!v::stringType()->validate($num)){
         //si lo que esta entrando no es una cadena regresa false
         $this->error[]="Tipo de dato invalido en Telefono";
         return false;
      }

      if(!v::stringType()->notEmpty()->validate($num) && $nulo == true){
         //se acepta nulo y esta nulo
         //valor vacio y nulo = true regresa true
         return true;

      }else if(!v::stringType()->notEmpty()->validate($num) && $nulo == false){
         //SI se acepta nulo y el valor esta nulo
         //valor vacio y nulo = false regresa false
         $this->error[]="Telefono no puede estar vacio";
         return false;

      }else{
         //no importa si requiere o no nulo mientras se envie string lo valida
         if(v::Phone()->validate($num)){
            //valor lleno, nulo no importa y el numero es valido regresa true
            return true;
         }else{
            //valor lleno, nulo no importa y el numero NO es valido regresa false
            $this->error[]="Numero de telefono invalido";
            return false;
         }
      }
   }//validar telefono

   public function validarTexto($cadena, $min, $max, $nulo){
      //funcion que valida un cuadro de texto, primero revisa que sea una cadena lo que se envia, despues que esta este vacia o no dependiendo el ultimo parametro y al final los tamaños asignados, (en caso de no haber un tamaño max o min asignarlos como null) retorna un boleano

      if(!v::stringType()->validate($cadena)){
         //si lo que esta entrando no es una cadena regresa false
         $this->error[]="Tipo de dato invalido en Texto";
         return false;
      }

      if(!v::stringType()->notEmpty()->validate($cadena) && $nulo == true){
         //se acepta nulo y esta nulo
         //valor vacio y nulo = true regresa un true
         return true;
      }else if(!v::stringType()->notEmpty()->validate($cadena) && $nulo == false){
         //valor vacio y nulo == false retorna false
         $this->error[]="Campo no puede estar vacio";
         return false;
      }else{
         //no importa si requiere o no nulo mientras se envie string lo valida
         if(!v::stringType()->length($min,$max)->validate($cadena)){
            //checa el tamaño y si no corresponde al valor entre el max y el min retorna falso, en caso de no especificar un max o min estos deben ingresarse como null
            $this->error[]="Tamaño invalido texto";
            return false;
         }
      }
      return true;
   }//validar texto

   public function validarErrores(){
      //funcion para validar el array de errores, si es mayor a 0 es que algo salio mal se retorno un array con todos los mensajes de error
      if(count($this->error)>0){
         return $this->error;
      }else {
         return false;
      }
   }//validar errores

   public function validarNumero($num){
      //valida un numero y que este entre ciertos valores
      if(!v::IntVal()->validate($num)){
         $this->error[]= "Tipo de dato Invalido en Numero";
         return false;
      }

      if(V::Between(1,2)->validate($num)){
         return true;
      }else{
         $this->error[]="Numero fuera de rango";
      }
   }//fin validar numero

}//fin clase validador
