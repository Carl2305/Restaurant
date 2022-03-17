<?php

  if(file_exists('../assets/vendor/service-data/logueo.php')){
    include ( '../assets/vendor/service-data/logueo.php' );
  }else{
    echo 0;
  }

  try {
    $email=$_POST['email_client'];
    $password=$_POST['password_client'];
    echo AccessLogin($email,$password);    
  } catch (Exception $ex) {
    echo 3;
  }

?>