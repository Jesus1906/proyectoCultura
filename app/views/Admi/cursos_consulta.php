<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Curso Asignado</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../../ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

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
            <a class="nav-link" href="Clasi_adm.html">Home <span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="modal-dialog text-center">
        <h1>Consultar Cursos</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2" id="panelLateral">

            </div>
            <div class="col-sm-6">

                <div class="modal-dialog text-center">
                    <h3 id="nombreCurso">Nombre Curso</h3>
                    <img src="../../ImaCursos/VIDA CON PROPOSITO.jpg" alt="Responsive image" height="360px">
                    <p><strong>Descripcion: </strong>
                        <p id="descripcion"></p>
                    </p>
                </div>



            </div>
            <div class="col-sm-4">

                <dt class="col-sm-4">Manual</dt>
                <dd class="col-sm-8"><a id="manual" href="#">Manual</a></dd>
                <dt class="col-sm-4">Examen</dt>
                <dd class="col-sm-8"><a id="examen" href="#">Examen</a></dd>
                <dt class="col-sm-4">Clave Hoja de Respuestas</dt>
                <dd class="col-sm-8"><a id="hoja" href="#">Respuestas</a></dd>
                <dt class="col-sm-4">Nivel</dt>
                <dt class="col-sm-8" id="nivel"># Nivel</dt>


            </div>
        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo RUTA_SERVER ?>/js/cursos/consulta.js"></script>
</body>

</html>