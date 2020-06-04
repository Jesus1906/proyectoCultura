
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Consulta Alumnos</title>
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
          <a class="nav-link" href="#">-</a>
        </li>
      </ul>
      <a class="nav-link" href="#">Cursos <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="Clasi_adm.html">Home <span class="sr-only">(current)</span></a>
    </div>
  </nav>

  <div class="modal-dialog text-center">
    <h2>Consulta de Alumnos</h2>
  </div>

  <div class="container">
    <form class="" action="" method="POST">

      <div class="form-row justify-content-center">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Busqueda" aria-label="Search" name="parametro" id="BusquedaCampo">
      </div>
      <br>
      <div class="form-row">

        <div class=" col-sm-4">
          <select id="inputState" class="custom-select" name="filtro">
            <option selected value="all">Todos los Alumnos</option>
            <option value="matricula">Matricula</option>
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
          <h3>Alumnos</h3>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered" id="listas">
          <thead class="thead-light">
            <tr>
              <th scope="col">No. Cuenta</th>
              <th scope="col">Nombre(s)</th>
              <th scope="col">Ap Paterno</th>
              <th scope="col">Ap Materno</th>
              <th scope="col">Email</th>
              <th scope="col">Lider Grupo Familiar</th>
              <th scope="col">Telefono </th>
              <th scope="col">Oficio </th>
              <th scope="col">Fecha de Nacimiento </th>

            </tr>
          </thead>
          <tbody id="datosTabla">
            <?php
            if ($request->getMethod() || $filtro != "matricula") {

              foreach ($alumnos as $alumno) {
                echo '<tr>';
                echo '<th scope="row">' . $alumno['matriculaAlumno'] . '</th>';
                echo '<td>' . $alumno['firstName'] . ' ' . $alumno['secondName'] . '</td>';
                echo '<td>' . $alumno['firstLastName'] . '</td>';
                echo '<td>' . $alumno['secondLastName'] . '</td>';
                echo '<td>' . $alumno['email'] . '</td>';
                echo '<td>' . $alumno['Lider_Celula_id'] . '</td>';
                echo '<td>' . $alumno['cellPhone'] . '</td>';
                echo '<td>' . $alumno['serviseStatus'] . '</td>';
                echo '<td>' . $alumno['birthday'] . '</td>';
                echo '</tr>';
              }
            } else if ($filtro == "matricula") {
              echo '<tr>';
              echo '<th scope="row">' . $alumnos['matriculaAlumno'] . '</th>';
              echo '<td>' . $alumnos['firstName'] . ' ' . $alumnos['secondName'] . '</td>';
              echo '<td>' . $alumnos['firstLastName'] . '</td>';
              echo '<td>' . $alumnos['secondLastName'] . '</td>';
              echo '<td>' . $alumnos['email'] . '</td>';
              echo '<td>' . $alumnos['Lider_Celula_id'] . '</td>';
              echo '<td>' . $alumnos['cellPhone'] . '</td>';
              echo '<td>' . $alumnos['serviseStatus'] . '</td>';
              echo '<td>' . $alumnos['birthday'] . '</td>';
              echo '</option> </tr>';
            }
            ?>
          </tbody>
          </table>
        </div>

      </div>



    </div>

    <div class="row">
      <div class="col-sm-5"></div>
      <div class="col">
        <button type="button" class="btn btn-secondary"  onclick="tabletoPDF()">Imprimir</button>
        <button type="submit" class="btn btn-primary">Editar Datos</button>
      </div>
    </div>

  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script>
        function tabletoPDF(){
            var printMe = document.getElementById('listas');
            var wme = window.open("","","width:700, heigth:900");
            wme.document.write(printMe.outerHTML);
            wme.document.close();
            wme.focus();
            wme.print();
            wme.close();

        }
  </script>
  <script src="<?php echo RUTA_SERVER ?>/js/alumnos_consulta.js"></script>
</body>

</html>
