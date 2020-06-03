<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Perfil</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../../../public/ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

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
            <a class="nav-link" href="principal_alumno.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Cerrar Sesión <span class="sr-only">(current)</span></a>
        </div>
    </nav>
    <br><br><br>
    <div class="modal-dialog text-center">
        <h1>Actualiza tu Perfil</h1>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-2 justify-content-center">
            <img src="https://image.freepik.com/vector-gratis/perfil-empresario-dibujos-animados_18591-58479.jpg"
                alt="foto" width="180" height="180">
            <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cambiar Constraseña
                </button>
                <div class="dropdown-menu">
                    <form>
                        <div class="form-group">
                            <label for="oldPassword">Escribe tu antigua contraseña</label>
                            <input type="password" class="form-control" id="oldPassword" name="" required>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="form-group">
                            <label for="newPassword">Escribe tu nueva contraseña</label>
                            <input type="password" class="form-control" id="newPassword" name="" required>
                        </div>
                        <div class="form-group">
                            <label for="confPassword">Confirma tu nueva contraseña</label>
                            <input type="password" class="form-control" id="confPassword" name="" required>
                        </div>
                        <button type="submit" class="btn btn-outline-success">Cambiar Constraseña</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal-dialog text-center">
        <h4>No de Cuenta</h4>
        <?php echo '<h5>'. $admin->matriculaAdministrador . '</h5>' ?>
        
    </div>
   
    <div class="container">
        <form action="" method="POST">
            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="firtsName">Primer Nombre</label>
                    <input class="form-control form-control-lg" type="text" name="firstName" id="firstName" <?php echo 'value = ' . $admin->firstname . ""; ?>>
                </div>
                <div class="col-sm-4">
                    <label for="secondName">Segundo Nombre</label>
                    <input class="form-control form-control-lg" type="text" id="secondName" <?php echo 'value = ' . $admin->secondName . ""; ?> name="secondName">
                </div>

            </div>
            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="firtsLastName">Apellido Paterno</label>
                    <input class="form-control form-control-lg" type="text" id="firstLastName" placeholder="López" <?php echo 'value = ' . $admin->firstLastName . ""; ?>
                        name="firstLastName">
                </div>
                <div class="col-sm-4">
                    <label for="secondsLastName">Apellido Materno</label>
                    <input class="form-control form-control-lg" type="text" id="secondLastName" placeholder="Gómez" <?php echo 'value = ' . $admin->secondLastName . ""; ?>
                        name="secondLastName">
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="correo">Correo Electronico</label>
                    <input class="form-control form-control-lg" type="email" id="correo"
                    <?php echo 'value = ' . $admin->email . ""; ?> name="email">
                </div>
                <div class="col-sm-4">
                    <label for="phone">Telefono</label>
                    <input class="form-control form-control-lg" type="text" name="phone" id="phone" <?php echo 'value = ' . $admin->phone . ""; ?>>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col">
                    <button class="btn btn-primary" type="submit">Actualizar Datos</button>
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