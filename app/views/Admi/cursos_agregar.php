<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Agregar Curso</title>
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
                </li>
            </ul>
            <a class="nav-link" href="<?php echo RUTA_URL ?>adm/consulta/curso">Cursos <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL ?>adm">Inicio <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL . "logout" ?>">Cerrar Sesion <span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="modal-dialog text-center">
        <h1>Agregar un Curso</h1>
    </div>



    <div class="container">
        <hr class="solid" style="border-top: 3px solid rgb(134, 8, 8)">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <label for="inputState">Nombre del Curso</label>
                    <input type="text" class="form-control" placeholder="Nombre del Curso" required name="name">
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <label for="inputState">Nivel del Curso</label>
                    <input type="number" class="form-control" placeholder="2" required name="nivel">
                </div>
                <div class="col-sm-3">
                    <label for="inputState">Subnivel del Curso</label>
                    <input type="number" class="form-control" placeholder="1" required name="subnivel">
                </div>
            </div>
        
            <div class="form-row">
                <div class="col-sm-3"></div>
                <div class="col-md-6">
                    <label for="inputState">Descripción</label>
                    <textarea class="form-control" placeholder="Escriba una Descripción del Curso" required name="descripcion"></textarea>
                </div>
            </div>


            <div class="form-row">
                <div class="col-sm-4"></div>
                <div class="col-md-4">
                    <hr class="solid" style="border-top: 1px solid rgb(134, 8, 8)">

                    <label for="temario">Temario</label>
                    <input type="file" class="form-control-file" id="temario" lang="es" name="temario" required>
                    <label for="manual">Manual</label>
                    <input type="file" class="form-control-file" id="manual" lang="es" name="manual" required>
                    <label for="examen">Examen</label>
                    <input type="file" class="form-control-file" id="examen" lang="es" name="examen" required>
                    <label for="respuestas">Hojas de Respuestas</label>
                    <input type="file" class="form-control-file" id="respuestas" lang="es" name="hojaRespuestas" required>
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control-file" id="imagen" lang="es" name="imgCurso" required>
                </div>


            </div>



            <br>
            <!-- Button trigger modal -->
            <div class="row justify-content-md-center">
                <button type="submit" class="btn btn-outline-primary">
                    Agregar
                </button>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Curso Agregado</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            El Curso ha sido agregado con éxito
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>

    </div>









    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>