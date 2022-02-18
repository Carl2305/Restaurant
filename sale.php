<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly - Ventas</title>
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

  <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+51 559 5488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lu-Sa: 6PM - 23PM</span></i>
      </div>

      <!--<div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>-->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="./">Restaurantly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto" href="./">Inicio</a></li>
          <!--li><a class="nav-link scrollto" href="#about">Acerca de (about)</a></li-->
          <li><a class="nav-link scrollto" href="./#menu">Menú</a></li>
          <!--li><a class="nav-link scrollto" href="#specials">Combos(especiales)</a></li-->
          <!--li><a class="nav-link scrollto" href="#events">Events</a></li-->
          <!--li><a class="nav-link scrollto" href="#chefs">Chefs</a></li-->
          <li><a class="nav-link scrollto" href="./#gallery">Galeria</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class="nav-link scrollto" href="./#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="./#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservar una Mesa</a>
      <div class="rounded-circle bg-white">
        <a href="sale.php" class="p-2 icon-cart-sale"><i class="bi bi-cart"></i></a>
      </div>
    </div>
  </header><!-- End Header -->

  <form class="modal fade" tabindex="-1" id="modal-form-client" data-bs-backdrop="static" aria-labelledby="title-modal-menu" aria-hidden="true" autocomplete="true" method="post">
    <div class="modal-dialog">
      <div class="modal-content-sale">
        <div class="modal-header-sale">
          <h5 class="modal-title" id="title-modal-menu">Registra tus datos para continuar con el Pedido</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-1">
            <label for="client-name" class="col-form-label">Nombres y Apellidos:</label>
            <input type="text" class="form-control" id="client-name" maxlength="100" minlength="10" autofocus required>
          </div>
          <div class="mb-1">
            <label for="client-phone" class="col-form-label">Teléfono:</label>
            <input type="text" class="form-control" id="client-phone" maxlength="12" minlength="7" required>
          </div>
          <div class="mb-1">
            <label for="client-email" class="col-form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="client-email" maxlength="90" minlength="10" required>
          </div>
          <div class="mb-1">
            <label for="client-address-delivery" class="col-form-label">Dirección entrega:</label>
            <input type="text" class="form-control" id="client-address-delivery" maxlength="140"  minlength="10" required>
          </div>
          <div class="mb-1">
            <label for="client-reference-address" class="col-form-label">Referencia:</label>
            <textarea class="form-control" id="client-reference-address" cols="4"  maxlength="290"></textarea>
          </div>
        </div>
        <div class="modal-footer-sale">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-warning">Registrar</button>
        </div>
      </div>
    </div>
  </form>

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h3>Resumen del Pedido</h3>
            <h2>Total: <span id="total-order">S/ 0.00</span</h2>
          </div>
          <div>
            <button type="button" class="btn btn-success mt-2 mt-md-0" id="btn-finally-order" data-bs-toggle="modal" data-bs-target="#modal-form-client">Finalizar Pedido</button>
            <a href="./#menu" class="btn btn-warning mt-2 mt-md-0">Ver la Carta</a>
          </div>
          <!--<ol>
            <li><button class="btn btn-success" >Finalizar Pedido</button></li>
            <li><a href="./#menu" class="btn btn-warning mt-2 mt-lg-0">Ver la Carta</a></li>
          </ol>-->
        </div>
      </div>
    </section>

    <section class="menu section-bg">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="200" id="sale-container">
          <!--<div class="col-lg-4 sale-item filter-chicken">
              <img src="assets/img/menu/pollo-papas-ensalada.png" class="menu-img" alt="">
              <div class="menu-content">
              <a href="#">1 Pollo + Papa + Ensalada</a><span>S/ 63.90</span>
              </div>
              <div class="menu-ingredients">
              1 Pollo + Papa + Ensalada Clásica Familiar + Salsas
              <br>Descripcion: <span>con sal</span>
              </div>
              <div class="menu-ingredients d-flex justify-content-end">
                  <button class="btn btn-danger"  data-codemenu="P0001">Eliminar</button>
              </div>
          </div>-->
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Restaurantly</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <!--<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
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
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/sweetalert/sweetalert2.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>