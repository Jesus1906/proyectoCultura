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

        <div class="row">
            <label for="inputState">Primer Nombre</label>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Nombre" name = "firstName">
            </div>
        </div>
        <div class="row">
            <label for="inputState"> Segundo Nombre</label>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Nombre" name = "secondName">
            </div>
        </div>
        <div class="row">
            <label for="inputState"> Apellido Paterno</label>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Apellido Paterno" name="firstLastName">
            </div>
        </div>
        <div class="row">
            <label for="inputState"> Apellido Materno</label>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Apellido Materno" name = "secondLastName">
            </div>
        </div>
        <div class="row">
            <label for="inputState">Telefono</label>
        </div>
        <div class="form-row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Telefono" name = "phone">
            </div>
        </div>
        <br>

        <div class="row justify-content-md-center">
            <button type="button" class="btn btn-primary">Agregar</button>
        </div>



    </div>

    <div class="jumbotron modal-dialog text-center">
        <h1 class="display-4">Líder Agregado</h1>

        <hr class="my-4">
        <p>El Líder ha sido agregado con éxito</p>
        <a class="btn btn-success btn-lg" href="#" role="button">Aceptar</a>
    </div>

    </div>