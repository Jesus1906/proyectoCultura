<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/d350efeb91.js" crossorigin="anonymous"></script>
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
        </li>
      </ul>
      <a class="nav-link" href="<?php echo RUTA_URL ?>adm">Inicio <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="<?php echo RUTA_URL . "logout" ?>">Cerrar Sesion <span class="sr-only">(current)</span></a>
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
            <option selected value="matricula">Matricula</option>
            <option value="name">Nombre(s)</option>
            <option value="apellido">Apellido(s)</option>
          </select>
        </div>
      </div>

    </form>

    <div class="row">
      <div class="col-sm-12">
        <div class="imprimir">
          <div class="modal-dialog text-center">
            <h3>Administradores</h3>
          </div>
          <div class="table-responsive">
            <table class="table" id="miTabla">
              <thead class="thead-dark">
                <tr>
                  <th>
                  <th scope="col">Nombres</th>
                  <th scope="col">Ap Paterno</th>
                  <th scope="col">Ap Materno</th>
                  <th scope="col">Telefono </th>
                  <th scope="col">Email </th>
                </tr>
              </thead>
              <tbody id = "datosTabla">
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>


    <div class="row justify-content-center">
      <div class="col-sm-3">
        <button type="submit" class="btn btn-outline-secondary" id="btnImprimir"><i class="fas fa-print"></i> Imprimir</button>
      </div>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="<?php echo RUTA_SERVER ?>/js/printThis.js"></script>
  <script src="<?php echo RUTA_SERVER ?>/js/adm_consulta.js"></script>

</body>

</html>
