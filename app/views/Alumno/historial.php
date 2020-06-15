<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Historial</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="<?php echo RUTA_SERVER ?>/ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                </li>
            </ul>
            <a class="nav-link" href="<?php echo RUTA_URL ?>alm">Inicio<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL ?>logout">Cerrar Sesión<span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="modal-dialog text-center">
        <h1>Historial Academico</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-5">
                <p class="text-left">Numero de Cuenta: <?php echo $_SESSION['matricula']; ?></p>
                <p class="text-left">Nombre: <?php echo $alumno; ?></p>

            </div>
            <div class="col-4">
                
            </div>
            <div class="col-3">
                
                
            </div>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nivel</th>
                    <th scope="col">Subnivel</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Calificación</th>
                    <th scope="col">Periodo</th>
                </tr>

            </thead>
            <tbody>

                <?php

                if ($bandera) {
                    foreach ($historial as $materia) {
                        echo '<tr>';
                        echo '  <th scope="row">' . $materia->nivel . '</th>';
                        echo '  <td>' . $materia->subnivel . '</td>';
                        echo '  <td>' . $materia->name . '</td>';
                        echo '  <td>' . $materia->calificacion . '</td>';
                        echo '  <td>' . $materia->periodo . '</td>';
                        echo '</tr>';
                    }
                }else{
                    echo '<tr>';
                        echo '  <th scope="row"> Aún </th>';
                        echo '  <td> no </td>';
                        echo '  <td> tienes </td>';
                        echo '  <td> hiatorial </td>';
                        echo '  <td> academico </td>';
                        echo '</tr>';
                }

                ?>

        </table>
    </div>











    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>