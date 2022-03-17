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
    echo loadHeadPage("Registrar Cuenta");
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

  <!-- ======= Seccion Registrar una Cuenta ======= -->
  <section class="book-a-table d-flex align-items-center" id="home">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2></h2>
          <p>Registrar Nueva Cuenta</p>
        </div>

        <form autocomplete="off" action="forms/register.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row mb-5">
            <div class="col-xxl-4 col-md-6 form-group">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombres y Apellidos" required min="" max="">
              </div>
            </div>
            <div class="col-xxl-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required maxlength="100" minlength="10">
              </div>
            </div>
            <div class="col-xxl-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" required maxlength="12" minlength="7">
              </div>
            </div>
            <div class="col-xxl-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" name="user" id="user" placeholder="Usuario" required maxlength="15" minlength="3">
              </div>
            </div>
            <div class="col-xxl-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
                <input type="password" class="form-control" name="password" id="password" placeholder="contraseña" required maxlength="15" minlength="5">
              </div>
            </div>
            <div class="col-xxl-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
                <input type="password" class="form-control" name="renewpassword" id="renewpassword" placeholder="Confirmar Contraseña" required maxlength="15" minlength="5">
              </div>
            </div>
          </div>
          <div class="my-3">
              <div class="loading">Cargando</div>
              <div class="error-message"></div>
              <div class="sent-message">Datos Registrados</div>
            </div>
          <div class="text-center"><button class="btn btn-lg" type="submit">Registrar Cuenta</button></div>
        </form>

      </div>
    </section><!-- Fin Seccion Registrar una Cuenta -->

  <main id="main"><!-- #main -->

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

