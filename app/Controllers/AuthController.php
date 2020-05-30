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
        $user = $user[4];
        switch ($user) {
            case '1': {
                    $user = Alumno::find($postData['cuenta']);
                    $ruta .= 'alm';
                }
                break;
            case '2': {
                    $user = Adjunto::find($postData['cuenta']);
                }
                break;
            case '3': {
                    $user = Administrador::find($postData['cuenta']);
                    $ruta .= 'alm';
                }
                break;
        }

        if($user){
            if(password_verify($postData['password'], $user->password)){
                header(sprintf('%s: %s', 'location', $ruta), false);// cuando el usuario logra ingresar se agrega el redireccionamiento a los headers
            }else{
                header(sprintf('%s: %s', 'location', '/proyectocultura/'), false);
                echo 'wrong';
            }
            
        }else{
            header(sprintf('%s: %s', 'location', '/proyectocultura/'), false);
            echo 'not Found';
        }

    }
}
