<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ofertar Curso</title>
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
        <h1>Ofertar Cursos</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="panelLateral">

            </div>
            <div class="col-sm-6">

                <div class="modal-dialog text-center">
                    <h3 id="nombreCurso">Nombre Curso</h3>
                    <img id="imgCurso" src="../../ImaCursos/VIDA CON PROPOSITO.jpg" alt="Responsive image" height="360px">
                    <p><strong>Descripcion: </strong>
                        <p id="descripcion"></p>
                    </p>
                </div>

            </div>

            <form action="" method="POST">
                <div class="row">
                    <label for="inputState">Id Curso</label>
                </div>
                <div class="form-row">
                    <div class="col ">
                        <input id="idCurso" value = " " type="text" class="form-control" required>
                    </div>
                </div>

                <div class="col ">
                    <div class="row">
                        <label for="inputState">Fecha de Inscripción</label>
                    </div>
                    <div class="form-row">
                        <div class="col ">
                            <input type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <label for="inputState">Fecha de Inicio</label>
                    </div>
                    <div class="form-row">
                        <div class="col ">
                            <input type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <label for="inputState">Fecha de Termino</label>
                    </div>
                    <div class="form-row">
                        <div class="col ">
                            <input type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="inputState">Horario</label>
                        <select id="inputState" class="form-control" required>
                            <option selected>Matutino</option>
                            <option>Vespertino</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="inputState">Cupo Minimo</label>
                    </div>
                    <div class="form-row">
                        <div class="col ">
                            <input type="number" class="form-control" value="10">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="inputState">Profesor</label>
                        <select id="inputState" class="form-control" required>
                            <option selected>Profesor</option>
                            <option>option1</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="inputState">Adjunto</label>
                        <select id="inputState" class="form-control" required>
                            <option selected>Adjunto</option>
                            <option>option1</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="inputState">Periodo</label>
                        <select id="inputState" class="form-control" required>
                            <option selected>Ene-Marzo</option>
                            <option>Marzo-Mayo</option>
                        </select>
                    </div>
                    <br>
                    <!-- Button trigger modal -->
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-outline-primary" data-toggle="modal">
                            Ofertar
                        </button>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Curso Ofertado</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    El Curso ha sido Ofertado con éxito
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary" action="" method="POST">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </form>


        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo RUTA_SERVER ?>/js/cursos/oferta.js"></script>
</body>

</html>