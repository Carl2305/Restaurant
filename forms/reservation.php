<?php
  if(file_exists('../assets/vendor/service-data/save-order-menu.php')){
    include ( '../assets/vendor/service-data/save-order-menu.php' );
  }else{
    echo 0;
  }

  function registerOrder(){
    $address= $_POST['address'];
    $address_reference=$_POST['addressreference'];
    $data_order=$_POST['data_order'];
    return validateLogueo(json_decode($data_order),$address,$address_reference);
  }


  $typeAction= $_POST['type'];
  switch ($typeAction) {
    case 'registerorder': echo registerOrder(); break;
    //case 'registerbooking': echo registerBooking(); break;
    default: echo 0; break;
  }

?>