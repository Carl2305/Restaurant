<?php
  error_reporting(0);
  session_start();
  if(isset($_SESSION['client_login'])){
    if(isset($_SESSION['client_timesession'])){
      $disable=900;
      $life_session = time() - $_SESSION['client_timesession'];
      if($life_session>$disable){
        session_destroy();
      }
    }else{
      $_SESSION['client_timesession']=time();
    }
  }
  if(file_exists('./assets/vendor/access-data/dbconnection.php')){
    include ('./assets/vendor/access-data/dbconnection.php' );
  }
  include ('./assets/html/codehtml.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
    echo loadHeadPage("Inicio");
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
    echo loadHeaderIndex($login, $nameuser);
  ?>
  <!-- End Header -->

  <!-- ======= Seccion Inicio ======= -->
  <section id="home" class="d-flex align-items-center" id="homepage">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenido a <span>Restaurant</span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Nuestro Menú</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Reservar una Mesa</a>
          </div>
        </div>
        <?php
        #<div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
        #  <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        #</div>
        ?>
      </div>
    </div>
  </section><!-- Fin Seccion Inicio -->

  <main id="main"><!-- #main -->

    <?php
    #<!-- ======= Seccion Acerca de ======= -->
    #<!--section id="about" class="about">
    #  <div class="container" data-aos="fade-up">
    #    <div class="row">
    #      <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
    #        <div class="about-img">
    #          <img src="assets/img/about.jpg" alt="">
    #        </div>
    #      </div>
    #      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
    #        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
    #        <p class="fst-italic">
    #          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
    #          magna aliqua.
    #        </p>
    #        <ul>
    #          <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    #          <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
    #          <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
    #        </ul>
    #        <p>
    #          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    #          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
    #          culpa qui officia deserunt mollit anim id est laborum
    #        </p>
    #      </div>
    #    </div>
    #  </div>
    #</section--><!-- Fin Seccion Acerca de -->
    ?>

    <?php
    #<!-- ======= Seccion Porque Nosotros ======= -->
    #<!--section id="why-us" class="why-us">
    #  <div class="container" data-aos="fade-up">
    #    <div class="section-title">
    #      <h2>Why Us</h2>
    #      <p>Why Choose Our Restaurant</p>
    #    </div>
    #    <div class="row">
    #      <div class="col-lg-4">
    #        <div class="box" data-aos="zoom-in" data-aos-delay="100">
    #          <span>01</span>
    #          <h4>Lorem Ipsum</h4>
    #          <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
    #        </div>
    #      </div>
    #      <div class="col-lg-4 mt-4 mt-lg-0">
    #        <div class="box" data-aos="zoom-in" data-aos-delay="200">
    #          <span>02</span>
    #          <h4>Repellat Nihil</h4>
    #          <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
    #        </div>
    #      </div>
    #      <div class="col-lg-4 mt-4 mt-lg-0">
    #        <div class="box" data-aos="zoom-in" data-aos-delay="200">
    #          <span>03</span>
    #          <h4> Ad ad velit qui</h4>
    #          <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
    #        </div>
    #      </div>
    #    </div>
    #  </div>
    #</section--><!-- Fin Seccion Porque Nosotros  -->
    ?>
    <!-- ======= Seccion Menu ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Consulta Nuestros Sabrosos Platos</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-combo">Combos</li>
              <li data-filter=".filter-chicken">Pollo</li>
              <li data-filter=".filter-salads">Ensaladas</li>
              <li data-filter=".filter-drinks">Bebidas</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <?php
            $pdo=cnx_db_restaurant();
            $sql="SELECT d.code_dish, d.name_dish, d.description_dish, d.url_image_dish, d.price_dish, c.code_category FROM dish d join category_dish c on d.id_category=c.id_category WHERE d.status_dish=1 ORDER BY d.id_dish asc";
            $result=$pdo->prepare($sql);
            $result->execute();
            //$data=$resul->fetchAll(PDO::FETCH_ASSOC);
            //$json= json_encode($data, JSON_UNESCAPED_UNICODE);
            $items='';
            while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
              $filter="";
              switch ($row['code_category']) {
                case 'C01': $filter="filter-chicken"; break;
                case 'C02': $filter="filter-salads"; break;
                case 'C03': $filter="filter-drinks"; break;
                case 'C04': $filter="filter-combo"; break;
              }
              $items.='<div class="col-lg-6 menu-item '.$filter.'" data-codemenu="'.$row['code_dish'].'">
              <img src="'.$row['url_image_dish'].'" class="menu-img" alt="'.$row['name_dish'].'">
              <div class="menu-content">
                <a href="#">'.$row['name_dish'].'</a><span>S/ '.$row['price_dish'].'0</span>
              </div>
              <div class="menu-ingredients">'.$row['description_dish'].'</div>
            </div>'; 
            }
        
            echo $items;
          ?>
          
        </div>

      </div>
    </section><!-- Fin Seccion Menu -->
  
    <?php
    #<!-- ======= Seccion Especialidades ======= -->
    #<!--section id="specials" class="specials">
    #  <div class="container" data-aos="fade-up">
    #    <div class="section-title">
    #      <h2>Specials</h2>
    #      <p>Consulta Nuestros Combos</p>
    #    </div>
    #    <div class="row" data-aos="fade-up" data-aos-delay="100">
    #      <div class="col-lg-3">
    #        <ul class="nav nav-tabs flex-column">
    #          <li class="nav-item">
    #            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
    #          </li>
    #          <li class="nav-item">
    #            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
    #          </li>
    #          <li class="nav-item">
    #            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
    #          </li>
    #          <li class="nav-item">
    #            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
    #          </li>
    #          <li class="nav-item">
    #            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
    #          </li>
    #        </ul>
    #      </div>
    #      <div class="col-lg-9 mt-4 mt-lg-0">
    #        <div class="tab-content">
    #          <div class="tab-pane active show" id="tab-1">
    #            <div class="row">
    #              <div class="col-lg-8 details order-2 order-lg-1">
    #                <h3>Architecto ut aperiam autem id</h3>
    #                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
    #                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
    #              </div>
    #              <div class="col-lg-4 text-center order-1 order-lg-2">
    #                <img src="assets/img/specials-1.png" alt="" class="img-fluid">
    #              </div>
    #            </div>
    #          </div>
    #          <div class="tab-pane" id="tab-2">
    #            <div class="row">
    #              <div class="col-lg-8 details order-2 order-lg-1">
    #                <h3>Et blanditiis nemo veritatis excepturi</h3>
    #                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
    #                <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
    #              </div>
    #              <div class="col-lg-4 text-center order-1 order-lg-2">
    #                <img src="assets/img/specials-2.png" alt="" class="img-fluid">
    #              </div>
    #            </div>
    #          </div>
    #          <div class="tab-pane" id="tab-3">
    #            <div class="row">
    #              <div class="col-lg-8 details order-2 order-lg-1">
    #                <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
    #                <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
    #                <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
    #              </div>
    #              <div class="col-lg-4 text-center order-1 order-lg-2">
    #                <img src="assets/img/specials-3.png" alt="" class="img-fluid">
    #              </div>
    #            </div>
    #          </div>
    #          <div class="tab-pane" id="tab-4">
    #            <div class="row">
    #              <div class="col-lg-8 details order-2 order-lg-1">
    #                <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
    #                <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
    #                <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
    #              </div>
    #              <div class="col-lg-4 text-center order-1 order-lg-2">
    #                <img src="assets/img/specials-4.png" alt="" class="img-fluid">
    #              </div>
    #            </div>
    #          </div>
    #          <div class="tab-pane" id="tab-5">
    #            <div class="row">
    #              <div class="col-lg-8 details order-2 order-lg-1">
    #                <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
    #                <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
    #                <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
    #              </div>
    #              <div class="col-lg-4 text-center order-1 order-lg-2">
    #                <img src="assets/img/specials-5.png" alt="" class="img-fluid">
    #              </div>
    #            </div>
    #          </div>
    #        </div>
    #      </div>
    #    </div>
    #  </div>
    #</section--><!-- Fin Seccion Especialidades -->
    ?>

    <?php 
    #<!-- ======= Seccion Eventos ======= -->
    #<section id="events" class="events">
    #  <div class="container" data-aos="fade-up">
    #    <div class="section-title">
    #      <h2>Events</h2>
    #      <p>Organize Your Events in our Restaurant</p>
    #    </div>
    #    <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
    #      <div class="swiper-wrapper">
    #        
    #        <div class="swiper-slide"><!-- Testimonial item -->
    #          <div class="row event-item">
    #            <div class="col-lg-6">
    #              <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
    #            </div>
    #            <div class="col-lg-6 pt-4 pt-lg-0 content">
    #              <h3>Birthday Parties</h3>
    #              <div class="price">
    #                <p><span>$189</span></p>
    #              </div>
    #              <p class="fst-italic">
    #                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
    #                magna aliqua.
    #              </p>
    #              <ul>
    #                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    #                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
    #                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    #              </ul>
    #              <p>
    #                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    #                velit esse cillum dolore eu fugiat nulla pariatur
    #              </p>
    #            </div>
    #          </div>
    #        </div><!-- End testimonial item -->
    #        <div class="swiper-slide"><!-- Testimonial item -->
    #          <div class="row event-item">
    #            <div class="col-lg-6">
    #              <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
    #            </div>
    #            <div class="col-lg-6 pt-4 pt-lg-0 content">
    #              <h3>Private Parties</h3>
    #              <div class="price">
    #                <p><span>$290</span></p>
    #              </div>
    #              <p class="fst-italic">
    #                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
    #                magna aliqua.
    #              </p>
    #              <ul>
    #                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    #                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
    #                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    #              </ul>
    #              <p>
    #                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    #                velit esse cillum dolore eu fugiat nulla pariatur
    #              </p>
    #            </div>
    #          </div>
    #        </div><!-- End testimonial item -->

    #        <div class="swiper-slide"><!-- Testimonial item -->
    #          <div class="row event-item">
    #            <div class="col-lg-6">
    #              <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
    #            </div>
    #            <div class="col-lg-6 pt-4 pt-lg-0 content">
    #              <h3>Custom Parties</h3>
    #              <div class="price">
    #                <p><span>$99</span></p>
    #              </div>
    #              <p class="fst-italic">
    #                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
    #                magna aliqua.
    #              </p>
    #              <ul>
    #                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    #                <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
    #                <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    #              </ul>
    #              <p>
    #                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
    #                velit esse cillum dolore eu fugiat nulla pariatur
    #              </p>
    #            </div>
    #          </div>
    #        </div><!-- End testimonial item -->
    #      </div>
    #      <div class="swiper-pagination"></div>
    #    </div>
    #  </div>
    #</section><!-- Fin Seccion Eventos -->
    ?>

    <!-- ======= Seccion Reservar una Mesa ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservas</h2>
          <p>Reservar una Mesa</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombres y Apellidos" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                <input type="date" name="date" class="form-control" id="date" placeholder="Fecha" min="<?php echo date("Y-m-d");?>" max="<?php echo date("Y-m-d", strtotime(date("Y-m-d")."+ 10 days"));?>" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-clock-history"></i></span>
                <select class="form-control" name="time" id="time" placeholder="Tiempo (Horas)" required>
                  <option value="1h"> 1 Hora</option>
                  <option value="2h"> 2 Horas</option>
                  <option value="3h"> 3 Horas</option>
                  <option value="4h"> 4 Horas</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <div class="input-group">
                <span class="input-group-text">#</span>
                <input type="number" class="form-control" name="people" id="people" placeholder="# de personas" min="1" max="25" required>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" max="600"></textarea>
          </div>
          <div class="mb-3">
            <div class="loading">Cargando...</div>
            <div class="error-message"></div>
            <div class="sent-message">Su solicitud de reserva fue enviada. Le devolveremos la llamada o le enviaremos un correo electrónico para confirmar su reserva. ¡Gracias!</div>
          </div>
          <div class="text-center"><button type="submit">Reservar una Mesa</button></div>
        </form>

      </div>
    </section><!-- Fin Seccion Reservar una Mesa -->

    <!-- ======= Seccion Testimonios ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonios</h2>
          <p>lo que dicen de nosotros</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide"><!-- testimonial item -->
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide"><!-- testimonial item -->
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide"><!-- testimonial item -->
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide"><!-- testimonial item -->
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide"><!-- testimonial item -->
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- Fin Seccion Testimonios -->

    <!-- ======= Seccion Galeria ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galería</h2>
          <p>Algunas fotos de Nuestro Local</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Fin Seccion Galeria -->

    <?php
    #<!-- ======= Seccion Chefs ======= -->
    #<!--section id="chefs" class="chefs">
    #  <div class="container" data-aos="fade-up">
    #    <div class="section-title">
    #      <h2>Chefs</h2>
    #      <p>Our Proffesional Chefs</p>
    #    </div>
    #    <div class="row">
    #      <div class="col-lg-4 col-md-6">
    #        <div class="member" data-aos="zoom-in" data-aos-delay="100">
    #          <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
    #          <div class="member-info">
    #            <div class="member-info-content">
    #              <h4>Walter White</h4>
    #              <span>Master Chef</span>
    #            </div>
    #            <div class="social">
    #              <a href=""><i class="bi bi-twitter"></i></a>
    #              <a href=""><i class="bi bi-facebook"></i></a>
    #              <a href=""><i class="bi bi-instagram"></i></a>
    #              <a href=""><i class="bi bi-linkedin"></i></a>
    #            </div>
    #          </div>
    #        </div>
    #      </div>
    #      <div class="col-lg-4 col-md-6">
    #        <div class="member" data-aos="zoom-in" data-aos-delay="200">
    #          <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
    #          <div class="member-info">
    #            <div class="member-info-content">
    #              <h4>Sarah Jhonson</h4>
    #              <span>Patissier</span>
    #            </div>
    #            <div class="social">
    #              <a href=""><i class="bi bi-twitter"></i></a>
    #              <a href=""><i class="bi bi-facebook"></i></a>
    #              <a href=""><i class="bi bi-instagram"></i></a>
    #              <a href=""><i class="bi bi-linkedin"></i></a>
    #            </div>
    #          </div>
    #        </div>
    #      </div>
    #      <div class="col-lg-4 col-md-6">
    #        <div class="member" data-aos="zoom-in" data-aos-delay="300">
    #          <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
    #          <div class="member-info">
    #            <div class="member-info-content">
    #              <h4>William Anderson</h4>
    #              <span>Cook</span>
    #            </div>
    #            <div class="social">
    #              <a href=""><i class="bi bi-twitter"></i></a>
    #              <a href=""><i class="bi bi-facebook"></i></a>
    #              <a href=""><i class="bi bi-instagram"></i></a>
    #              <a href=""><i class="bi bi-linkedin"></i></a>
    #            </div>
    #          </div>
    #        </div>
    #      </div>
    #    </div>
    #  </div>
    #</section--><!-- Fin Seccion Chefs -->
    ?>

    <!-- ======= Seccion Contactos ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Contáctenos</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Horarios de atención:</h4>
                <p>
                  Lunes-Sábado:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Teléfono:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- Fin Seccion Contactos -->

    

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

