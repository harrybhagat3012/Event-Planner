<?php

include 'common/connection.php';
 $id=$_GET["cartid"];



 $delete_cart=$con->query("delete from order_info where cart_id='$id'");

 if ($delete_cart) 
 {
  	header('location:cart.php');
 }


?>