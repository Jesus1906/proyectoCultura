<?php

use App\Controllers\{ConsultaController, RegistrarController};

  $alumno = new RegistrarController();

  if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $alumno->regAlumno($_POST);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="principal.html"><img src="./ImagenescULTURA/logo.jpg" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto lr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="cursos.html">Cursos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="principal.html">Home</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <div class="modal-dialog text-center">
    <h1>Registro Alumno</h1>
  </div>
  <div class="container">

    <form action = "" method = "POST">
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationServer01">Primer Nombre</label>
          <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required name = "firstName">
          <div class="valid-feedback">
            Bien!
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationServer02">Segundo Nombre (Opcional)</label>
          <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required name = "secondName">
          <div class="valid-feedback">
            Bien!
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationServer03">Apellido Paterno</label>
          <input type="text" class="form-control is-valid" id="validationServer03" value="Otto" required name = "firstLastName">
          <div class="valid-feedback">
            Bien!
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationServer04">Apellido Materno</label>
          <input type="text" class="form-control is-valid" id="validationServer04" value="Otto" required name = "secondLastName">
          <div class="valid-feedback">
            Bien!
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationServer05">Correo Electronico</label>
          <input type="text" class="form-control is-valid" id="validationServer05" value="Mark" required name = "email">
          <div class="valid-feedback">
            Bien!
          </div>
        </div>


        <div class="form-group col-md-2">
          <label for="inputPassword4">Contraseña</label>
          <input type="password" class="form-control" id="inputPassword4" name = "password">
        </div>


        <div class="form-group col-md-2">
          <label for="inputPassword4">Confirmar Contraseña</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>

        <div class="col-md-3 mb-3">
          <label for="validationServer06">Telefono</label>
          <input type="text" class="form-control is-valid" id="validationServer06" value="Otto" required name = "phone">
          <div class="valid-feedback">
            Bien!
          </div>
        </div>

      </div>


      <div class="row">
        <label for="inputState"> Fecha de Nacimiento</label>
      </div>
      <div class="form-row">
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Día (DD)" name = "day">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Mes (MM)" name = "month">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Año (AAAA)" name = "year">
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationServer07">Status de Servicio</label>
          <select class="custom-select is-invalid" id="validationServer07" required name = "statusService">
            <option selected disabled value="">Elige...</option>
            <option value = "yes">Si</option>
            <option value = "no">No</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationServer08">Status de Bautizo</label>
          <select class="custom-select is-invalid" id="validationServer08" required name = "statusBautizo">
            <option selected disabled value="">Elige...</option>
            <option value = "yes">Si</option>
            <option value = "no">No</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationServer09">Lider Grupo Familiar</label>
          <select class="custom-select is-invalid" id="validationServer09" required name = "lider">
            <option selected disabled value="">Elige...</option>
            <?php
              $lideres = new ConsultaController();
              $lideres = $lideres->getAllLideres();  
              for($i = 0; $i < count($lideres); $i++) {
                $name = $lideres[$i]['firstName'] . ' ' . $lideres[$i]['secondName'] . " " . $lideres[$i]['firstLastName'] . " " . $lideres[$i]['secondLastName'];
                echo '<option value = ' . $lideres[$i]['id'] . '>' . $name . '</option>';
                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
              }
            ?>
          </select>
          
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationServer10">Estado Civil</label>
          <select class="custom-select is-invalid" id="validationServer10" required name = "statusCivil">
            <option selected disabled value="">Elige...</option>
            <option value = "solter(a)">Soltero(a)</option>
            <option value = "Casado(a)">Casado(a)</option>
            <option value = "Divorciado(a)">Divorciado(a)</option>
            <option value = "Viudo(a)">Viudo(a)</option>
            <option value = "Union Libre">Union Libre</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>

      </div>
     
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col">
          <button class="btn btn-primary" type="submit">Registrar</button>
        </div>
      </div>
    </form>

    <br>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">¡Buen Trabajo!</h4>
      <p>Tu registro esta siendo procesado. Te enviaremos un correo al email proporcionado para terminar tu proceso
        satisfactoriamente</p>
      <hr>
      <p class="mb-0">Sigue las instrucciones cuidadosamente</p>
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