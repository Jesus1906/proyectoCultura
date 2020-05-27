<?php
require_once '../../vendor/autoload.php';

use App\Controllers\{ConsultaController};

$administradores = new ConsultaController();
$filtro = "none";
if ($_SERVER["REQUEST_METHOD"] == 'GET') {
  $administradores = $administradores->getAllAdmin();
} else {
  $filtro = $_POST['filtro'];
  $administradores = $administradores->getAdministrador($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Consulta Administradores</title>
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
    <h2>Consulta de Administradores</h2>
  </div>

  <div class="container">
    <form class="" action="" method="POST">

      <div class="form-row justify-content-center">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Busqueda" aria-label="Search" name="parametro">
      </div>
      <br>
      <div class="form-row">

        <div class=" col-sm-4">
          <select id="inputState" class="custom-select" name="filtro">
            <option selected value="all">Todos los Administradores</option>
            <option value="name">Nombre(s)</option>
            <option value="apellido">Apellido(s)</option>
          </select>
        </div>
        <div class="col-sm-4">
          <button type="submit" class="btn btn-outline-success">Aplicar Filtros</button>
        </div>
      </div>

    </form>

    <div class="row">

      <div class="col-sm-12">
        <div class="modal-dialog text-center">
          <h3>Administradores</h3>
        </div>

        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">Nombres</th>
              <th scope="col">Ap Paterno</th>
              <th scope="col">Ap Materno</th>
              <th scope="col">Telefono </th>
              <th scope="col">Email </th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == 'GET' || $filtro != "matricula") {

              foreach ($administradores as $administrador) {
                echo '<tr>';
                echo '<th scope="row">' . $administrador['firstname'] . ' ' . $administrador['secondName'] . '</th>';
                echo '<td>' . $administrador['firstLastName'] . '</td>';
                echo '<td>' . $administrador['secondLastName'] . '</td>';
                echo '<td>' . $administrador['phone'] . '</td>';
                echo '<td>' . $administrador['email'] . '</td>';
                echo '</tr>';
              }
            }
            ?>
          </tbody>
        </table>
      </div>



    </div>

    <div class="row">
      <div class="col-sm-5"></div>
      <div class="col">
        <button type="submit" class="btn btn-secondary">Imprimir</button>
        <button type="submit" class="btn btn-primary">Editar Datos</button>
      </div>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>