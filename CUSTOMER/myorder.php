

<?php

session_start();
include 'common/connection.php';

$id = $_SESSION["id"];



$user_details=$con->query("select * from customer where customer_id='$id'");
$user_result=$user_details->fetch_object();



$cart_details = $con->query("select order_info.cart_id,order_info.customer_id,order_info.event_id,order_info.order_date,post_info.title,post_info.budget,post_info.post_date,post_info.image from order_info inner join post_info on order_info.event_id = post_info.event_id where customer_id='$id' and order_info.status='completed'");
$order = $cart_details->num_rows;
 $cart_result=$cart_details->fetch_object(); 
 

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:56 GMT -->
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>View Cart</title>

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

<?php include'common/header.php'; ?>
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
      <div class="col-lg-4">
        <div class="sidebar">
          <!-- User Widget -->
          <div class="widget user-dashboard-profile">
            <!-- User Image -->
            <div class="profile-thumb">
              <i class="fa fa-user"></i>
            </div>
            <!-- User Name -->
            <h5 class="text-center"><?php echo $user_result->name;  ?></h5>
            
            
          </div>
          <!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="feedback.php">Feedback</a></li>
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="contact_us.php">Contact Us </a></li>
              <li><a href="change_password.php">Change Password</a></li>
            </ul>
          </div>
          
          <!-- delete-account modal -->
          <!-- delete account popup modal start-->
<!-- Modal -->
<div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
        <h6 class="py-2">Are you sure you want to delete your account?</h6>
        <p>Do you really want to delete these records? This process cannot be undone.</p>
        <textarea class="form-control" name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
      </div>
      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-center">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>
<!-- delete account popup modal end-->
          <!-- delete-account modal -->

        </div>
      </div>

      <div class="col-lg-8">
        <!-- Recently Favorited -->
   
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">Order Details</h3>
          <table class="table product-dashboard-table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Product Title</th>
                
                <th class="text-center">Price</th>
                

              </tr>
            </thead>
            <?php 
              if($order == 1)
              {

            ?>
            <tbody>
              <tr>
                <td class="product-thumb">
                  <img width="80px" height="auto" src="../VENDOR/images/event/<?php echo $cart_result->image;?>" alt=""></td>
                <td class="product-details">
                  <h3 class="title"><?php echo $cart_result->title; ?></h3>
                  <span class="add-id"><strong></strong><?php echo $cart_result->order_date; ?></span>
                  
                </td>

                <td class="product-category"><span class="categories"><?php echo $cart_result->budget; ?></span></td>
                <td class="action" data-title="Action">
                  
                </td>
              </tr>
            </tbody>
            <?php 
              }
            ?>
          </table>
          

        </div>
      

        <!-- pagination -->
        
        <!-- pagination -->

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>

<!--============================
=            Footer            =
=============================-->
<?php include 'common/footer.php'; ?>

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


<!-- Mirrored from demo.themefisher.com/classimax/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:57 GMT -->
</html>