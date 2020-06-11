<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d350efeb91.js" crossorigin="anonymous"></script>

  <title>Consulta Lideres</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo RUTA_URL ?>"><img src="../../ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

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
    <h2>Consulta de Líderes</h2>
  </div>

  <div class="container">
    <form class="" action="" method="POST">
      <div class="form-row">
        <div class="col-sm-4"></div>
        <div class=" col-sm-4 text-center">
          <label for="filtro" style="font-size:20px">Filtra por:</label>
          <select id="inputState" class="custom-select" name="filtro">
            <option value="name">Nombre(s)</option>
            <option value="apellido">Apellido(s)</option>
          </select>
        </div>
      </div>
      <br>
      <div class="form-row justify-content-center">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Busqueda" aria-label="Search" name="parametro" id="BusquedaCampo">
      </div>
      <br>


    </form>

    <div class="row">

      <div class="col-sm-12">
        <div class="imprimir">
          <div class="modal-dialog text-center">
            <h3>Líderes</h3>
          </div>
          <div class="table-responsive-sm">
            <table class="table" id="miTabla">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Nombre(s)</th>
                  <th scope="col">Ap Paterno</th>
                  <th scope="col">Ap Materno</th>
                  <th scope="col">Telefono </th>
                  <th scope="col">Editar</th>
                </tr>
              </thead>
              <tbody id="datosTabla">

              </tbody>
            </table>
          </div>
        </div>


      </div>



    </div>

    <!--Modal para EDITAR-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Líder</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="formUsuarios">
            <div class="modal-body" id="modal-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="" class="col-form-label">Primer Nombre</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="" class="col-form-label">Segundo Nombre</label>
                    <input type="text" class="form-control" id="secondName" name="secondName">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="" class="col-form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="firstLastName" name="firstLastName">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="" class="col-form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="secondLastName" name="secondLastName">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-9">
                  <div class="form-group">
                    <label for="" class="col-form-label">Telefono</label>
                    <input type="tel" class="form-control" id="phone" name="phone" data-toggle="tooltip" data-placement="left" title="Inserta tu número en el siguiente formato: 55-11-22-33-44" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
              <button type="submit" id="btnGuardar" class="btn btn-outline-success">Guardar</button>
            </div>
          </form>
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

  <script src="<?php echo RUTA_SERVER ?>/js/lider_consulta.js"></script>
  <script src="<?php echo RUTA_SERVER ?>/js/printThis.js"></script>
</body>

</html>