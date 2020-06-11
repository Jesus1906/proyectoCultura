<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registro de Pagos</title>

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
            <a class="nav-link" href="#">Cursos <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL ?>adm">Home <span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="text-center">
        <h1>Pagos de Alumnos</h1>
    </div>

    <div class="container">
      <form class="" action="" method="POST">
         <div class="form-row">
           <div class="col-sm-4"></div>
           <div class=" col-sm-4 text-center">
             <label for="filtro" style="font-size:20px">Filtra por:</label>
             <select id="inputState" class="custom-select" name="filtro">
               <option value="matricula">Matricula</option>
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
            <div class="col-sm-2"></div>

            <div class="table-responsive-sm">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No.Cuenta</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Pago</th>
                      </tr>
                    </thead>
                    <tbody id = "datosTabla" >

                    </tbody>
                  </table>
            </div>
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

        <script src="<?php echo RUTA_SERVER ?>/js/pagos.js"></script>
</body>

</html>
