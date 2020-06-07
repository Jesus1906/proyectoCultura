<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Definir Periodo</title>
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
        <h1>Definir Perido</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form method="post">

                    <div class="col">
                        <div class="row">
                            <label for="inputState">Fecha de Inscripción</label>
                        </div>
                        <div class="form-row">
                            <div class="col ">
                                <input type="date" class="form-control" required name="inscripcion" value = "<?php if($periodo){
                                    echo $periodo->inscripcion;
                                }else{
                                    echo '1950-01-01';
                                } ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputState">Fecha de Inicio</label>
                        </div>
                        <div class="form-row">
                            <div class="col ">
                                <input type="date" class="form-control" required name="inicio" value = "<?php if($periodo){
                                    echo $periodo->inicio;
                                }else{
                                    echo '1950-01-01';
                                } ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputState">Fecha de Termino</label>
                        </div>
                        <div class="form-row">
                            <div class="col ">
                                <input type="date" class="form-control" required name="fin" value = "<?php if($periodo){
                                    echo $periodo->fin;
                                }else{
                                    echo '1950-01-01';
                                } ?>">
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputState">Periodo</label>
                        </div>
                        <div class="form-row">
                            <div class="col ">
                                <input type="text" class="form-control" required name="periodo" value = "<?php if($periodo){
                                    echo $periodo->periodo;
                                }else{
                                    echo '2010-1';
                                } ?>">
                            </div>
                        </div>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Guardar Periodo</button>
                </form>
            </div>



        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>