<?php

session_start();
include "common/connection.php";

if(!isset($_SESSION["id"]))
{
	header("location:index.php");
}
$id = $_SESSION["id"];

$worker = $con->query("select * from worker where worker_id='$id'");
$raw = $worker->fetch_object();
$cust = $raw->worker_id;

if(isset($_POST["submit"]))
{
	$date = date('Y-m-d');
	$message = trim($con->real_escape_string($_POST["message"]));

	$exe = $con->query("insert into feedback_worker(worker_id,date,message) values('$cust','$date','$message')");
	if($exe)
	{
		echo "<script>alert('Feedback sent sucessfully')</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong..')</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:58 GMT -->
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Event-Planner</title>

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
						<h5 class="text-center"><?php echo $raw->name; ?></h5>
					</div>
					<!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="feedback.php">Feedback</a></li>
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="contact_us1.php">Contact Us </a></li>
              <li><a href="change_password.php">Change Password</a></li>
            </ul>
          </div>
				</div>
			</div>
			<div class="col-lg-8">
				<!-- Edit Profile Welcome Text -->
				<section class="page-title">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>Feedback</h3>
      </div>
    </div>
  </div>
</section>
				
				
					<div class="widget change-email mb-0">
						<h3 class="widget-header user">Give Feedback About Service</h3>
						<form method="post">			

							<div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" id="message" name="message"></textarea>
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent" id="submit" name="submit">Submit</button>
						</form>
					</div>
			</div>
				
		</div>
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