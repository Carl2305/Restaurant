<?php

  error_reporting(0);
  session_start();
  if(file_exists('../assets/vendor/access-data/dbconnection.php')){
    include ('../assets/vendor/access-data/dbconnection.php' );
  }else{
    echo 0;
  }

  function AccessLogin($user, $password){
    $pdo=cnx_db_restaurant();
    $contador=0;
    $sql="SELECT id_client, name_client, email_client, phone_client, password_client, username_client FROM client where email_client=:user";
    $result=$pdo->prepare($sql);
    $result->execute(array(":user"=>$user));
    while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
        if(password_verify($password,$row['password_client'])){
            $contador++;
            $_SESSION['client_codeuser']=$row['id_client'];
            $_SESSION['client_timesession']=time();
            $_SESSION['client_login']=true;
            $_SESSION['client_name']=$row['name_client'];
            $_SESSION['client_emailuser']=$row['email_client'];
            $_SESSION['client_nameuser']=$row['username_client'];
            $_SESSION['client_phone']=$row['phone_client'];
        }          
    }
    $result->closeCursor();
    $pdo=null;
    if($contador>0){
        return 1;
    }else{
        return 0;
    }
  }

  function RegisterClient($name,$phone,$email,$user,$password){
    $pdo=cnx_db_restaurant();
    $sql="";
    $sql="INSERT INTO client (id_client, name_client, phone_client, email_client, username_client, password_client) VALUES (NULL, '$name', '$phone', '$email', '$user', '$password')";
    $result=$pdo->prepare($sql);
    $flag=$result->execute();
    $pdo=null;
    if($flag==1){
       return 1;
    }else{
       return 0;
    }
  }

  function ValidatePassword($user){
      $pdo=cnx_db_restaurant();
      $contador=0;
      $hash="";
      $sql="SELECT password_client FROM client WHERE id_client=:user";
      $result=$pdo->prepare($sql);
      $result->execute(array(":user"=>$user));
      while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
          $contador++;
          $hash=$row['password_client'];
      }
      $result->closeCursor();
      $pdo=null;
      if($contador>0){
          return $hash;
      }else{
          return null;
      }
  }

  function UpdatePasswordC($password,$newpassword,$renewpassword){
    $user=$_SESSION['client_codeuser'];
    if(($password!=null||$password!="")&&($newpassword!=null||$newpassword!="")&&($renewpassword!=null||$renewpassword!="")){
        if(password_verify($password,ValidatePassword($user))){
            if($newpassword==$renewpassword){
                $nam=password_hash($newpassword,PASSWORD_DEFAULT);
                $flag=0;
                $pdo=cnx_db_restaurant();
                $sql="update client set password_client='$nam' where id_client=$user";
                $result=$pdo->prepare($sql);
                $flag=$result->execute();
                if($flag==1){
                    session_destroy();
                    return 4;
                    die();
                }else{
                    return 3;
                }
            }else{
                return 2;
            }
        }else{
            return 1;
        }
    }else{
        return 0;
    }
  }
  
  function UpdateDataClientC($name,$phone,$mail){
    if(isset($_SESSION['client_codeuser'])){
      $user=$_SESSION['client_codeuser'];
      $flag=0;
      $pdo=cnx_db_restaurant();
      $sql="update client set name_client='$name', phone_client='$phone', email_client='$mail' where id_client=$user";
      $result=$pdo->prepare($sql);
      $flag=$result->execute();
      if($flag==1){
        $pdo=null;
        $pdo=cnx_db_restaurant();
        $sql="SELECT name_client, email_client, phone_client FROM client where id_client=:user";
        $result=$pdo->prepare($sql);
        $result->execute(array(":user"=>$user));
        while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
          $_SESSION['client_name']=$row['name_client'];
          $_SESSION['client_emailuser']=$row['email_client'];
          $_SESSION['client_phone']=$row['phone_client'];
        }
          return 1;
      }else{
          return 0;
      }
    }    
  }

  function LogOut(){
    session_start();
    session_destroy();
    die();
  }
?>