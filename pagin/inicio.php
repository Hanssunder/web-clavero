<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TNT.MANUEL_CLAVERO_MUGA</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- FONT OSWALD -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!--todo esto es la parte principal-->
    <header>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <h1 class="text-white">
                <img src="img/insignia_clv.jpg" alt="clavero" class="logo-colegio" />
                TNT. MANUEL CLAVERO MUGA
              </h1>
            </div>
          </div>
        </div>
      </header>
        
        <!-- Navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="inicio.php">Inicio</a>
                            <ul class="sub-menu">
                                <li><a href="#">Visión</a></li>
                                <li><a href="mision.html">Misión</a></li>
                                <li><a href="Resena_historica.html">Reseña Historica</a></li>
                                <li><a href="#">Biografica</a></li>
                                <li><a href="#">Himno</a></li>
                                <li><a href="#">Eventos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Alumnos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profesores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--hasta aqui la parte principal-->


        <!-- SHOWCASE -->
        <div class="showcase">
            <p>Nuestro objetivo es preparar a nuestros estudiantes para enfrentar los desafíos del mundo actual y futuro.</p>
            <a href="#" class="btn">Leer Más<i class="fas fa-angle-double-right"></i> </a>
        </div>


        <section class="social">
            <p>Seguir en nuestras Redes</p>
            <div class="links">
                <a href="https://web.facebook.com/people/Colegio-Manuel-Clavero-Muga-Oficial/100063562737153/" target="blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCM_AJ2qQc5lnyPSRzZGzSLA?view_as=subscriber" target="blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </section>

    </div>
    
    <div class="footer-links">
        <div class="footer-container"></div>
        <footer class="footer">
            <div class="footer-info">
                <a href="#"><img src="img/clavero_log.jpg" class="imagen-pequena" alt="icon"></a>
                <p>Institución Educativa Pública "Tnte. Manuel Clavero Muga" R.D.Z. N° 000068 / 10-01-1974  - Área de Innovación Pedagógica - Setiembre 2019
                    Av. Trujillo N° 745 - Teléf. 065 250385 - Correo Institucional: colegioclaverom@gmail.com
                </p>
            </div>
        </footer>
    </div>
    

    <!--  CUSTOM boostrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>