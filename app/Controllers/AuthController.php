<?php

namespace App\Controllers;

use App\Models\{Alumno, Administrador, Adjunto};
use Laminas\Diactoros\Response\RedirectResponse;

class AuthController extends BaseController
{

    public function __construct()
    {
        $this->iniciarControladorBase();
    }
    public function autenticacionUsuario($request)
    {
        $postData = $request->getParsedBody();
        $ruta = '/proyectocultura/';
        $user = str_split($postData['cuenta']); 
        // convertimos un string en un arreglo de char

        $identificacion = $user[4];
        //el ultimo digito del numero de cuenta es el identificador

        switch ($identificacion) {
            //depende del que ingrese sera el actor que buscara y se asignara su ruta principal
            case '1': {
                    $user = Alumno::find($postData['cuenta']);
                    $ruta .= 'alm';
                }
                break;
            case '2': {
                    $user = Adjunto::find($postData['cuenta']);
                    $ruta .= 'adj';
                }
                break;
            case '3': {
                    $user = Administrador::find($postData['cuenta']);
                    $ruta .= 'adm';
                }
                break;
        }

        if ($user) {
            // validamos si existe el usuario el cual ingresamos

            if (password_verify($postData['password'], $user->password)) {
                //varificamos que la contraseña ingresada coincida con la de la bd

                $this->sesion($identificacion, $user);
                // mandamos a llamar al metodo session mandandole el registro del usuario y el identificador

                header(sprintf('%s: %s', 'location', $ruta), false); 
                // cuando el usuario logra ingresar se agrega el redireccionamiento a los headers

            } else {
                echo "<script>
               alert('Datos incorrectos')
                </script>";
                header(sprintf('%s: %s', 'location', '/proyectocultura/'), false);
            }
        } else {
            echo "<script>
               alert('Datos incorrectos')
                </script>";
            header(sprintf('%s: %s', 'location', '/proyectocultura/'), false);
        }
    }

    public function logOut()
    {
        //creamos la funcion de cerrar sesion donde eliminamos todo lo que guardamos en session
        unset($_SESSION['matricula']);
        unset($_SESSION['nombre']);
        unset($_SESSION['user']);
        header(sprintf('%s: %s', 'location', '/proyectocultura/'), false);
    }

    public function sesion($identificacion, $user)
    {
        //metodo sesion

        switch ($identificacion) {
            //identificamos al usuario y guardamos en session su matricula nombre y que tipo de usuario es 
            case '1': {
                    $_SESSION['matricula'] = $user->matriculaAlumno;
                    $_SESSION['nombre'] = $user->firstName . " " . $user->secondName;
                    $_SESSION['user'] = 'alumno';
                }
                break;
            case '2': {
                    $_SESSION['matricula'] = $user->matriculaAdjunto;
                    $_SESSION['nombre'] = $user->firstName . " " . $user->secondName;
                    $_SESSION['user'] = 'adjunto';
                }
                break;
            case '3': {
                    $_SESSION['matricula'] = $user->matriculaAdministrador;
                    $_SESSION['nombre'] = $user->firstname . " " . $user->secondName;
                    $_SESSION['user'] = 'admi';
                }
                break;
        }
    }
}
