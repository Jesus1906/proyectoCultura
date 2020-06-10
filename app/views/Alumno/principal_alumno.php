<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="<?php echo RUTA_SERVER ?>public/estilos/alm/principal_alumno.css">
    <link rel="stylesheet" href="<?php echo RUTA_SERVER ?>public/estilos/principal/styles.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://localhost/proyectocultura/ImagenescULTURA/logo.jpg" />
    <title>Inicio Alumno</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?Php echo RUTA_URL ?>"><img src="<?php echo RUTA_SERVER ?>/ImagenescULTURA/logo.jpg" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">-</a>
                </li>
            </ul>
            <a class="nav-link" href="<?php echo RUTA_URL ?>alm">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL ?>cursos">Cursos <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL?>logout">Cerrar Sesion <span class="sr-only">(current)</span></a>
        </div>
    </nav>
    <br><br><br> <br>
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
                    <a href="<?php echo RUTA_URL ?>alm/perfil">Editar Perfil</a>
                </div>

            </div>
        </div>

        <div id="margen-proceso">

            <div class="row">
                <div class="col-sm-6 proceso">
                    <div class="contenedor">
                        <a href="<?php echo RUTA_URL ?>alm/inscripcion">
                            <figure>
                                <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/alumno/inscripciones.jpg" alt="inscripcion">
                                <div class="capa">
                                    <h3>Inscripción</h3>
                                    <p>¡Inscribete a tu siguiente curso!</p>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 proceso">
                    <div class="contenedor">
                        <a href="historial.html">
                            <figure>
                                <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/alumno/historial.jpg" alt="historial">
                                <div class="capa">
                                    <h3>Historial</h3>
                                    <p>¡Consulta las calificaciones que has obtenido en cada discipulado!</p>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 proceso">
                    <div class="contenedor">
                        <a href="comprobantes.html">
                            <figure>
                                <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/alumno/comprobantes.jpg" alt="comprobante">
                                <div class="capa">
                                    <h3>Comprobantes de Inscripción</h3>
                                    <p>Aquí puedes corroborar el pago de cada uno de tus discipulados</p>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 proceso">
                    <div class="contenedor">
                        <a href="<?php echo RUTA_URL ?>alm/cursos">
                            <figure>
                                <img class="img-proceso" src="<?php echo RUTA_SERVER ?>/imaPrincipales/alumno/cursos.jpg" alt="cursos">
                                <div class="capa">
                                    <h3>Cursos</h3>
                                    <p>Consulta el material ed apoyo que se te proporciona por curso</p>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="bgDark">
        <div class="container">
            <img src="<?php echo RUTA_SERVER ?>ImagenescULTURA/logo.jpg" alt="..." class="rounded-circle" style="width: 90px; height: 90px;">

            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.instagram.com/cultura.filadelfia/" target="_blank"><i class="icon ion-logo-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCXL0xAaVTYmf3EMlccDoTFA" target="_blank"><i class="icon ion-logo-youtube"></i></a></li>
                <li class="list-inline-item"><a href="https://www.ministerios-filadelfia.org/" target="_blank"><i class="icon ion-logo-dribbble"></i></a></li>
                <li class="list-inline-item"><a href="https://www.facebook.com/Cultura-Filadelfia-187327808340452" target="_blank"><i class="icon ion-logo-facebook"></i></a></li>
            </ul>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
