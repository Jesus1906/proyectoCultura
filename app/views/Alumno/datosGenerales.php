<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Perfil</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../../../public/ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">-</a>
                </li>
            </ul>
            <a class="nav-link" href="cursos_alumn.html">Cursos<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="principal_alumno.html">Inicio<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Cerrar Sesión<span class="sr-only">(current)</span></a>
        </div>
    </nav>
    <br><br>
    <div class="modal-dialog text-center">
        <h1>Actualiza tu Perfil</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2 justify-content-center">
                <img src="https://image.freepik.com/vector-gratis/perfil-empresario-dibujos-animados_18591-58479.jpg" alt="foto" width="180" height="180">
                <div class="dropdown">
                    <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Cambiar Constraseña
                    </button>
                    <div class="dropdown-menu">
                        <form class="px-2 py-0" method="POST">
                            <div class="form-group">
                                <label for="oldPassword">Escribe tu antigua contraseña</label>
                                <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <label for="newPassword">Escribe tu nueva contraseña</label>
                                <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="confPassword">Confirma tu nueva contraseña</label>
                                <input type="password" class="form-control" id="confPassword" name="confPassword" required>
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
        <?php echo '<h5>' . $alumno->matriculaAlumno . '</h5>' ?>
    </div>

    <div class="container">
        <form action="" method="POST">
            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="firtsName">Primer Nombre</label>
                    <input class="form-control form-control-lg" type="text" id="firstName" <?php echo 'value = ' . $alumno->firstName; ?> name="firstName">
                </div>
                <div class="col-sm-4">
                    <label for="secondName">Segundo Nombre</label>
                    <input class="form-control form-control-lg" type="text" id="secondName" <?php if ($alumno->secondName) {
                                                                                                echo 'value = ' . $alumno->secondName;
                                                                                            } else {
                                                                                                echo 'value = SinNombre disabled = disabled';
                                                                                            } ?> name="secondName">
                </div>

            </div>
            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="firstLastName">Apellido Paterno</label>
                    <input class="form-control form-control-lg" type="text" id="firstLastName" <?php echo 'value = ' . $alumno->firstLastName; ?> name="firstLastName">
                </div>
                <div class="col-sm-4">
                    <label for="secondsLastName">Apellido Materno</label>
                    <input class="form-control form-control-lg" type="text" id="secondLastName" <?php echo 'value = ' . $alumno->secondLastName; ?> name="secondLastName">
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="correo">Correo Electronico</label>
                    <input class="form-control form-control-lg" type="email" id="correo" <?php echo 'value = ' . $alumno->email; ?> name="email">
                </div>
                <div class="col-sm-4">
                    <label for="phone">Telefono</label>
                    <input class="form-control form-control-lg" type="text" id="phone" <?php echo 'value = ' . $alumno->cellPhone; ?> name="phone">
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="form-group col-sm-4">
                    <label for="inputState">Status Servicio</label>
                    <select class="custom-select" id="validationServer07" required name="statusService">
                        <?php
                        switch ($alumno->serviseStatus) {

                            case 'y': {
                                    echo '<option selected value="y">Si</option>';
                                    echo '<option value="n">No</option>';
                                }
                                break;
                            case 'n': {
                                    echo '<option value="y">Si</option>';
                                    echo '<option selected value="n">No</option>';
                                }
                                break;
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="inputState">Status Bautizo</label>
                    <select class="custom-select" id="validationServer08" required name="statusBautizo">
                        <?php
                        switch ($alumno->statusBautizo) {

                            case 'y': {
                                    echo '<option selected value="y">Si</option>';
                                    echo '<option value="n">No</option>';
                                }
                                break;
                            case 'n': {
                                    echo '<option value="y">Si</option>';
                                    echo '<option selected value="n">No</option>';
                                }
                                break;
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="form-group col-sm-4">
                    <label for="inputState">Grupo Familiar</label>
                    <select class="custom-select" id="validationServer09" required name="lider">

                        <?php
                        for ($i = 0; $i < count($lideres); $i++) {
                            if ($alumno->Lider_Celula_id == $lideres[$i]['Lider_Celula_id']) {
                                $name = $lideres[$i]['firstName'] . ' ' . $lideres[$i]['secondName'] . " " . $lideres[$i]['firstLastName'] . " " . $lideres[$i]['secondLastName'];
                                echo '<option selected value = ' . $lideres[$i]['id'] . '>' . $name . '</option>';
                            } else {
                                $name = $lideres[$i]['firstName'] . ' ' . $lideres[$i]['secondName'] . " " . $lideres[$i]['firstLastName'] . " " . $lideres[$i]['secondLastName'];
                                echo '<option value = ' . $lideres[$i]['id'] . '>' . $name . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="inputState">Estado Civil</label>
                    <select class="custom-select" id="validationServer10" required name="statusCivil">
                        <?php
                        echo '<option selected value= ' . $alumno->maritalStatus . '>' . $alumno->maritalStatus . '</option>';
                        ?>
                        <option value="solter(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                        <option value="Union Libre">Union Libre</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label for="birthday"> Fecha de Nacimiento</label>
                    <input type="date" id="birthday" name="birthday" <?php echo 'value = ' . $alumno->birthday . ""; ?>>
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









    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>