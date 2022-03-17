<?php
  error_reporting(0);
  session_start();
  if(isset($_SESSION['client_timesession'])){
    $disable=900;
    $life_session = time() - $_SESSION['client_timesession'];
    if($life_session>$disable){
      session_destroy();
    }
  }else{
    $_SESSION['client_timesession']=time();
  }
  include ('./assets/html/codehtml.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
    echo loadHeadPage("Ventas");
?>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+51 559 5488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lu-Sa: 6PM - 23PM</span></i>
      </div>

      <?php
      #<div class="languages d-none d-md-flex align-items-center">
      #  <ul>
      #    <li>En</li>
      #    <li><a href="#">De</a></li>
      #  </ul>
      #</div>
      ?>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <?php
    $login=false;
    $nameuser="";
    if(isset($_SESSION['client_login'])){
      if($_SESSION['client_login']==true){
        $login=true;
        $nameuser=$_SESSION['client_nameuser'];
      }
    }else{
      $login=false;
    $nameuser="";
    }
    echo loadHeader($login, $nameuser);
  ?>
  <!-- End Header -->

  <form class="modal fade" tabindex="-1" id="modal-form-client" data-bs-backdrop="static" aria-labelledby="title-modal-menu" aria-hidden="true" autocomplete="true" method="post">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content-sale">
        <div class="modal-header-sale">
          <h5 class="modal-title" id="title-modal-menu">Datos para el delivery</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
        </div>
      </div>
    </section>

    <section class="menu section-bg">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="200" id="sale-container">
          <?php
          #<!--<div class="col-lg-4 sale-item filter-chicken">
          #    <img src="assets/img/menu/pollo-papas-ensalada.png" class="menu-img" alt="">
          #    <div class="menu-content">
          #    <a href="#">1 Pollo + Papa + Ensalada</a><span>S/ 63.90</span>
          #    </div>
          #    <div class="menu-ingredients">
          #    1 Pollo + Papa + Ensalada Clásica Familiar + Salsas
          #    <br>Descripcion: <span>con sal</span>
          #    </div>
          #    <div class="menu-ingredients d-flex justify-content-end">
          #        <button class="btn btn-danger"  data-codemenu="P0001">Eliminar</button>
          #    </div>
          #</div>-->
          ?>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    echo loadmodalLogin();
    echo loadFooter();
  ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php
    echo loadScripts();
  ?>

</body>

</html>