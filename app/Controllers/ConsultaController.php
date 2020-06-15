<?php

namespace App\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\{Lider_celula, Alumno, Adjunto, Administrador, Profesor, Curso, Oferta_cursos, Periodo, Alumno_ofertaCursos};

class ConsultaController extends BaseController
{

    public function __construct()
    {
        $this->iniciarControladorBase();
    }

    public function getFecha()
    {
        date_default_timezone_set("America/Mexico_city");
        return $fechaActual = date('Y-m-d');
    }

    public function CursosOrdenadosNivel()
    {
        $UltimoCurso = $this->getAllCursos();
        $numero = count($UltimoCurso);
        $UltimoCurso = Curso::find($UltimoCurso[$numero - 1]->idCurso);
        return Curso::where('nivel', $UltimoCurso->nivel)
            //->orWhere('nivel', 2)
            //->orWhere('nivel', 3)
            //->orderBy('nivel', 'asc')
            ->get();
    }

    public function CursosOrdenados()
    {
        return Curso::where('nivel', 1)
            ->orWhere('nivel', 2)
            ->orWhere('nivel', 3)
            ->orderBy('nivel', 'asc')
            ->orderBy('subnivel', 'asc')
            ->get();
    }

    public function getAllCursos()
    {
        return Curso::all();
    }

    public function getPeriodo()
    {
        $periodos = Periodo::all();
        if ($periodos) {
            return $periodos = $periodos[count($periodos) - 1];
        } else {
            return null;
        }
    }
    public function getAllLideres()
    {
        return Lider_celula::all();
    }

    public function getAllProfesor()
    {
        return Profesor::all();
    }

    public function getAllAlumno()
    {
        return Alumno::all();
    }

    public function getAllAdjunto()
    {
        return Adjunto::all();
    }

    public function getAllAdmin()
    {
        return Administrador::all();
    }

    public function getCursos($nivel, $subnivel)
    {
        return Curso::where('nivel', $nivel)
            ->where('subnivel', $subnivel)
            ->get();
    }

    public function getOfertaExistente($oferta, $periodo)
    {
        return Oferta_cursos::where('Curso_idCurso', $oferta['idCurso'])
            ->where('periodo', $periodo['periodo'])
            ->where('turno', $oferta['turno'])
            ->get();
    }

    public function getAdjunto($post)
    {
        switch ($post['filtro']) {
            case 'matricula': {
                    return Adjunto::find($post['parametro']);
                }
                break;

            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Adjunto::where('firstName', $names[0])
                        ->orWhere('secondName', $names[0])
                        ->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Adjunto::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {

                    return $this->getAllAdjunto();
                }
                break;
        }
    }

    public function getAlumno($post)
    {
        switch ($post['filtro']) {
            case 'matricula': {
                    return Alumno::find($post['parametro']);
                }
                break;

            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Alumno::where('firstName', $names[0])
                        ->orWhere('secondName', $names[0])->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Alumno::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {

                    return $this->getAllAlumno();
                }
                break;
        }
    }

    public function getLider($post)
    {
        switch ($post['filtro']) {
            case 'id': {
                    return Lider_celula::find($post['parametro']);
                }
                break;
            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Lider_celula::where('firstName', $names[0])
                        ->orWhere('secondName', $names[0])->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Lider_celula::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {

                    return $this->getAllLideres();
                }
                break;
        }
    }
    
    public function getProfesor($post)
    {
        switch ($post['filtro']) {
            case 'Profesor_Matricula': {
                    return Profesor::find($post['parametro']);
                }
                break;
            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Profesor::where('firstName', $names[0])
                        ->orWhere('secondName', $names[0])->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Profesor::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {

                    return $this->getAllProfesor();
                }
                break;
        }
    }

    public function getAdministrador($post)
    {
        switch ($post['filtro']) {
            case 'matricula': {
                    return Administrador::find($post['parametro']);
                }
                break;
            case 'name': {
                    $names = explode(' ', $post['parametro']);
                    return Administrador::where('firstname', $names[0])
                        ->orWhere('secondName', $names[0])->get();
                }
                break;

            case 'apellido': {
                    $apellido = explode(' ', $post['parametro']);
                    return Administrador::where('firstLastName', $apellido[0])
                        ->orWhere('secondLastName', $apellido[0])
                        ->get();
                }
                break;
            case 'all': {
                    return $this->getAllAdmin();
                }
                break;
        }
    }

    public function getMatricula($usr)
    {
        //obtener el ultimo id registrado en la tabla en caso ser true retornar el id
        //si no existe id previo retornar false
        switch ($usr) {
            case 'Adm': {
                    $row = Administrador::count();
                    if ($row != 0) {
                        $matricula = 1000 + $row . "3";
                        return (int) $matricula;
                    } else {
                        return false;
                    }
                }
                break;

            case 'Adj': {
                    $row = Adjunto::count();
                    if ($row != 0) {
                        $matricula = 1000 + $row . "2";
                        return (int) $matricula;
                    } else {
                        return false;
                    }
                }
                break;

            case 'Alu': {
                    $row = Alumno::count();
                    if ($row != 0) {
                        $matricula = 1000 + $row . "1";
                        return (int) $matricula;
                    } else {
                        return false;
                    }
                }
                break;
        } //switch
    } //fin getmatricula

    public function getCurso($id)
    {
        return Curso::find($id);
    }

    public function periodoYOfertaActual($periodo)
    {
        $ofertas = Oferta_cursos::all();

        if (count($ofertas) == 0) { // preguntamos si en la bd esxisten ofertas
            return true; //retornamos true para que entre a la condicion y muestre inscripciones no disponibles

        } else {
            $ofertaReciente = $ofertas[count($ofertas) - 1];
            if ($periodo->periodo == $ofertaReciente->periodo) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function getCursoOferta($idCurso, $turno, $periodo)
    {
        return Oferta_cursos::where('Curso_idCurso', $idCurso)
            ->where('turno', $turno)
            ->where('periodo', $periodo)
            ->get();
    }

    public function getCursosPeriodo($periodo)
    {
        return Oferta_cursos::where('periodo', $periodo)
            ->get();
    }

    public function getInscripcion($idAlumno, $idOfertaM, $idOfertaV, $periodo)
    {
        if ($idOfertaM == "") {
            return Alumno_ofertaCursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
                ->select("oferta_cursos.idOferta_Cursos")
                ->where('Alumno_matriculaAlumno', $idAlumno)
                ->where('Oferta_Cursos_idOferta_Cursos', $idOfertaV)
                ->where('oferta_cursos.periodo', $periodo)
                ->get();
        } else if ($idOfertaV == "") {
            return Alumno_ofertaCursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
                ->select("oferta_cursos.idOferta_Cursos")
                ->where('Alumno_matriculaAlumno', $idAlumno)
                ->where('Oferta_Cursos_idOferta_Cursos', $idOfertaM)
                ->where('oferta_cursos.periodo', $periodo)
                ->get();
        } else { //por si las dudas
            return Alumno_ofertaCursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
                ->where('Alumno_matriculaAlumno', $idAlumno)
                ->where('Oferta_Cursos_idOferta_Cursos', $idOfertaM)
                ->where('oferta_cursos.periodo', $periodo)
                ->orWhere('Oferta_Cursos_idOferta_Cursos', $idOfertaV)
                ->get();
        }
    }

    public function getCursoInscritoEnPeriodoActual($alumno, $periodo)
    {
        $ofertaCurso = alumno_ofertacursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
            ->join('curso', 'oferta_cursos.Curso_idCurso', '=', 'curso.idCurso')
            ->join('adjunto', 'oferta_cursos.Adjunto_matriculaAdjunto', '=', 'matriculaAdjunto')
            ->join('profesor', 'oferta_cursos.Profesor_Profesor_Matricula1', '=', 'Profesor_Matricula')
            ->select(
                'oferta_cursos.turno',
                'oferta_cursos.fechaInicio As inicio',
                'oferta_cursos.fechaTermino As fin',
                "curso.name",
                'curso.photo',
                'curso.manual',
                'curso.descripcion',
                'adjunto.firstName AS adjuntoName1',
                'adjunto.secondName AS adjuntoName2',
                'adjunto.firstLastName AS adjuntoName3',
                'adjunto.secondLastName AS adjuntoName4',
                'adjunto.phone',
                'profesor.firstName AS profName1',
                'profesor.secondName AS profName2',
                'profesor.firstLastName AS profName3',
                'profesor.secondLastName AS profName4'
            )
            ->where('alumno_ofertacursos.Alumno_matriculaAlumno', $alumno)
            ->where('oferta_cursos.periodo', $periodo)
            ->get();
        return $ofertaCurso;
    }

    public function getInfoFirstComprobante($periodo, $alumno)
    {
        $info = alumno_ofertacursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
            ->join('curso', 'oferta_cursos.Curso_idCurso', '=', 'curso.idCurso')
            ->join('adjunto', 'oferta_cursos.Adjunto_matriculaAdjunto', '=', 'matriculaAdjunto')
            ->join('profesor', 'oferta_cursos.Profesor_Profesor_Matricula1', '=', 'Profesor_Matricula')
            ->select(
                'oferta_cursos.turno',
                "curso.name",
                'adjunto.firstName AS adjuntoName1',
                'adjunto.secondName AS adjuntoName2',
                'adjunto.firstLastName AS adjuntoName3',
                'adjunto.secondLastName AS adjuntoName4',
                'profesor.firstName AS profName1',
                'profesor.secondName AS profName2',
                'profesor.firstLastName AS profName3',
                'profesor.secondLastName AS profName4'
            )
            ->where('alumno_ofertacursos.Alumno_matriculaAlumno', $alumno)
            ->where('oferta_cursos.periodo', $periodo)
            ->get();
        return $info;
    }

    public function getDataOfertayPago($periodo)
    {
        $ofertayPago = Alumno_ofertaCursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
            ->join('curso', 'oferta_cursos.Curso_idCurso', '=', 'curso.idCurso')
            ->join('alumno', 'alumno.matriculaAlumno', '=', 'Alumno_ofertaCursos.Alumno_matriculaAlumno')
            ->select(
                'alumno.matriculaAlumno',
                'alumno.firstName',
                'alumno.secondName',
                'alumno.firstLastName',
                'alumno.secondLastName',
                'curso.name',
                'alumno.pago'
            )
            ->where('oferta_cursos.periodo', $periodo)
            ->get();
        return $ofertayPago;
    }

    public function dataComprobantes($alumno, $periodo)
    {
        $data =  alumno_ofertacursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
            ->join('alumno', 'alumno.matriculaAlumno', '=', 'Alumno_ofertaCursos.Alumno_matriculaAlumno')
            ->join('curso', 'oferta_cursos.Curso_idCurso', '=', 'curso.idCurso')
            ->join('adjunto', 'oferta_cursos.Adjunto_matriculaAdjunto', '=', 'matriculaAdjunto')
            ->join('profesor', 'oferta_cursos.Profesor_Profesor_Matricula1', '=', 'Profesor_Matricula')
            ->select(
                'alumno.pago',
                'oferta_cursos.turno',
                'oferta_cursos.fechaInicio As inicio',
                'curso.name',
                'oferta_cursos.StatusActivo AS cursoStatus',
                'adjunto.firstName AS adjuntoName1',
                'adjunto.secondName AS adjuntoName2',
                'adjunto.firstLastName AS adjuntoName3',
                'adjunto.secondLastName AS adjuntoName4',
                'profesor.firstName AS profName1',
                'profesor.secondName AS profName2',
                'profesor.firstLastName AS profName3',
                'profesor.secondLastName AS profName4'
            )
            ->where('alumno_ofertacursos.Alumno_matriculaAlumno', $alumno)
            ->where('oferta_cursos.periodo', $periodo)
            ->get();
        return $data;
    }

    public function getDataPagosCompletados($idOferta)
    {
        $data = Alumno_ofertaCursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
            ->join('alumno', 'alumno.matriculaAlumno', '=', 'Alumno_ofertaCursos.Alumno_matriculaAlumno')
            ->where('oferta_cursos.idOferta_Cursos', $idOferta)
            ->where('alumno.pago', 1)
            ->count();
        return $data;
    }

    public function getListaCurso($idOferta)
    {
        $periodo = $this->getPeriodo();
        if ($periodo->inscripcionFin == 1) {
            $data = Alumno_ofertaCursos::join('alumno', 'alumno.matriculaAlumno', '=', 'Alumno_ofertaCursos.Alumno_matriculaAlumno')
                ->select(
                    'alumno.matriculaAlumno',
                    'alumno.firstName',
                    'alumno.secondName',
                    'alumno.firstLastName',
                    'alumno.secondLastName',
                    'alumno_ofertacursos.calificacion'
                )
                ->where('alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', $idOferta)
                ->where('alumno.pago', 1)
                ->get();
        } else {
            $data = Alumno_ofertaCursos::join('alumno', 'alumno.matriculaAlumno', '=', 'Alumno_ofertaCursos.Alumno_matriculaAlumno')
                ->select(
                    'alumno.matriculaAlumno',
                    'alumno.firstName',
                    'alumno.secondName',
                    'alumno.firstLastName',
                    'alumno.secondLastName',
                    'alumno_ofertacursos.calificacion'
                )
                ->where('alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', $idOferta)
                ->get();
        }
        return $data;
    }

    public function getCursoPeriodoLista($periodo)
    {
        return Oferta_cursos::join('curso', 'oferta_cursos.Curso_idCurso', '=', 'curso.idCurso')
            ->select(
                'curso.name',
                'oferta_cursos.turno',
                'curso.nivel',
                'oferta_cursos.idOferta_Cursos'
            )
            ->where('oferta_cursos.periodo', $periodo)
            ->orderBy('nivel', 'asc')
            ->orderBy('subnivel', 'asc')
            ->get();
    }

    public function getHistorial($alumno)
    {
        return alumno_ofertacursos::join('oferta_cursos', 'alumno_ofertacursos.Oferta_Cursos_idOferta_cursos', '=', 'oferta_cursos.idOferta_Cursos')
            ->join('alumno', 'alumno.matriculaAlumno', '=', 'Alumno_ofertaCursos.Alumno_matriculaAlumno')
            ->join('curso', 'oferta_cursos.Curso_idCurso', '=', 'curso.idCurso')
            ->select(
                //'alumno.firstName AS name1',
                //'alumno.secondName AS name2',
                //'alumno.firstLastName AS name3',
                //'alumno.secondLastName AS name4',
                'curso.nivel',
                'curso.subnivel',
                'curso.name',
                'alumno_ofertacursos.calificacion',
                'oferta_cursos.periodo'
            )
            ->where('alumno.matriculaAlumno', $alumno)
            ->where('alumno_ofertacursos.calificacion', '!=', null)
            ->orderBy('nivel', 'asc')
            ->orderBy('subnivel', 'asc')
            ->get();
    }
}
