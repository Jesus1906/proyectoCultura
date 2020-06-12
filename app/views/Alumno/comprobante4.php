<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/d350efeb91.js" crossorigin="anonymous"></script>


    <title>Comprobante</title>
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
            <a class="nav-link" href="<?php echo RUTA_URL ?>alm/cursos">Curso Inscrito<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL ?>alm">Inicio<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL ?>logout">Cerrar Sesión<span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="col-sm-9">
        <div class="imprimir">
            <div class="modal-dialog" id="registroExitoso">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title text-center">Registro Exitoso</h1>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <p class="lead"> <em>¡Felicidades!</em> Su registro se completo con exito
                            </p>
                        </div>
                    </div>
                    <hr class="my-6">
                    <div class="text-center">
                        <p>Presentate el día <strong>"FECHA INICIO"</strong> en el horario
                            <strong>"TURNO"</strong> para comenzar con su discipulado
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row justify-content-center">
        <div class="col-sm-3">
            <button type="submit" class="btn btn-outline-secondary" id="btnImprimir"><i class="fas fa-print"></i> Imprimir</button>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../public/js/printThis.js"></script>
    <script>

    </script>
</body>

</html>