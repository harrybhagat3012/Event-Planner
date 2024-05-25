<?php
session_start();

include'common/connection.php';

$order_id = $_SESSION['order_id'];
$con->query("update order_info set status='completed' where cart_id = '$order_id'");



?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:58 GMT -->
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Event Planner</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="images/favicon.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


<?php include "common/header.php"; ?>
<!--==================================
=            User Profile            =
===================================-->
<section class="user-profile section">
    <div class="container">
         <div class="checkout-area area-padding">
            <div class="container">
                <br><br><br><br><br><br>
                <div class="row">
                    <br>
                          <h1 style="color: green; font-style: italic; text-align: center;" >Your Order has been Placed Successfully</h1><br/>
                         
                </div>
                 <br/><h3>Want to continue shopping ? <a href="search_event.php"> Click Here ?</a></h3>
                
            </div>
        </div> <br/><br/><br/><br/><br/><br/><br/><br/><br/>
      </div>
    </section>
<!--============================
=            Footer            =
=============================-->


<?php include 'common/footer.php' ?>

<!-- 
Essential Scripts
=====================================-->
<script src="plugins/jquery/jquery.min.html"></script>
<script src="plugins/bootstrap/popper.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/bootstrap/bootstrap-slider.js"></script>

<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/map.js" defer></script>

<script src="js/script.js"></script>

</body>


<!-- Mirrored from demo.themefisher.com/classimax/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:58 GMT -->
</html>