<?php
  error_reporting(0);
  session_start();
  if(isset($_SESSION['client_login'])){
    if($_SESSION['client_login']==true){
      
    }else{
      session_destroy();
      header('location:./index.php');
      die();
    }
  }else{
    session_destroy();
    header('location:./index.php');
    die();
  }
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
    echo loadHeadPage("Mi Perfil");
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
  <section class="book-a-table " id="home">
      <div class="container" data-aos="fade-up">

        <div class="section-title p-0">
          <h2></h2>
          <p>Mi Perfil</p>
        </div>
        <section class="section profile p-0">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-xl-8">

                <div class="card">
                  <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
      
                      <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Datos Personales</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                      </li>
      
                      <li class="nav-item">
                        <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-change-password">Cambiar Contraseña</button>
                      </li>
      
                    </ul>
                    <div class="tab-content pt-2">
      
                      <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label ">Nombres y apellidos</div>
                          <div class="col-lg-9 col-md-8 text-black"><?php echo $_SESSION['client_name']; ?></div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">Teléfono</div>
                          <div class="col-lg-9 col-md-8 text-black"><?php echo $_SESSION['client_phone']; ?></div>
                        </div>
      
                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">Correo Electrónico</div>
                          <div class="col-lg-9 col-md-8 text-black"><?php echo $_SESSION['client_emailuser']; ?></div>
                        </div>

                        <div class="row">
                          <div class="col-lg-3 col-md-4 label">Usuario</div>
                          <div class="col-lg-9 col-md-8 text-black"><?php echo $_SESSION['client_nameuser']; ?></div>
                        </div>
      
                      </div>
      
                      <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
      
                        <!-- Profile Edit Form -->
                        <form role="form" id="formUpdateClient" autocomplete="off" method="post">
                          <div class="row mb-3">
                            <label for="names" class="col-md-4 col-lg-3 col-form-label">Nombres y Apellidos</label>
                            <div class="col-md-8 col-lg-9">
                              <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                               <input name="names" type="text" class="form-control" id="names" required="" minlength="3" maxlength="80" value="<?php echo $_SESSION['client_name']; ?>">
                              </div>
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-lg-3 col-form-label">Teléfono</label>
                            <div class="col-md-8 col-lg-9">
                              <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input name="phone" type="text" class="form-control" id="phone" required="" minlength="7" maxlength="12" value="<?php echo $_SESSION['client_phone']; ?>">
                              </div>
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Correo Electrónico</label>
                            <div class="col-md-8 col-lg-9">
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="email" name="email" class="form-control" id="email" required="" minlength="3" maxlength="60" value="<?php echo $_SESSION['client_emailuser']; ?>">
                                  </div>
                            </div>
                          </div>
      
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                          </div>
                        </form><!-- End Profile Edit Form -->
      
                      </div>
      
                      <div class="tab-pane fade profile-edit pt-3 mb-5" id="profile-change-password">
                        <!-- Change Password Form -->
                        <form role="form" id="formUpdatePassClient" autocomplete="off" method="post">
                          <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Contraseña Actual</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="password" type="password" class="form-control" id="currentPassword" required="" minlength="5" maxlength="15">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nueva Contraseña</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="newpassword" type="password" class="form-control" id="newPassword" required="" minlength="5" maxlength="15">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Confirmar nueva Contraseña</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="renewpassword" type="password" class="form-control" id="renewPassword" required="" minlength="5" maxlength="15">
                            </div>
                          </div>
      
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
                          </div>
                        </form><!-- End Change Password Form -->
      
                      </div>
      
                    </div><!-- End Bordered Tabs -->
      
                  </div>
                </div>
      
              </div>
          </div>
        </section>
      </div>
    </section><!-- Fin Seccion Registrar una Cuenta -->

  <main id="main"><!-- #main -->

    <section class="section-dashboard">
      
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

