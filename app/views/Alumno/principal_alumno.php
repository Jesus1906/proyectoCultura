<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="<?php echo RUTA_SERVER ?>/public/estilos/alm/principal_alumno.css">
    <title>Inicio Alumno</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../../ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">-</a>
                </li>
            </ul>
            <a class="nav-link" href="principal_alumno.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Cursos <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL ."logout" ?>" >Cerrar Sesion <span class="sr-only">(current)</span></a>
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
                    <img class="perfil"
                        src="https://image.freepik.com/vector-gratis/perfil-empresario-dibujos-animados_18591-58479.jpg" alt="foto">
                </div>
                <div class="text-center">
                    <a href="datosGenerales.html">Editar Perfil</a>
                </div>
                
            </div>
        </div>

        <div id="margen-proceso">
            <div class="row">
                <div class="col-sm-6 proceso">
                    <a href="Inscripciones.html"><img class="img-proceso"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRg3v02DXz6qzLL7OYXDAgzin88H9VionrteEoe70E8uN7l6YCX&usqp=CAU"
                            alt="inscripcion"></a>
                    <label for="inscripcion">Inscripción</label>
                </div>
                <div class="col-sm-6 proceso">
                    <a href="historial.html"><img class="img-proceso"
                            src="https://businessman.ru/static/img/a/65633/443700/73899.jpg"
                            alt="historial"></a>
                    <label for="historial">Historial</label>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 proceso">
                    <a href="comprobantes.html"><img class="img-proceso"
                            src="https://www.elnuevosiglo.com.co/sites/default/files/styles/noticia_interna/public/2020-03/curso.jpg"
                            alt="comprobante"></a>
                    <label for="comprobante">Comprobantes de Inscripción</label>
                </div>
                <div class="col-sm-6 proceso">
                    <a href="cursos_alumn.html"><img class="img-proceso"
                            src="https://cdn.pixabay.com/photo/2016/06/01/06/26/open-book-1428428_960_720.jpg"
                            alt="cursos"></a>
                    <label for="cursos">Cursos</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 footer">
                <div>
                    <h4>contacto</h4>
                </div>

                <div>
                    <a href="#"><img class="item"
                            src="https://i.pinimg.com/564x/af/de/45/afde45783f0f89280aeeb6d4849e682e.jpg" alt=""></a>
                    <a href="#"><img class="item"
                            src="https://i.pinimg.com/originals/d8/6b/b7/d86bb706dbba64c84f85a890d20814d5.jpg"
                            alt=""></a>
                    <a href="#"><img class="item"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/480px-Instagram_logo_2016.svg.png"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>