<?php
session_start();
include 'common/connection.php';

if(!isset($_SESSION["id"]))
{
  header("location:index.php");
}

$id = $_SESSION["id"];

$worker = $con->query("select * from worker where worker_id='$id'");
$work = $worker->fetch_object();


$cart_details = $con->query("select customer.name,order_info.cart_id,order_info.customer_id,order_info.event_id,order_info.order_date,post_info.title,post_info.budget,post_info.post_date,post_info.image,post_info.event_id,post_info.worker_id from order_info inner join post_info on order_info.event_id = post_info.event_id inner join customer on customer.customer_id=order_info.customer_id where post_info.worker_id='$id' and order_info.status='completed'");
$order = $cart_details->num_rows;



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/ad-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:00 GMT -->
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

<?php include 'common/header.php'; ?>

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<i class="fa fa-user"></i>
						</div>
						<!-- User Name -->
						<h5 class="text-center"><?php echo $work->name; ?></h5>
					</div>
					<!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="inquiry.php">Inquiries</a></li>
              <li><a href="viewservice.php">View Service</a></li>
              <li><a href="accept_request.php">View Accept Request Services</a></li>
              <li><a href="change_password.php">Change Password</a></li>
            </ul>
          </div>
				</div>
			</div>
			<div class="col-lg-8">
				<!-- ad listing list  -->
				<div class="widget welcome-message">
					<h2>Orders Details</h2>
					
				</div>
				<!-- Edit Personal Info -->
				<div class="widget">
			<table class="table ">
            <thead>
              <tr>
                <th>Image</th>
                <th>Product Title</th>
                <th>Customer Name</th>
                <th class="text-center">Price</th>
                

              </tr>
            </thead>
            <?php 
              while($cart_result=$cart_details->fetch_object())
              {

            ?>
            <tbody>
              <tr>
                <td class="product-thumb">
                  <img width="80px" height="auto" src="images/event/<?php echo $cart_result->image;?>" alt=""></td>
                <td class="product-details">
                  <h3 class="title"><?php echo $cart_result->title; ?></h3>
                  <span class="add-id"><strong></strong><?php echo $cart_result->order_date; ?></span>
                  
                </td>
                <td><?php echo $cart_result->name; ?></td>
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
			</div>
		</div>
	</div>
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


<!-- Mirrored from demo.themefisher.com/classimax/ad-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:00 GMT -->
</html>