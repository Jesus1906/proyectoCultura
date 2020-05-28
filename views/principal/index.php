<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Diego Velázquez">
    <meta name="description"
        content="Smart Agency is a one page responsive Bootstrap 4 template. This is a free open source theme, you can use our theme for any purpose, even commercially. Create amazing websites with this easy to customize template.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="http://localhost/proyectoCultura/views/principal/styles.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../ImagenescULTURA/logo.jpg" />

    <title>Cultura Filadelfia</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#inicio">
            <img src="../../ImagenescULTURA/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""
                loading="lazy">
            Cultura Filadelfia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#inicio">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#info">Sobre Nosotros<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cursos">Cursos</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Iniciar Sesion
                    </a>
                    <div class="dropdown-menu">
                        <form class="px-1 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Correo Electronico</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                    placeholder="micorreo@ejemplo.com" required name="">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                                    placeholder="Contraseña" required name="">
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="registro.php">Registrarme</a>
                        <a class="dropdown-item" href="#">Recuperar Contraseña</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.php">Registrarme</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="inicio">
        <div class="row">
            <div class="col-sm-12">
                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../ImagenescULTURA/Inscripciones.jpg" class="d-block w-100"
                                style="height: 600px; width: 300px;">
                        </div>
                        <div class="carousel-item">
                            <img src="../../ImagenescULTURA/70008709_2501561010074382_6545377534010440019_n.jpg"
                                class="d-block w-100" style="height: 600px; width: 300px;">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                        <div class="control-button">
                            <i class="icon ion-md-arrow-back"></i>
                        </div>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                        <div class="control-button">
                            <i class="icon ion-md-arrow-forward"></i>
                        </div>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="info">
        <div class="container-fluid">
            <div class="content-center">
                <h2>¿Quienes somos?</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
                <h2>Visión</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
                <h2>Misión</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit veniam mollitia
                    aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum. Suscipit expedita obcaecati
                    nesciunt error ut quidem autem.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <img src="../../ImagenescULTURA/entrega.jpg" class="img-fluid" alt="Portfolio 01">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <img src="../../ImagenescULTURA/entrega.jpg" class="img-fluid" alt="Portfolio 02">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <img src="../../ImagenescULTURA/entrega.jpg" class="img-fluid" alt="Portfolio 03">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <img src="../../ImagenescULTURA/entrega.jpg" class="img-fluid" alt="Portfolio 04">
                    </div>
                </div>
            </div>
            <div class="text-center margintop-sm">
                <p class="">¿Listo para inscribirte?</p>
                <a href="registro.php" class="text-dark"><b>Hazlo Aquí</b></a>
            </div>
        </div>
    </section>

    <section id="cursos" class="divider">
        <div class="container">
            <div class="content-center">
                <h2>Cursos</h2>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit
                                veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.
                            </p>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="../../ImaCursos/VIDA CON PROPOSITO.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Nombre de curso</h6>
                                        <span>Nivel</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit
                                veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>

                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-sm-3 col-3">
                                        <img src="../../ImaCursos/PORTADA.FB1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-sm-9 col-9">
                                        <h6>Nombre de curso</h6>
                                        <span>Nivel</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ea consequuntur, odit
                                veniam mollitia aliquam reiciendis dignissimos, vitae sapiente neque, cum dolorum.</p>

                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="../../ImaCursos/PORTADA.AUT.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Nombre de Curso</h6>
                                        <span>Nivel</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <div class="control-button">
                        <i class="icon ion-md-arrow-back"></i>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <div class="control-button">
                        <i class="icon ion-md-arrow-forward"></i>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
            </div>



        </div>
    </section>

    <footer class="bgDark">
        <div class="container">
            <img src="../../ImagenescULTURA/logo.jpg" alt="..." class="rounded-circle" style="width: 90px; height: 90px;">

            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.instagram.com/cultura.filadelfia/" target="_blank"><i
                            class="icon ion-logo-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCXL0xAaVTYmf3EMlccDoTFA"
                        target="_blank"><i class="icon ion-logo-youtube"></i></a></li>
                <li class="list-inline-item"><a href="https://www.ministerios-filadelfia.org/" target="_blank"><i
                            class="icon ion-logo-dribbble" ></i></a></li>
                <li class="list-inline-item"><a href="https://www.facebook.com/Cultura-Filadelfia-187327808340452"
                        target="_blank"><i class="icon ion-logo-facebook"></i></a></li>
            </ul>

        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
