<?php

  if(file_exists('../assets/vendor/service-data/logueo.php')){
    include ( '../assets/vendor/service-data/logueo.php' );
  }else{
    echo 0;
  }

  try {
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $user= $_POST['user'];
    $password=$_POST['password'];
    $renewpassword=$_POST['renewpassword'];
    if($password==$renewpassword){
      $pass=password_hash($password,PASSWORD_DEFAULT);
      $response=RegisterClient($name,$phone,$email,$user,$pass);
      if($response==1){
        echo 'OK';
      }else{
        echo 'No se pudo registrar, intente más tarde';
      }
    }else{
      echo 'Las contraseñas no son iguales';
    }
    
  } catch (Exception $ex) {  }

?>