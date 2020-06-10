<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Curso Asignado</title>
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
            <a class="nav-link" href="Clasi_adm.html">Home <span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="modal-dialog text-center">
        <h1>Consultar Cursos</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="panelLateral">
                <dt class="col-sm-4">Profesor</dt>
                <dd class="col-sm-8"><?php if($data->profName2 != null){ echo "$data->profName1 $data->profName2 $data->profName3 $data->profName4";}else{echo "$data->profName1 $data->profName3 $data->profName4";} ?></dd>
                <br>
                <br>
                <dt class="col-sm-4">Adjunto</dt>
                <dd class="col-sm-8"><?php if($data->adjuntoName2 != null){echo "$data->adjuntoName1 $data->adjuntoName2 $data->adjuntoName3 $data->adjuntoName4";}else{echo "$data->adjuntoName1 $data->adjuntoName3 $data->adjuntoName4";} ?></dd>
                <br>
                <br>
                <dt class="col-sm-4">Horario</dt>
                <dd class="col-sm-8"><?php if($data->turno == 'M'){ echo 'Matutino'; }else{ echo 'Vespertino'; } ?></dd>
            </div>
            <div class="col-sm-6">

                <div class="modal-dialog text-center">
                    <h3 id="nombreCurso"><?php echo $data->name; ?></h3>
                    <img id="imgCurso" src="<?php echo RUTA_SERVER . 'public/Uploads/cursos/img/' . $data->photo ?>" alt="Responsive image" height="360px">
                    <p><strong>Descripcion: </strong>
                        <p id="descripcion"><?php echo $data->descripcion; ?></p>
                    </p>
                </div>



            </div>
            <div class="col-sm-3">

                <dt class="col-sm-8">Material de Apoyo</dt>
                <dd class="col-sm-8"><a id="material" href="#"><?php echo $data->manual; ?></a></dd>
                <br>
                <br>
                <dt class="col-sm-8">Numero Adjunto</dt>
                <dd class="col-sm-8"><?php echo $data->phone; ?></dd>
                <br>
                <br>
                <dt class="col-sm-8">Fecha inicio</dt>
                <dd class="col-sm-8"><?php echo $data->inicio; ?></dd>
                <br>
                <br>
                <dt class="col-sm-8">Fecha fin</dt>
                <dd class="col-sm-8"><?php echo $data->fin; ?></dd>

            </div>
        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>