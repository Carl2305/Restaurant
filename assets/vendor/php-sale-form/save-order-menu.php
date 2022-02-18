<?php

   function cnx_db_restaurant(){
      $servidor='mysql:host=localhost;dbname=restaurant';
      $user='root';
      $password='';

      try{
         $pdo=new PDO($servidor, $user, $password);	
         return $pdo;
      }catch(PDOException $e){
         print '¡Error!: ' . $e->getMessage() . "<br/>";
         die();
      }
   }

   function insert_Client($data_client,$data_order){
      $flag_return=false;
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
            $flag_return=insert_Order($id_client,$data_order);
         }else{
            $flag_return=false;
            return $flag_return;
         }
         $pdo=null;
      }
      return $flag_return;
   }

   function insert_Order($id_client,$data_order){
      $flag_return=false;
      if($id_client!=0&&($data_order!=null||$data_order!="")){
         $pdo=null;
         $pdo=cnx_db_restaurant();
         $date=date("Y/m/d H:i:s");
         $total=sum_total_order($data_order);
         $sql="INSERT INTO order_restaurant (id_order, id_client, datetime_order, total_order, status_order) 
            VALUES (null, '$id_client', '$date', $total, '0')";
         $result=$pdo->prepare($sql);
         $flag=$result->execute();
         if($flag==1){
            $id_order = $pdo->lastInsertId();
            $flag_return=insert_Order_Detail($id_order,$data_order);
         }else{
            $flag_return=false;
            return $flag_return;
         }
         $pdo=null;
      }
      return $flag_return;
   }

   function insert_Order_Detail($id_order,$data_order){
      $flag_return=false;
      if($data_order!=null||$data_order!=""){
         $pdo=null;
         $pdo=cnx_db_restaurant();
         $flag=0;
         foreach ($data_order as $value){
            $precio=floatval(str_replace('S/','',$value->precio));
            $sql="INSERT INTO order_detail_restaurant (id_order_detail, id_order, code_dish, name_dish, description_dish, url_image_dish, price_dish, amount_dish, comment_dish) 
            VALUES (null, '$id_order', '$value->codigo', '$value->nombre', '$value->descripcion', '$value->imagen', '$precio', '$value->cantidad', '$value->comentario'); ";
            $result=$pdo->prepare($sql);
            $flag+=$result->execute();
         }
         if($flag>0){
            $flag_return=true;
            return $flag_return;
         }else{
            $flag_return=false;
            return $flag_return;
         }
         $pdo=null;
      }
      return $flag_return;
   }

   function sum_total_order($data){
      $total=0.0;
      foreach ($data as $value){
         $precio=floatval(str_replace('S/','',$value->precio));
         $total+=$precio;
      }
      return $total;
   }

     // insertar un cliente y en consecuencia insertar una orden
    $data_client= $_POST['data_client'];
    $data_order=$_POST['data_order'];

     echo insert_Client(json_decode($data_client),json_decode($data_order));


    // sumar los precios de la orden
    //$data_order=$_POST['data_order'];
    //sum_total_order(json_decode($data_order));


    /*$data_order=$_POST['data_order'];

    $array_client = json_decode($data_client);
    foreach ($array_client as $value){
       echo $value->client_name;
    }

    $array_order = json_decode($data_order);
    foreach ($array_order as $value){
       echo $value->codigo;
    }*/



    
?>