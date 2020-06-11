<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href=" principal.css">

    <link rel="stylesheet" href="<?php echo RUTA_SERVER ?>public/estilos/adm/principal_adm.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://localhost/proyectocultura/ImagenescULTURA/logo.jpg" />
    <title>Inicio Administrador</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="<?php echo RUTA_SERVER ?>/ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">

                </li>
            </ul>
            <a class="nav-link" href="<?php echo RUTA_URL ?>adm/consulta/curso">Cursos <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="adm">Inicio <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL . "logout" ?>">Cerrar Sesion <span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="container">
        <div class="row" id="primer_row">
            <div class="col-sm-4">
                <div>
                    <p id="welcome">Bienvenido: <?php echo $_SESSION['nombre']; ?></p>
                </div>
            </div>
            <div class="col-sm-4" id="question">
                <div>
                    <p id="question-p">¿Qué desea hacer?</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="foto">
                    <img class="perfil" src="https://image.freepik.com/vector-gratis/perfil-empresario-dibujos-animados_18591-58479.jpg" alt="foto">
                </div>
                <div class="text-center">
                    <a href="<?php echo RUTA_URL ?>adm/perfil">Editar Perfil</a>
                </div>
            </div>
        </div>

        <div id="margen-proceso">
            <div class="row">
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <figure>
                            <img src="<?php echo RUTA_SERVER ?>/imaPrincipales/adjunto/cursoAsignado.jpg" alt="inscripcion">
                            <div class="capa">
                                <h3>Cursos</h3>
                                <ul>
                                    <li><a href="<?php echo RUTA_URL ?>adm/registro/curso">Agregar</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/consulta/curso">Consultar</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/modificar/curso">Modificar</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/oferta/curso">Ofertar</a></li>
                                    <li><a href="cursos_listas.html">Listas de Alumnos</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/registro/periodo">Agregar Periodo</a></li>
                                </ul>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <figure>
                            <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/admin/evaluaciones.jpg" alt="DatosGenerales">
                            <div class="capa">
                                <h3>Evaluaciones</h3>
                                <ul>
                                    <li><a href="../Adjunto/calificaciones.html">Alumnos</a></li>
                                    <li><a href="prof_eva.html">Profesores</a></li>
                                    <li><a href="cursos_eva.html">Cursos</a></li>
                                </ul>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <figure>
                            <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/adjunto/registrarAlumnos.jpg" alt="historial">
                            <div class="capa">
                                <h3>Consultas</h3>
                                <ul>
                                    <li><a href="<?php echo RUTA_URL ?>adm/consulta/adjunto">Adjuntos</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/consulta/alumno">Alumnos</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/consulta/profesor">Profesores</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/consulta/lider">Líderes</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/consulta/curso">Cursos</a></li>
                                </ul>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <figure>
                        <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/admin/alumnos.jpg" alt="comprobante">
                        <div class="capa">
                            <h3>Alumnos</h3>
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>registro">Registrar</a></li>
                                <li><a href="<?php echo RUTA_URL ?>adm/consulta/alumno">Consultar</a></li>
                                <li><a href="<?php echo RUTA_URL ?>adm/consulta/pagos">Consultar Pagos</a></li>
                                <li><a href="cursos_listas.html">Listas por curso</a></li>
                            </ul>
                        </div>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <figure>
                        <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/admin/profes.jpg" alt="cursos">
                        <div class="capa">
                            <h3>Profesores</h3>
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>adm/registro/profesor">Registrar</a></li>
                                <li><a href="<?php echo RUTA_URL ?>adm/consulta/profesor">Consultar</a></li>
                                <li><a href="prof_eva.html">Evaluaciones</a></li>
                            </ul>
                        </div>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <figure>
                        <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/adjunto/pagosAlumnos.jpg" alt="Adjuntos">
                        <div class="capa">
                            <h3>Adjuntos</h3>
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>adm/registro/adjunto">Registrar</a></li>
                                <li><a href="<?php echo RUTA_URL ?>adm/consulta/adjunto">Consultar</a></li>
                            </ul>
                        </div>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <figure>
                        <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/admin/lideres.jpg" alt="Lideres">
                        <div class="capa">
                            <h3>Líderes de Grupos Familiares</h3>
                            <ul>
                                <li><a href="<?php echo RUTA_URL ?>adm/registro/lider">Registrar</a></li>
                                <li><a href="<?php echo RUTA_URL ?>adm/consulta/lider">Consultar</a></li>
                            </ul>
                        </div>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contenedor">
                        <figure>
                            <img src="<?php echo RUTA_SERVER ?>/imaPrincipales/admin/admin.jpg" alt="admin">
                            <div class="capa">
                                <h3>Administradores</h3>
                                <ul>
                                    <li><a href="<?php echo RUTA_URL ?>adm/registro/administrador">Registrar Administrador</a></li>
                                    <li><a href="<?php echo RUTA_URL ?>adm/consulta/administrador">Consultar Administrador</a></li>
                                </ul>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <figure>
                        <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/admin/reportes.jpg" alt="reportes">
                        <div class="capa">
                            <h3>Reportes</h3>
                        </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>


    </div>






    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
