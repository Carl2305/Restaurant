<?php

    function loadHeadPage($title){
        return '<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Restaurant - '.$title.'</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
      
      </head>';
    }

    function loadHeaderIndex($login,$nameuser){
        $html='';
        $html.='<header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    
          <h1 class="logo me-auto me-lg-0"><a href="./">Restaurant</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#home">Inicio</a></li>
              <!--li><a class="nav-link scrollto" href="#about">Acerca de (about)</a></li-->
              <li><a class="nav-link scrollto" href="#menu">Menú</a></li>
              <!--li><a class="nav-link scrollto" href="#specials">Combos(especiales)</a></li-->
              <!--li><a class="nav-link scrollto" href="#events">Events</a></li-->
              <!--li><a class="nav-link scrollto" href="#chefs">Chefs</a></li-->
              <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
              <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>';
              if($login==true){
                  $html.='<li class="dropdown"><a href="#"><span>'.$nameuser.'</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li>
                      <a href="myprofile.php" class="d-flex justify-content-start">
                        <i class="bi bi-person me-1"></i>
                        <span>Mi Perfil</span>
                      </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-start" id="btnclosesession">
                          <i class="bi bi-box-arrow-right me-1"></i>
                          <span>Cerrar Sesión</span>
                        </a>
                    </li>
                  </ul>
                </li>';
              }else{
                  $html.='<li><a class="nav-link" href="#" id="btnloginbar">Ingresar</a></li>';
              }

              
          $html.='</ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservar una Mesa</a>
          <div class="rounded-circle bg-white">
            <a href="sale.php" class="p-2 icon-cart-sale"><i class="bi bi-cart"></i></a>
          </div>';
          if($login!=true){
              $html.='<div class="rounded-circle bg-white" id="elemntuserlogin">
              <a href="#" class="p-2 icon-cart-sale"><i class="bi bi-person"></i></a>
            </div>';
          }

      $html.='</div>
      </header>';
        return $html;
    }

    function loadHeader($login,$nameuser){
        $html='';
        $html.='<header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    
          <h1 class="logo me-auto me-lg-0"><a href="./">Restaurant</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="./#homepage">Inicio</a></li>
              <!--li><a class="nav-link scrollto" href="#about">Acerca de (about)</a></li-->
              <li><a class="nav-link scrollto" href="./#menu">Menú</a></li>
              <!--li><a class="nav-link scrollto" href="#specials">Combos(especiales)</a></li-->
              <!--li><a class="nav-link scrollto" href="#events">Events</a></li-->
              <!--li><a class="nav-link scrollto" href="#chefs">Chefs</a></li-->
              <li><a class="nav-link scrollto" href="./#gallery">Galeria</a></li>
              <li><a class="nav-link scrollto" href="./#contact">Contacto</a></li>';
              if($login==true){
                  $html.='<li class="dropdown"><a href="#"><span>'.$nameuser.'</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li>
                      <a href="myprofile.php" class="d-flex justify-content-start">
                        <i class="bi bi-person me-1"></i>
                        <span>Mi Perfil</span>
                      </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex justify-content-start" id="btnclosesession">
                          <i class="bi bi-box-arrow-right me-1"></i>
                          <span>Cerrar Sesión</span>
                        </a>
                    </li>
                  </ul>
                </li>';
              }else{
                  $html.='<li><a class="nav-link" href="#" id="btnloginbar">Ingresar</a></li>';
              }

              
          $html.='</ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a href="./#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservar una Mesa</a>
          <div class="rounded-circle bg-white">
            <a href="sale.php" class="p-2 icon-cart-sale"><i class="bi bi-cart"></i></a>
          </div>';
          if($login!=true){
              $html.='<div class="rounded-circle bg-white" id="elemntuserlogin">
              <a href="#" class="p-2 icon-cart-sale"><i class="bi bi-person"></i></a>
            </div>';
          }

      $html.='</div>
      </header>';
        return $html;
    }

    function loadFooter(){
        return '<footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                  <h3>Restaurant</h3>
                  <p>
                    A108 Adam Street <br>
                    NY 535022, USA<br><br>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> info@example.com<br>
                  </p>
                  <div class="social-links mt-3">
                    <!--a href="#" class="twitter"><i class="bx bxl-twitter"></i></a-->
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <!--a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a-->
                  </div>
                </div>
              </div>
    
              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
              </div>
    
              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
    
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Restaurant</span></strong>. Todos los Derechos Reservados
          </div>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </footer>';
    }

    function loadmodalLogin(){
        return '<form class="modal fade" tabindex="-1" id="modal-client" aria-labelledby="title-modal-menu" aria-hidden="true" autocomplete="off" method="post" action="forms/login.php" role="form">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content-sale">
            <div class="modal-body text-center">
              <div class="mb-1 d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/favicon.png" alt="">
                </a>
              </div>
              <h2 class="mb-2">Acceso Restaurant</h2>
              <div class="mb-1">
                <label for="email_client" class="col-form-label">Correo Electrónico:</label>
                <input type="email" class="form-control text-center" id="email_client" name="email_client" maxlength="100" minlength="10" autofocus required>
              </div>
              <div class="mb-0">
                <label for="password_client" class="col-form-label">Contraseña:</label>
                <input type="password" class="form-control text-center" id="password_client" name="password_client" maxlength="15" minlength="5" required>
              </div>
            </div>
            <div class="py-4">
                <div class="mb-2 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
                <div class="mb-1 d-flex justify-content-center">
                  <a href="register.php">Registrarse</a>
                </div>
            </div>
          </div>
        </div>
      </form>';
    }

    function loadScripts(){
        return '<!-- Vendor JS Files -->
        <script src="assets/vendor/sweetalert/sweetalert2.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
      
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>';
    }

    
?>