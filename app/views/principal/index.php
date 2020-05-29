<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Diego Velázquez">
    <meta name="description" content="Smart Agency is a one page responsive Bootstrap 4 template. This is a free open source theme, you can use our theme for any purpose, even commercially. Create amazing websites with this easy to customize template.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_SERVER ?>/public/estilos/styles.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://localhost/proyectocultura/ImagenescULTURA/logo.jpg" />

    <title>Cultura Filadelfia</title>

    <style>
        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Titillium Web', sans-serif;
        }

        .bgDark {
            background-color: #1a1a1a;
        }

        .bgLight {
            background-color: #ffffff;
        }

        .bgLightGrey {
            background-color: #f5f5f5;
        }

        .colorDark {
            color: #1a1a1a !important;
        }

        h1 {
            font-size: 66px;
            font-weight: 700;
            line-height: 80px;
        }

        h2 {
            font-size: 48px;
            margin-bottom: 30px;
        }

        h3 {
            font-size: 33px;
        }

        h5 {
            margin-bottom: 0px;
        }

        p {
            font-size: 18px;
            color: #999999;
            line-height: 1.8;
            margin-bottom: 0px;
        }

        a:hover {
            text-decoration: none;
        }

        a i {
            font-size: 22px;
            color: #ffffff;
        }

        .btn {
            font-size: 14px;
            padding: 15px 26px;
            min-width: 160px;
            border-radius: 2px;
            display: inline-block;
        }

        .btn i {
            font-size: 14px;
            margin-left: 5px;
        }

        .btn-primary {
            background-color: #1a1a1a;
            color: #ffffff;
            border: 2px solid #1a1a1a;
        }

        .btn-secondary {
            background-color: #ffffff;
            color: #1a1a1a;
            border: 2px solid #ffffff;
        }


        .btn-alternate {
            background-color: transparent;
            color: #ffffff;
            border: 2px solid #ffffff;
        }

        .btn-primary:hover {
            background-color: #1a1a1a;
            border: 2px solid #1a1a1a;
        }

        .btn-secondary:hover {
            background-color: #ffffff;
            color: #1a1a1a;
            border: 2px solid #ffffff;
        }

        .btn-secondary:focus {
            background-color: #ffffff !important;
            outline: none;
            border: 2px solid #ffffff !important;
            box-shadow: none;
        }

        .logo-brand {
            max-width: 180px;
            min-width: 160px;
        }

        .margintop-xs {
            margin-top: 15px;
        }

        .margintop-sm {
            margin-top: 30px;
        }

        .margintop-lg {
            margin-top: 60px;
        }

        section {
            padding: 120px 0;
        }

        .divider {
            border-bottom: 2px solid #f5f5f5;
        }

        .content-center {
            max-width: 800px;
            margin: 0 auto 60px auto;
            text-align: center;
        }

        .full-width {
            width: 100%;
        }

        .form-control {
            font-size: 14px;
            border: 1px solid #cacaca;
            padding: 15px;
            border-radius: 2px;
        }

        .form-control:focus {
            border: 1px solid #1a1a1a;
            outline: none;
            box-shadow: none;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .05);
            min-height: 100px;
        }

        .nav-link {
            color: #1a1a1a;
        }

        .nav-link:hover {
            color: #1a1a1a;
        }

        .navbar-toggler {
            font-size: 40px;
        }

        .navbar-toggler:focus {
            outline: none;
        }



        /* //////////////
   Portfolio
//////////////*/

        .portfolio-container {
            position: relative;
            overflow: hidden;
            margin: 10px 0;
            border-radius: 2px;
        }

        .portfolio-container img {
            -moz-transition: all 0.8s;
            -webkit-transition: all 0.8s;
            transition: all 0.8s;
        }

        .portfolio-container:hover img {
            -moz-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }


        /* //////////////
   Testimonial
//////////////*/

        .carousel {
            min-height: 240px;
            padding: 40px;
            border-radius: 2px;
            text-align: center;
        }

        .carousel-item p {
            font-size: 26px;
            font-weight: 400;
            color: #1a1a1a;
        }

        .carousel-indicators li {
            background-color: #1a1a1a;
            width: 15px;
            height: 15px;
            border-radius: 2px;
            margin: 0 8px;
        }

        .carousel-control-next,
        .carousel-control-prev {
            color: #ffffff;
            opacity: 1;
            width: 5%;
        }

        .control-button {
            background-color: #1a1a1a;
            opacity: 1;
            width: 50px;
            height: 50px;
            padding: 10px;
            border: 1px solid #1a1a1a;
            border-radius: 50px;
            font-size: 20px;
        }

        .carousel-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .testimonial-user {
            max-width: 240px;
            margin: 0 auto;
            text-align: left;
        }

        .testimonial-user h6 {
            margin-bottom: 0px;
        }

        .testimonial-user span {
            font-size: 12px;
        }

        .testimonial-user img {
            border-radius: 50%;
            max-width: 50px;
            text-align: center;
        }



        /* //////////////
   Footer
//////////////*/

        footer {
            padding: 80px 0;
            text-align: center;
            color: #ffffff;
        }

        footer a {
            color: #ffffff;
        }

        footer a:hover {
            color: #ffffff;
        }

        footer .list-inline .list-inline-item {
            padding: 10px 15px;
        }

        /* //////////////
   Media queries
//////////////*/

        @media (max-width: 575.98px) {
            h1 {
                font-size: 40px;
                line-height: normal;
            }

            .portfolio-details h2 {
                font-size: 32px;
            }

            .plans {
                min-width: unset;
                padding: 40px;
            }

            .carousel-item p {
                font-size: 20px;
            }

            .footer-menu {
                display: block !important;
                padding: 20px 0 !important;
                font-size: 20px;

            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {}

        @media (min-width: 768px) and (max-width: 991.98px) {
            .portfolio-details h2 {
                font-size: 30px;
            }

            .plans {
                min-width: unset;
                padding: 40px 20px;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {}

        @media (min-width: 1200px) {}
    </style>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#inicio">
            <img src="http://localhost/proyectocultura/ImagenescULTURA/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""
                loading="lazy">
            Cultura Filadelfia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Iniciar Sesion
                    </a>
                    <div class="dropdown-menu">
                        <form class="px-1 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Correo Electronico</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="micorreo@ejemplo.com" required name="">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña" required name="">
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
                            <img src="http://localhost/proyectocultura/ImagenescULTURA/Inscripciones.jpg" class="d-block w-100"
                                style="height: 600px; width: 300px;">
                        </div>
                        <div class="carousel-item">
                            <img src="http://localhost/proyectocultura/ImagenescULTURA/70008709_2501561010074382_6545377534010440019_n.jpg"
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
                        <img src="http://localhost/proyectocultura/ImagenescULTURA/entrega.jpg" class="img-fluid" alt="Portfolio 01">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <img src="http://localhost/proyectocultura/ImagenescULTURA/entrega.jpg" class="img-fluid" alt="Portfolio 02">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <img src="http://localhost/proyectocultura/ImagenescULTURA/entrega.jpg" class="img-fluid" alt="Portfolio 03">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <img src="http://localhost/proyectocultura/ImagenescULTURA/entrega.jpg" class="img-fluid" alt="Portfolio 04">
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
                                        <img src="http://localhost/proyectocultura/ImaCursos/VIDA CON PROPOSITO.jpg" class="img-fluid" alt="">
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
                                        <img src="http://localhost/proyectocultura/ImaCursos/PORTADA.FB1.jpg" class="img-fluid" alt="">
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
                                        <img src="http://localhost/proyectocultura/ImaCursos/PORTADA.AUT.jpg" class="img-fluid" alt="">
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
            <img src="http://localhost/proyectocultura/ImagenescULTURA/logo.jpg" alt="..." class="rounded-circle" style="width: 90px; height: 90px;">

            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.instagram.com/cultura.filadelfia/" target="_blank"><i class="icon ion-logo-instagram"></i></a></li>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCXL0xAaVTYmf3EMlccDoTFA" target="_blank"><i class="icon ion-logo-youtube"></i></a></li>
                <li class="list-inline-item"><a href="https://www.ministerios-filadelfia.org/" target="_blank"><i class="icon ion-logo-dribbble"></i></a></li>
                <li class="list-inline-item"><a href="https://www.facebook.com/Cultura-Filadelfia-187327808340452" target="_blank"><i class="icon ion-logo-facebook"></i></a></li>
            </ul>

        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
