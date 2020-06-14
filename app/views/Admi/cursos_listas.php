<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Lista Cursos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../../ImagenescULTURA/logo.jpg" alt="">Cultura Filadelfia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    
                </li>
            </ul>
            <a class="nav-link" href="<?php echo RUTA_URL ?>adm">Inicio <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo RUTA_URL . "logout" ?>">Cerrar Sesion <span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="modal-dialog text-center">
        <h2>Listas de Alumnos por Curso</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="panelLateral">

            </div>
            <div class="col-sm-8">
                <div class="modal-dialog text-center">
                    <h3>Nombre Curso</h3>
                </div>

                <table class="table" id="listas">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Matricula</th>
                            <th scope="col">Nombre(s)</th>
                            <th scope="col">Ap Paterno</th>
                            <th scope="col">Ap Materno</th>
                        </tr>
                    </thead>
                    <tbody id = "datosTabla">
                        
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-9"></div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-secondary" onclick="tabletoPDF()">Imprimir</button>
                    </div>
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-success" name="">Finalizar</button>
                    </div>
                </div>


            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo RUTA_SERVER ?>/js/cursos/listasCurso.js"></script>

    <script>
            function tabletoPDF(){
                var printMe = document.getElementById('listas');
                var wme = window.open("","","width:700, heigth:900");
                wme.document.write(printMe.outerHTML);
                wme.document.close();
                wme.focus();
                wme.print();
                wme.close();
    
            }
    </script>
</body>

</html>