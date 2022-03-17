<?php

  session_start();
  if( file_exists('../assets/vendor/php-email-form/PHPMailer.php' ) && file_exists( '../assets/vendor/php-email-form/SMTP.php' )) {
    include ( '../assets/vendor/php-email-form/Exception.php' );
    include ( '../assets/vendor/php-email-form/PHPMailer.php' );
    include ( '../assets/vendor/php-email-form/SMTP.php' );
  } else {
    die( 'Unable to load the "PHP Mailer" Library!');
  }

  $the_subject = "TOP TRAVEL PERU";
  $address_to = "mogolloncarlosalberto23@gmail.com";
  $from_name = "TOP TRAVEL PERU";

  //-----------------------------------------------------------------------
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;


  if(isset($_SESSION['client_codeuser']) && isset($_SESSION['client_login'])){

    //cuando se despliegue el app, tengo que cambiar PHPMailer(true)
    $phpmailer = new  PHPMailer();
    try {
      //Server settings
      //$phpmailer->SMTPDebug = 1;
      $phpmailer->isSMTP(); // use SMTP
      $phpmailer->Host = "smtp.gmail.com"; // GMail
      $phpmailer->SMTPAuth = true;
      // ---------- datos de la cuenta de Gmail -------------------------------
      $phpmailer->Username = 'ecommercegamestore@gmail.com';
      $phpmailer->Password = 'G4MeSt0R32021';
      $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
      $phpmailer->Port = 587;

      //Recipients
      $phpmailer->setFrom($phpmailer->Username,$from_name);
      $phpmailer->addAddress($address_to);

      //Content
      $phpmailer->IsHTML(true);
      $phpmailer->Subject = $the_subject;	
      $phpmailer->Body .= "<h3 style='color:#0000FF;'>Saludos y Exitos desde TOPTRAVELPERU.COM,</h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> INFORMACION DE: DESIGN YOUR TRAVEL </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> LUGARES QUE DESEA VISITAR: LIMA </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> LUGAR DE SALIDA: PIURA </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> FEHCA DE SALIDA: 19-02-2020 </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> LUGAR DE RETORNO: CALLAO </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> FECHA DE RETORNO: 20-12-2022 </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> TIPO DE HOSPEDAJE: HOTEL </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> CUANTOS VIAJA?: 6 </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> NOMBRE DEL SOLICITANTE: CARLOS </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> CORREO DEL SOLICITANTE: ADMIN@GMAIL.COM </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> TELEFONO DEL SOLICITANTE: 924859622 </h3>";
      $phpmailer->Body .= "<h3 style='color:#000000; text-align: justify; '> CUANTO DINERO DISPONE: 1569.00 </h3>";
      $phpmailer->Body .= "<p>-------------------------</p>";
      $phpmailer->Body .= "<p>Mensaje enviado desde TOPTRAVELPERU.COM </p>";
      $phpmailer->Body .= "<p>Desarrollado por: Ing. Jesus Cuauro - <b> Fecha y Hora: ".date("d-m-Y h:i:s")."</b></p>";
      
    } catch (Exception $e) {
      echo "No se pudo enviar el mensaje. Error de correo: {$phpmailer->ErrorInfo}";
    }
    //$phpmailer->Send();
    if($phpmailer->Send()){
      // almacena la reserva en la db.
      // crear una funcion para almacennar una reserva.
    }else{
      echo 'No se pudo reservar. Intente más tarde.';
    }
  }else{
    echo 'Antes de Reservar debes Loguearte.';
  }

?>
