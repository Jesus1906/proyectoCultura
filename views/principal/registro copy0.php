<?php
  require_once '../../vendor/autoload.php';

use App\Controllers\{ValidatorController};

   $val = new ValidatorController();
   $pass1 = "  1";
   $pass2 = "  1";

   $valido = $val->validarPassIgual($pass1, $pass2);
  var_dump($valido);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

  <br>
  <br>
  <div class="modal-dialog text-center">
    <h1>Registro Alumno</h1>
  </div>
  <div class="container">
        <form action="" method="POST">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="datos" role="tabpanel">
                    <div class="modal-dialog text-center">
                        <h3>Datos Personales</h3>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <label for="validationServer01">Primer Nombre</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark"
                                required name="firstName">
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="validationServer02">Segundo Nombre (Opcional)</label>
                            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto"
                                required name="secondName">
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <label for="validationServer03">Apellido Paterno</label>
                            <input type="text" class="form-control is-valid" id="validationServer03" value="Otto"
                                required name="firstLastName">
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="validationServer04">Apellido Materno</label>
                            <input type="text" class="form-control is-valid" id="validationServer04" value="Otto"
                                required name="secondLastName">
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <div class="row">
                                <label for="inputState"> Fecha de Nacimiento</label>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Día (DD)" name="day">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Mes (MM)" name="month">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Año (AAAA)" name="year">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="validationServer10">Estado Civil</label>
                            <select class="custom-select is-invalid" id="validationServer10" required
                                name="statusCivil">
                                <option selected disabled value="">Elige...</option>
                                <option value="solter(a)">Soltero(a)</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Viudo(a)">Viudo(a)</option>
                                <option value="Union Libre">Union Libre</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-3">
                            <a class="btn btn-primary" id="iglesia-tab" data-toggle="tab" href="#iglesia" role="tab"
                                aria-selected="false">Siguiente</a>
                        </div>
                    </div>

                </div>


                <div class="tab-pane fade" id="iglesia" role="tabpanel">
                    <div class="modal-dialog text-center">
                        <h3>Datos Iglesia</h3>
                    </div>

                    <div class="form-row">

                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <label for="validationServer07">Status de Servicio</label>
                            <select class="custom-select is-invalid" id="validationServer07" required
                                name="statusService">
                                <option selected disabled value="">Elige...</option>
                                <option value="yes">Si</option>
                                <option value="no">No</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <label for="validationServer08">Status de Bautizo</label>
                            <select class="custom-select is-invalid" id="validationServer08" required
                                name="statusBautizo">
                                <option selected disabled value="">Elige...</option>
                                <option value="yes">Si</option>
                                <option value="no">No</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <label for="validationServer09">Lider Grupo Familiar</label>
                            <select class="custom-select is-invalid" id="validationServer09" required name="lider">
                                <option selected disabled value="">Elige...</option>
                                <?php
                                      $lideres = new ConsultaController();
                                      $lideres = $lideres->getAllLideres();
                                      for($i = 0; $i < count($lideres); $i++) {
                                        $name = $lideres[$i]['firstName'] . ' ' . $lideres[$i]['secondName'] . " " . $lideres[$i]['firstLastName'] . " " . $lideres[$i]['secondLastName'];
                                        echo '<option value = ' . $lideres[$i]['id'] . '>' . $name . '</option>';
                                        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                      }
                                    ?>
                            </select>

                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-3">
                            <a class="btn btn-primary" id="iglesia-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-selected="false">Siguiente</a>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel">
                    <div class="modal-dialog text-center">
                        <h3>Datos de Contacto</h3>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <label for="validationServer06">Telefono</label>
                            <input type="text" class="form-control is-valid" id="validationServer06" value="Otto"
                                required name="phone">
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <label for="validationServer05">Correo Electronico</label>
                            <input type="text" class="form-control is-valid" id="validationServer05" value="Mark"
                                required name="email">
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <label for="inputPassword4">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <label for="inputPassword4">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Registrarme
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
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
                                            <a class="btn btn-success" href="principal.html" role="button">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
