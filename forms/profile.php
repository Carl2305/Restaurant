<?php
    error_reporting(0);
    session_start();
    if(isset($_SESSION['client_login'])){
      if($_SESSION['client_login']==true){
        
      }else{
        session_destroy();
        header('location:../index.php');
        die();
      }
    }else{
      session_destroy();
      header('location:../index.php');
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
    header('Content-type: application/json; charset=utf-8');
    if(file_exists('../assets/vendor/service-data/logueo.php')){
        include ( '../assets/vendor/service-data/logueo.php' );
    }else{
        echo 0;
    }

    function UpdatePasswordClient(){
      $password=$_POST['pass'];
      $newpassword=$_POST['newpass'];
      $renewpassword=$_POST['renewpass'];
      return UpdatePasswordC($password,$newpassword,$renewpassword);
    }

    function UpdateDataClient(){      
      $name=$_POST['names'];
      $phone=$_POST['phone'];
      $mail=$_POST['email'];
      return UpdateDataClientC($name,$phone,$mail);
    }

    $typeAction=$_POST['type'];
    switch ($typeAction) {
        case 'uptpass': echo UpdatePasswordClient(); break;
        case 'update': echo UpdateDataClient(); break;
        default: echo 0; break;
    }
?>