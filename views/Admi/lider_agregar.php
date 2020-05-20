<?php
  require_once '../../vendor/autoload.php';
  use App\Controllers\RegistrarController;

  $regController = new RegistrarController();

  if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $regController->regLider($_POST);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Agregar Adjunto</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
            <a class="nav-link" href="cursos_alumn.html">Cursos <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="Clasi_adm.html">Home <span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="modal-dialog text-center">
        <h1>Agregar un Líder</h1>
    </div>



    <div class="container">
        <form>

            <div class="form-row">
                <div class="col-sm-6">
                    <label for="inputState">Primer Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" required name="firstName">
                </div>
                <div class="col-sm-6">
                    <label for="inputState">Segundo Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" required name="secondName">
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-6">
                    <label for="inputState"> Apellido Paterno</label>
                    <input type="text" class="form-control" placeholder="Apellido Paterno" required
                        name="firstLastName">
                </div>
                <div class="col-sm-6">
                    <label for="inputState"> Apellido Materno</label>
                    <input type="text" class="form-control" placeholder="Apellido Materno" required
                        name="secondLastName">
                </div>
            </div>


            <div class="form-row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <label for="inputState">Telefono</label>
                    <input type="text" class="form-control" placeholder="Telefono" required name="phone">
                </div>
                
            </div>

<br>
            <!-- Button trigger modal -->
            <div class="row justify-content-md-center">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Agregar
                </button>
            </div>
            

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Líder Agregado</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            El Líder ha sido agregado con éxito
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