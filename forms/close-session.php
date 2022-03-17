<?php
  if(file_exists('../assets/vendor/service-data/logueo.php')){    
    include ( '../assets/vendor/service-data/logueo.php' );
  }else{
    echo 0;
  }

  try {
    echo LogOut();   
  } catch (Exception $ex) {
    
  }
?>