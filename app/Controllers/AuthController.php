<?php

namespace App\Controllers;

use App\Models\{Alumno, Administrador, Adjunto};
use Laminas\Diactoros\Response\RedirectResponse;

class AuthController extends BaseController{

    public function __construct()
    {
        $this->iniciarControladorBase();
    }
    public function autenticacionUsuario($request)
    {
        $postData = $request->getParsedBody();
        $ruta = '/proyectocultura/';
        $user = str_split($postData['cuenta']);
        $identificacion = $user[4];
        switch ($identificacion) {
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

        if($user){
            if(password_verify($postData['password'], $user->password)){
                $this->sesion($identificacion, $user);
                header(sprintf('%s: %s', 'location', $ruta), false);// cuando el usuario logra ingresar se agrega el redireccionamiento a los headers
            }else{
                header(sprintf('%s: %s', 'location', '/proyectocultura/'), false);
                echo 'wrong';
            }
            
        }else{
            header(sprintf('%s: %s', 'location', '/proyectocultura/'), false);
        }

    }

    public function logOut(){
        unset($_SESSION['matricula']);
        unset($_SESSION['nombre']);
        unset($_SESSION['user']);
        header(sprintf('%s: %s', 'location', '/proyectocultura/'), false);
    }

    public function sesion($identificacion, $user){
        switch ($identificacion) {
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
                    $_SESSION['nombre'] = $user->firstName . " " . $user->secondName;
                    $_SESSION['user'] = 'admi';
                }
                break;
        }
    }
}
