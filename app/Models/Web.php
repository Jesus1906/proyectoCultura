<?php

namespace App\Models;

class Web
{

    public function cargarRutas($map)
    {
        $map->post('auth', RUTA_URL . 'auth', [
            'controlador' => RUTA_CONTROLLER . '\AuthController',
            'accion' => 'autenticacionUsuario',
        ]);

        $map->get('inicioAlumno', RUTA_URL. 'alm', [
            'controlador' => RUTA_CONTROLLER . '\RouteController',
            'accion' => 'inicioALU',
        ]);
        
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

        $map->get('cursos', RUTA_URL . 'curso', [
            'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
            'accion' => 'vistaCurso',
        ]);

        $map->get('login', RUTA_URL . 'login', [
            'controlador' => RUTA_CONTROLLER . '\RoutePrincipalController',
            'accion' => 'vistaLogin',
        ]);

        $map->get('inicioADM', RUTA_URL . 'adm', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'inicioADM',
        ]);
        //////////////////////////////////////////////////// ---inicio controlador Admin Registro
        $map->get('gAgregarAdj', RUTA_URL . 'adm/registro/adjunto', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarAdj',
        ]);

        $map->post('pAgregarAdj', RUTA_URL . 'adm/registro/adjunto', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarAdj',
        ]);

        $map->get('gAgregarADM', RUTA_URL . 'adm/registro/administrador', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarADM',
        ]);

        $map->post('pAgregarADM', RUTA_URL . 'adm/registro/administrador', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarADM',
        ]);

        //--------------------------------------------------------- en comun AL-ADM-ADJ
        $map->get('gAgregarALU', RUTA_URL . 'adm/registro/alumno', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarALU',
        ]);

        $map->post('pAgregarALU', RUTA_URL . 'adm/registro/alumno', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarALU',
        ]);
        //--------------------------------------------------------

        $map->get('gAgregarLIDER', RUTA_URL . 'adm/registro/lider', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarLIDER',
        ]);

        $map->post('pAgregarLIDER', RUTA_URL . 'adm/registro/lider', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarLIDER',
        ]);

        $map->get('gAgregarPROF', RUTA_URL . 'adm/registro/profesor', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarPROF',
        ]);

        $map->post('pAgregarPROF', RUTA_URL . 'adm/registro/profesor', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'AgregarPROF',
        ]);
        //////////////////////////////////////////////////// ---fin controlador Admin Registro 
        //////////////////////////////////////////////////// ---inicio controlador Admin consulta
        $map->get('gConsultaADJ', RUTA_URL . 'adm/consulta/adjunto', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaADJ',
        ]);

        $map->post('pConsultaADJ', RUTA_URL . 'adm/consulta/adjunto', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaADJ',
        ]);

        $map->get('gConsultaADM', RUTA_URL . 'adm/consulta/administrador', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaADM',
        ]);

        $map->post('pConsultaADM', RUTA_URL . 'adm/consulta/administrador', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaADM',
        ]);

        $map->get('gConsultaALU', RUTA_URL . 'adm/consulta/alumno', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaALU',
        ]);

        $map->post('pConsultaALU', RUTA_URL . 'adm/consulta/alumno', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaALU',
        ]);

        $map->get('gConsultaLIDER', RUTA_URL . 'adm/consulta/lider', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaLIDER',
        ]);

        $map->post('pConsultLIDER', RUTA_URL . 'adm/consulta/lider', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaLIDER',
        ]);

        $map->get('gConsultaPROF', RUTA_URL . 'adm/consulta/profesor', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaPROF',
        ]);

        $map->post('pConsultaPROF', RUTA_URL . 'adm/consulta/profesor', [
            'controlador' => RUTA_CONTROLLER . '\RouteAdminController',
            'accion' => 'consultaPROF',
        ]);
        //////////////////////////////////////////////////// ---inicio controlador Admin consulta
        //map get(nombre que se le da en url, url que debe hacer match, handler o accion a realizar )
    }
}
