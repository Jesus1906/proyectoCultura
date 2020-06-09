<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripciones</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
          <a class="nav-link" href="#">-</a>
        </li>
      </ul>
      <a class="nav-link" href="#">Cursos <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="../principal.html">Cerrar Sesion <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="principal_alumno.html">Home <span class="sr-only">(current)</span></a>
    </div>
  </nav>

  <div class="modal-dialog text-center">
    <h1>Inscripciones</h1>
  </div>
  <div class="container text-cente">
    <h2>El curso que te corresponde es: </h2>

    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-5">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo RUTA_SERVER . 'public/Uploads/cursos/img/' . $curso->photo ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $curso->name; ?></h5>
          </div>
          <ul class="list-group list-group-flush">

            <li class="list-group-item"><?php if (count($ofertaMatutin) > 0) {
                                          if (!$completoCursos) {
                                            echo 'Horario de 13:00-14:00 hrs Todos los domingos';
                                          }
                                        } else {
                                          echo '<strong>Aviso:</strong> El curso que te toca no se ha abierto en el turno Matutino, revisa el siguiente turno o regresa el siguiente periodo';
                                        } ?></li>

            <li class="list-group-item"><?php if (count($ofertaMatutin) > 0) {
                                          echo 'Profesor: ' . $profesor;
                                        } else {
                                          echo 'Sin profesor';
                                        } ?></li>

            <li class="list-group-item"><?php if (count($ofertaMatutin) > 0) {
                                          echo 'Adjunto: ' . $adjunto;
                                        } else {
                                          echo 'Sin Adjunto';
                                        } ?></li>

          </ul>
          <!-- Button trigger modal -->
          <form action="" method="POST">
            <input type="text" name="idOfertaM" value="<?php if (count($ofertaMatutin) > 0) {
                                                        echo $ofertaMatutina->idOferta_Cursos;
                                                      } ?>" hidden>

            <input type="text" name="idAlumno" value="<?php if (count($ofertaMatutin) > 0) {
                                                        echo $_SESSION['matricula'];
                                                      } ?>" hidden>
            <input type="text" name="idOfertaV" value="<?php if (count($ofertaVespertin) > 0) {
                                                        echo $ofertaVespertina->idOferta_Cursos;
                                                      } ?>" hidden>
            
            <input type="text" name="turno" value="M" hidden>
            <button type="submit" class="btn btn-outline-warning" <?php if ($completoCursos || count($ofertaMatutin) == 0) {
                                            echo 'disabled';
                                          }?>>
              ¡Inscribete!
            </button>
          </form>

          <!-- Modal -->
          <div class="modal fade" id="cursoMañana" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title" id="staticBackdropLabel">Comprobante</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="lead"> Usted se ha inscrito a la materia "NOMBRE DE CURSO"
                    con el profesor "NOMBRE DE PROFESOR" y adjunto "NOMBRE DE ADJUNTO"
                    en el horario "TURNO"
                  </p>
                  <hr class="my-4">
                  <div class="text-center">
                    <p>Acude al modulo de "Cultura Filadelfia" para realizar tu pago de <strong>$100</strong> y concluir
                      tu
                      inscripcion
                    </p>
                    <p>
                      O has un deposito a No. Cuenta 0160510696 <br>
                      Clabe Interbancaria 012180001605106960 <br>
                      BBVA
                    </p>

                  </div>
                </div>
                <div class="modal-footer">

                  <button type="button" class="btn btn-primary">Imprimir Comprobante</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo RUTA_SERVER . 'public/Uploads/cursos/img/' . $curso->photo ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $curso->name; ?></h5>
          </div>
          <ul class="list-group list-group-flush">

            <li class="list-group-item"><?php if (count($ofertaVespertin) > 0) {
                                          if (!$completoCursos) {
                                            echo 'Horario de 13:00-14:00 hrs Todos los domingos';
                                          }
                                        } else {
                                          echo '<strong>Aviso:</strong> El curso que te toca no se ha abierto en el turno Vespertino, revisa el siguiente turno o regresa el siguiente periodo';
                                        } ?></li>

            <li class="list-group-item"><?php if (count($ofertaVespertin) > 0) {
                                          echo 'Profesor: ' . $profesor1;
                                        } else {
                                          echo 'Sin profesor';
                                        } ?></li>

            <li class="list-group-item"><?php if (count($ofertaVespertin) > 0) {
                                          echo 'Adjunto: ' . $adjunto1;
                                        } else {
                                          echo 'Sin Adjunto';
                                        } ?></li>

          </ul>
          <!-- Button trigger modal -->
          <form action="" method="POST">
            <input type="text" name="idOfertaV" value="<?php if (count($ofertaVespertin) > 0) {
                                                        echo $ofertaVespertina->idOferta_Cursos;
                                                      } ?>" hidden>

            <input type="text" name="idAlumno" value="<?php if (count($ofertaVespertin) > 0) {
                                                        echo $_SESSION['matricula'];
                                                      } ?>" hidden>

            <input type="text" name="idOfertaM" value="<?php if (count($ofertaMatutin) > 0) {
                                                        echo $ofertaMatutina->idOferta_Cursos;
                                                      } ?>" hidden>    
                                                      
            <input type="text" name="turno" value="V" hidden>                                                      
            <button type="submit" class="btn btn-outline-warning" <?php if ($completoCursos || count($ofertaVespertin) == 0) {
                                            echo 'disabled';
                                          }?> >
              ¡Inscribete!
            </button>
          </form>

          <!-- Modal -->
          <div class="modal fade" id="cursoTarde" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title" id="staticBackdropLabel">Comprobante</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="lead"> Usted se ha inscrito a la materia "NOMBRE DE CURSO"
                    con el profesor "NOMBRE DE PROFESOR" y adjunto "NOMBRE DE ADJUNTO"
                    en el horario "TURNO"
                  </p>
                  <hr class="my-4">
                  <div class="text-center">
                    <p>Acude al modulo de "Cultura Filadelfia" para realizar tu pago de <strong>$100</strong> y concluir
                      tu
                      inscripcion
                    </p>
                    <p>
                      O has un deposito a No. Cuenta 0160510696 <br>
                      Clabe Interbancaria 012180001605106960 <br>
                      BBVA
                    </p>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Imprimir Comprobante</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>