<?php

   error_reporting(0);
   session_start();
   if(file_exists('../assets/vendor/access-data/dbconnection.php')){
      include ('../assets/vendor/access-data/dbconnection.php' );
   }else{
      echo 0;
   }

   function validateLogueo($data_order,$address,$address_reference){
      if(isset($_SESSION['client_codeuser']) && isset($_SESSION['client_login'])){
         return insert_Order($_SESSION['client_codeuser'],$data_order,$address,$address_reference);
      }else{
         return 5;
      }
   }

   function insert_Client($data_client,$data_order){
      if($data_client!=null||$data_client!=""){
         $pdo=cnx_db_restaurant();
         $sql="";
         foreach ($data_client as $value){
            $sql="INSERT INTO client_restaurant (id_client, name_client, phone_client, email_client, address_client, reference_address_client) 
            VALUES (null, '$value->client_name', '$value->client_phone', '$value->client_email', '$value->client_address', '$value->client_reference')";
         }
         $result=$pdo->prepare($sql);
         $flag=$result->execute();
         if($flag==1){
            $id_client = $pdo->lastInsertId();
            // inserta una orden 
            return insert_Order($id_client,$data_order);
         }else{
            return 0;
         }
         $pdo=null;
      }
      return 0;
   }

   function insert_Order($id_client,$data_order,$address,$address_reference){
      if($id_client!=0&&($data_order!=null||$data_order!="")){
         $pdo=null;
         $pdo=cnx_db_restaurant();
         $date=date("Y/m/d H:i:s");
         $total=sum_total_order($data_order);
         # estados de una orden -> 
         #        0: pedido
         #        1: enviado
         #        2: cancelado
         # tipos de ordenes ->
         #        0: local
         #        1: delivery
         $sql="INSERT INTO orders (id_order, id_client, id_employee, datetime_order, total_order, address_order, reference_address_order, status_order, type_order, id_board) 
            VALUES (null, '$id_client', null, '$date', $total, '$address', '$address_reference', '0', '1', null)";
         $result=$pdo->prepare($sql);
         $flag=$result->execute();
         if($flag==1){
            $id_order = $pdo->lastInsertId();
            return insert_Order_Detail($id_order,$data_order);
         }else{
            return 0;
         }
         $pdo=null;
      }
      return 0;
   }

   function insert_Order_Detail($id_order,$data_order){
      if($data_order!=null||$data_order!=""){
         $pdo=null;
         $pdo=cnx_db_restaurant();
         $flag=0;
         foreach ($data_order as $value){
            $precio=floatval(str_replace('S/','',$value->precio));
            $sql="INSERT INTO order_detail (id_order_detail, id_order, id_dish, price_dish, amount_dish, comment_dish) 
            VALUES (null, '$id_order', (select d.id_dish from dish d where d.code_dish='$value->codigo'), '$precio', 1, '$value->comentario'); ";
            $result=$pdo->prepare($sql);
            $flag+=$result->execute();
         }
         if($flag>0){
            return 1;
         }else{
            return 0;
         }
         $pdo=null;
      }
      return 0;
   }

   function sum_total_order($data){
      $total=0.0;
      foreach ($data as $value){
         $precio=floatval(str_replace('S/','',$value->precio));
         $total+=$precio;
      }
      return $total;
   }


?>