<?php

namespace App\Models;

class Web
{

    public function cargarRutas($map)
    {
        $this->rutasAdmim($map);// cargamos las rutas para el administrador

        //////////////////////////////////////////////////////////////--autenticacion de usuarios
        //ruta para el ajax
        $map->post('/ajax', RUTA_URL . 'ajax', [
            'controlador' => RUTA_CONTROLLER . '\AjaxController',
            'accion' => 'asincronizar',
        ]);

        $map->post('auth', RUTA_URL . 'auth', [
            'controlador' => RUTA_CONTROLLER . '\AuthController',
            'accion' => 'autenticacionUsuario',
        ]);

        $map->get('logout', RUTA_URL . 'logout', [
            'controlador' => RUTA_CONTROLLER . '\AuthController',
            'accion' => 'logOut',
        ]);

        $map->get('inicioAlumno', RUTA_URL. 'alm', [
            'controlador' => RUTA_CONTROLLER . '\RouteController',
            'accion' => 'inicioALU',
            'auth' => true
        ]);

        $map->get('inicioADJ', RUTA_URL . 'adj', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdjController',
            'accion' => 'inicioADJ',
            'auth' => true
        ]);

        $map->get('inicioADM', RUTA_URL . 'adm', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'inicioADM',
            'auth' => true
        ]);
        /////////////////////////////////////////////////////////////////////


        $map->get('/', RUTA_URL, [
            'controlador' => RUTA_CONTROLLER . '\RouteController',
            'accion' => 'vistaHome',
        ]);

        $map->get('registro', RUTA_URL . 'registro', [
            'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
            'accion' => 'vistaRegistro',
        ]);

        $map->post('guardarRegistro', RUTA_URL . 'registro', [
            'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
            'accion' => 'vistaRegistro',
        ]);

        $map->get('cursos', RUTA_URL . 'cursos', [
            'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
            'accion' => 'vistaCursos',
        ]);

        $map->get('login', RUTA_URL . 'login', [
            'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
            'accion' => 'vistaLogin',
        ]);
    }


    public function rutasAdmim($map){
        $this->adminRegistro($map);
        $this->adminConsulta($map);
        $this->adminActualizar($map);
    }

    public function rutasAdjunto($map){

    }

    //inician rutas admin
    public function adminRegistro($map){
        $map->get('gAgregarAdj', RUTA_URL . 'adm/registro/adjunto', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarAdj',
            'auth' => true
        ]);

        $map->post('pAgregarAdj', RUTA_URL . 'adm/registro/adjunto', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarAdj',
            'auth' => true
        ]);

        $map->get('gAgregarADM', RUTA_URL . 'adm/registro/administrador', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarADM',
            'auth' => true
        ]);

        $map->post('pAgregarADM', RUTA_URL . 'adm/registro/administrador', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarADM',
            'auth' => true
        ]);

        //--------------------------------------------------------- en comun AL-ADM-ADJ
        $map->get('gAgregarALU', RUTA_URL . 'adm/registro/alumno', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarALU',
            'auth' => true
        ]);

        $map->post('pAgregarALU', RUTA_URL . 'adm/registro/alumno', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarALU',
            'auth' => true
        ]);
        //--------------------------------------------------------

        $map->get('gAgregarLIDER', RUTA_URL . 'adm/registro/lider', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarLIDER',
            'auth' => true
        ]);

        $map->post('pAgregarLIDER', RUTA_URL . 'adm/registro/lider', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarLIDER',
            'auth' => true
        ]);

        $map->get('gAgregarPROF', RUTA_URL . 'adm/registro/profesor', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarPROF',
            'auth' => true
        ]);

        $map->post('pAgregarPROF', RUTA_URL . 'adm/registro/profesor', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarPROF',
            'auth' => true
        ]);

        $map->get('gAgregarCurso', RUTA_URL . 'adm/registro/curso', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarCurso',
            'auth' => true
        ]);

        $map->post('pAgregarACurso', RUTA_URL . 'adm/registro/curso', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarCurso',
            'auth' => true
        ]);

        $map->get('gConfirmaCurso', RUTA_URL . 'adm/registro/confirma_curso', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'confirmaCurso',
            'auth' => true
        ]);

        $map->post('pConfirmaACurso', RUTA_URL . 'adm/registro/confirma_curso', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'confirmaCurso',
            'auth' => true
        ]);
    }

    public function adminConsulta($map){

        $map->get('gConsultaADJ', RUTA_URL . 'adm/consulta/adjunto', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaADJ',
            'auth' => true
        ]);

        $map->post('pConsultaADJ', RUTA_URL . 'adm/consulta/adjunto', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaADJ',
            'auth' => true
        ]);

        $map->get('gConsultaADM', RUTA_URL . 'adm/consulta/administrador', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaADM',
            'auth' => true
        ]);

        $map->post('pConsultaADM', RUTA_URL . 'adm/consulta/administrador', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaADM',
            'auth' => true
        ]);

        $map->get('gConsultaALU', RUTA_URL . 'adm/consulta/alumno', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaALU',
            'auth' => true
        ]);

        $map->post('pConsultaALU', RUTA_URL . 'adm/consulta/alumno', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaALU',
            'auth' => true
        ]);

        $map->get('gConsultaLIDER', RUTA_URL . 'adm/consulta/lider', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaLIDER',
            'auth' => true
        ]);

        $map->post('pConsultLIDER', RUTA_URL . 'adm/consulta/lider', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaLIDER',
            'auth' => true
        ]);

        $map->get('gConsultaPROF', RUTA_URL . 'adm/consulta/profesor', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaPROF',
            'auth' => true
        ]);

        $map->post('pConsultaPROF', RUTA_URL . 'adm/consulta/profesor', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaPROF',
            'auth' => true
        ]);
    }

    public function adminActualizar($map){
        $map->get('gActualizarPerfilAdm', RUTA_URL . 'adm/perfil', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'actualizarPerfil',
            'auth' => true
        ]);

        $map->post('pActualizarPerfilAdm', RUTA_URL . 'adm/perfil', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'actualizarPerfil',
            'auth' => true
        ]);
    }

    //inician rutas adjunto
    public function adjuntoActualizar($map){
        $map->get('gActualizarPerfilAdj', RUTA_URL . 'adm/perfil', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'actualizarPerfil',
            'auth' => true
        ]);

        $map->post('pActualizarPerfilAdj', RUTA_URL . 'adm/perfil', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'actualizarPerfil',
            'auth' => true
        ]);
    }
}
