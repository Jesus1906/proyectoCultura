<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo RUTA_SERVER ?>/public/estilos/adj/principal.css">

    <link rel="stylesheet" href="<?php echo RUTA_SERVER ?>/public/estilos/adj/principal_adju.css">


    <!-- Favicon -->
    <link rel="shortcut icon" href="http://localhost/proyectocultura/ImagenescULTURA/logo.jpg" />
    <title>Inicio Adjunto</title>
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
                    <a class="nav-link" href="#">-</a>
                </li>
            </ul>
            <a class="nav-link" href="#">Cursos <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL ?>adj">Home <span class="sr-only">(current)</span></a>
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
                    <a href="<?php echo RUTA_URL ?>adj/perfil">Editar Perfil</a>
                </div>
            </div>
        </div>

        <div id="margen-proceso">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <a href="cursoAsig_adju.html">
                            <figure>
                                <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/adjunto/cursoAsignado.jpg" alt="Curso Asignado">
                                <div class="capa">
                                    <h3>Consultar Curso Asigando</h3>
                                    <p>En esta ventana podrás ver el curso que se te ha asignado. Así como descargar
                                        el material necesario.
                                    </p>
                                </div>
                            </figure>
                        </a>
                    </div>

                </div>
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <a href="<?php echo RUTA_URL ?>adj/consulta/pagos">
                            <figure>
                                <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/adjunto/pagosAlumnos.jpg" alt="Pago Alumnos">
                                <div class="capa">
                                    <h3>Pagos de Alumnos</h3>
                                    <p>En esta ventana podrás actualizar y corroborar el pago de todos los alumnos, por curso.
                                    </p>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <a href="calificaciones.html">
                            <figure>
                                <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/adjunto/calificaciones.jpg" alt="Calificaciones">
                                <div class="capa">
                                    <h3>Calificaciones</h3>
                                    <p>En esta ventana podrás subir y actualizar las calificaciones de los alumnos por curso.
                                    </p>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 proceso">
                    <div class="contenedor">
                        <a href="../registro.html">
                            <figure>
                                <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/adjunto/registrarAlumnos.jpg" alt="historial">
                                <div class="capa">
                                    <h3>Registrar a Alumno</h3>
                                    <p>En esta ventana podrás registrar a los alumnos que tengan problemas para hacerlo ellos mismos.
                                    </p>
                                </div>
                            </figure>
                        </a>
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