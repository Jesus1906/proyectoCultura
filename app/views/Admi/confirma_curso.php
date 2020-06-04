<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Confirmar Curso</title>
</head>

<body>
    <div class="modal-dialog text-center">
        <h1>Confirma Curso</h1>
    </div>

    <div class="container">
        <form action="" method="POST">
            <?php
            $indice = 0;
            foreach ($cursos as $curso) {

                echo '            <div class="form-row">';
                echo '                <div class="col-sm-3"></div>';
                echo '                <div class="col-sm-4">';
                echo '                    <label for="inputState">Nombre del curso</label>';
                echo '                    <input type="text" disabled="disabled" class="form-control" placeholder=' . $curso->name . '  name="name">';
                echo '                </div>';
                echo '                <div class="col-sm-2">';
                echo '                    <label for="inputState">Nivel del Curso</label>';
                echo '                    <input type="text" disabled="disabled" class="form-control" placeholder=' . $curso->nivel . '  name="nivel">';
                echo '                </div>';
                echo '                 <div class="col-sm-3"></div>';
                echo '            </div>';

                echo '            <div class="form-row">';
                echo '                <div class="col-sm-3"></div>';
                echo '                <div class="col-sm-3">';
                echo '                    <label for="curanterior">Curso Anterior</label>';
                echo '                    <select class="custom-select" id="curanterior"  name="cursoAnterior'. $indice .'">';
                if ($curso->cursoAnterior != null) {
                    foreach ($cursos as $curs) {
                        if ($curs->name == $curso->cursoAnterior) {
                            echo '                        <option selected value = ' . $curs->name . '>' . $curs->name . '</option>';
                        } else {
                            echo '                        <option value = ' . $curs->name . '>' . $curs->name . '</option>';
                        }
                        echo '                        <option value = "NoCurso">Sin Curso Anterior</option>';
                    }
                } else {
                    echo '                        <option selected value = "NoCurso">Sin Curso Anterior</option>';
                    foreach ($cursos as $curs) {
                        echo '                        <option value = ' . $curs->name . '>' . $curs->name . '</option>';
                    }
                }
                
                echo '                    </select>';
                echo '                </div>';
                echo '                <div class="col-sm-3">';
                echo '                    <label for="cursiguiente">Curso Siguiente</label>';
                echo '                    <select class="custom-select" id="cursiguiente" name="cursoSiguiente'. $indice .'">';
                var_dump($curso->cursoSiguiente);
                if ($curso->cursoSiguiente != null) {
                    foreach ($cursos as $curs) {
                        if ($curs->name == $curso->cursoSiguiente) {
                            echo '                        <option selected value = ' . $curs->name . '>' . $curs->name . '</option>';
                        } else {
                            echo '                        <option value = ' . $curs->name . '>' . $curs->name . '</option>';
                        }
                        echo '                        <option value = "NoCurso">Sin Curso Siguiente</option>';
                    }
                } else {
                    echo '                        <option selected value = "NoCurso">Sin Curso Siguiente</option>';
                    foreach ($cursos as $curs) {
                        echo '                        <option value = ' . $curs->name . '>' . $curs->name . '</option>';
                    }
                }
                
                echo '                    </select>';
                echo '                </div>';
                echo '            </div>';
                echo '            <hr class="solid" style="border-top: 3px solid rgb(134, 8, 8)">';
                echo '';
                $indice++;
            }
            ?>
            <div class="row justify-content-md-center">
                <button type="submit" class="btn btn-outline-primary">
                    Confirmar
                </button>
            </div>
        </form>
    </div>

</body>

</html>