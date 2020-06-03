<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?Php echo RUTA_URL ?>"><img src="<?php echo RUTA_SERVER ?>/ImagenescULTURA/logo.jpg" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto lr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="cursos">Cursos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTA_URL ?>">Home</a>
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
        <form action="" method="POST">
            <hr class="solid" style="border-top: 3px solid rgb(134, 8, 8)">
            <div class="modal-dialog text-center">
                <h3>Datos Personales</h3>
            </div>
            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="validationServer01">Primer Nombre</label>
                    <input type="text" class="form-control" id="validationServer01" required name="firstName">
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                </div>
                <div class="invalid-feedback">More example invalid feedback text</div>
                <div class="valid-feedback">ok</div>
                <div class="col-sm-4">
                    <label for="validationServer02">Segundo Nombre (Opcional)</label>
                    <input type="text" class="form-control" id="validationServer02" name="secondName">
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="validationServer03">Apellido Paterno</label>
                    <input type="text" class="form-control " id="validationServer03" required name="firstLastName">
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                </div>
                <div class="col-sm-4">
                    <label for="validationServer04">Apellido Materno</label>
                    <input type="text" class="form-control " id="validationServer04" required name="secondLastName">
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <label for="birthday"> Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="birthday" id="birthday" required>
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                </div>
                <div class="col-sm-4">
                    <label for="validationServer10">Estado Civil</label>
                    <select class="custom-select" id="validationServer10" required name="statusCivil">
                        <option selected disabled value="">Elige...</option>
                        <option value="solter(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                        <option value="Union Libre">Union Libre</option>
                    </select>
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                </div>
            </div>


            <hr class="solid" style="border-top: 2px solid rgb(134, 8, 8)">


            <div class="form-row">


                <div class="col-sm-5">
                    <div class="modal-dialog text-center">
                        <h3>Datos Iglesia</h3>
                    </div>
                    <label for="validationServer07">Status de Servicio</label>
                    <select class="custom-select" id="validationServer07" required name="statusService">
                        <option selected disabled value="">Elige...</option>
                        <option value="yes">Si</option>
                        <option value="no">No</option>
                    </select>
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                    <label for="validationServer08">Status de Bautizo</label>
                    <select class="custom-select" id="validationServer08" required name="statusBautizo">
                        <option selected disabled value="">Elige...</option>
                        <option value="yes">Si</option>
                        <option value="no">No</option>
                    </select>
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                    <label for="validationServer09">Lider Grupo Familiar</label>
                    <select class="custom-select" id="validationServer09" required name="lider">
                        <option selected disabled value="">Elige...</option>
                        <?php
                        for ($i = 0; $i < count($lideres); $i++) {
                            $name = $lideres[$i]['firstName'] . ' ' . $lideres[$i]['secondName'] . " " . $lideres[$i]['firstLastName'] . " " . $lideres[$i]['secondLastName'];
                            echo '<option value = ' . $lideres[$i]['id'] . '>' . $name . '</option>';
                            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        }
                        ?>
                    </select>
                    <div class="invalid-feedback">Llena el campo</div>
                    <div class="valid-feedback">Ok!</div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <div class="modal-dialog text-center">
                        <h3>Datos de Contacto</h3>
                    </div>
                    <div class="justify-content-center">
                        <label for="validationServer06">Telefono</label>
                        <input type="tel" class="form-control" id="validationServer06" placeholder="55-12-34-56-78"
                        data-toggle="tooltip" data-placement="left" title="Inserta tu número en el siguiente formato: 55-11-22-33-44"
                        pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required name="phone">
                        <div class="invalid-feedback">Llena el campo</div>
                        <div class="valid-feedback">Ok!</div>
                        <label for="validationServer05">Correo Electronico</label>
                        <input type="email" class="form-control" id="validationServer05" placeholder="micorreo@ejemplo.com" required name="email">
                        <div class="invalid-feedback">Llena el campo</div>
                        <div class="valid-feedback">Ok!</div>
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required minlength="8" maxlength="20">
                        <div class="invalid-feedback">Debe contener mínimo 8 carácteres</div>
                        <div class="valid-feedback">Ok!</div>
                        <label for="password1">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="password1" name="password1" required>

                        <div class="invalid-feedback">Las contraseñas no Coinciden</div>
                        <div class="valid-feedback">Ok!</div>
                    </div>

                </div>
            </div>

            <br>
            <div class="form-row">
                <div class="col-sm-5"></div>
                <div class="col-sm-3">

                    <button type="submit" class="btn btn-success" data-toggle="modal">
                        Registrarme
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¡Buen Trabajo!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Tu registro esta siendo procesado. Te enviaremos un correo al email
                                    proporcionado para terminar tu proceso
                                    satisfactoriamente
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-success" href="#" role="button">Aceptar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </form>
    </div>

















    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
