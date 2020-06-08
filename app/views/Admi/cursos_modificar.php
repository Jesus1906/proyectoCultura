<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <title>Modificar Curso</title>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php RUTA_URL ?>"><img src="../../ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

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
      <a class="nav-link" href="<?php echo RUTA_URL ?>cursos">Cursos <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="<?php echo RUTA_URL ?>adm">Home <span class="sr-only">(current)</span></a>
   </div>
</nav>

<div class="modal-dialog text-center">
   <h1>Modificar Cursos</h1>
</div>

<div class="container">
   <div class="row">

      <div class="col-sm-2" id="panelLateral">
         <h5>Seleccione el curso</h5>
         <li> Primer Nivel
            <ul>Nombre Curso</ul>
         </li>
         <li> Segundo Nivel
            <ul>Nombre Curso</ul>
         </li>
      </div>

      <div class="col ">
         <div class="modal-dialog text-center" id="datosCurso">
            <h3>Nombre Curso</h3>
            <img src="../../ImaCursos/VIDA CON PROPOSITO.jpg" alt="Responsive image" height="360px">
            <p><strong>Aquí llevará una breve descripción del curso</strong> </p>
         </div>
         <form method="post" id = "formCursos" enctype="multipart/form-data">
            <div class="row">
               <label for="inputState"> Nombre del Curso</label>
            </div>
            <div class="form-row">
               <div class="col-md-12" id="nombreCurso">
                  <input type="text" class="form-control" placeholder="Nombre del Curso" name ="name">
               </div>
            </div>
            <div class="row">
               <label for="inputState"> Nivel</label>
            </div>
            <div class="form-row">
               <div class="col-md-6" id="nivelCurso">
                  <input type="text" class="form-control" placeholder="Nivel" name = "nivel">
               </div>
            </div>
            <div class="row">
               <label for="inputState"> subnivel</label>
            </div>
            <div class="form-row">
               <div class="col-md-12" id="subnivelCurso">
                  <input type="text" class="form-control" placeholder="Subnivel" name = "subnivel" >
               </div>
            </div>
            <div class="row">
               <label for="inputState">Descripción</label>
            </div>
            <div class="form-row">
               <div class="col-md-12" id="descripcionCurso">
                  <input type="text" class="form-control" placeholder="Escriba una Descripción del Curso" name = "descripcion">
               </div>
            </div>
            <div class="row">
               <label for="inputState">Temario</label>
            </div>
            <div class="form-row" id="temarioCurso">
               <div class="col-md-5">
                  <input type="file" class="btn btn-outline-primary" placeholder="Agregar Temario" name = "temario" id="eTemarioCurso">
               </div>
            </div>
            <div class="row">
               <label for="inputState">Manual</label>
            </div>
            <div class="form-row" id="manualCurso">
               <div class="col-md-5">
                  <input type="file" class="btn btn-outline-primary" placeholder="Agregar Manual" name = "manual"id="eManualCurso">
               </div>
            </div>
            <div class="row">
               <label for="inputState">Examen</label>
            </div>
            <div class="form-row"id="examenCurso">
               <div class="col-md-5">
                  <input type="file" class="btn btn-outline-primary" placeholder="Agregar Examen" namae = "examen"id="eExamenCurso">
               </div>
            </div>
            <div class="row">
               <label for="inputState">Hoja de respuestas</label>
            </div>
            <div class="form-row"id="respuestasCurso">
               <div class="col-md-5">
                  <input type="file" class="btn btn-outline-primary" placeholder="Agregar Hoja de Respuestas" name = "answers" id="eRespuestasCurso">
               </div>
            </div>
            <div class="row">
               <label for="inputState">Imagen del Curso</label>
            </div>
            <div class="form-row"id="fotoCurso">
               <div class="col-md-5">
                  <input type="file" class="btn btn-outline-primary" placeholder="Agregar Imagen" name = "photo" id="eFotoCurso">
               </div>
            </div>


            <br>

            <div class="row">
               <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnModificar">Modificar</button>
            </div>
         </form>



      </div>


   </div>



</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous"></script>
<script src="<?php echo RUTA_SERVER ?>/js/cursos/modificar.js"></script>
</body>

</html>
