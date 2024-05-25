<?php
session_start();
include 'common/connection.php';

if(!isset($_SESSION["id"]))
{
  header("location:index.php");
}

$id = $_SESSION["id"];

$customer = $con->query("select * from worker where worker_id='$id'");
$raw = $customer->fetch_object();

$city = $con->query("select * from city");

$area = $con->query("select * from area");

if(isset($_POST["submit"]))
{
	$name = $_POST["name"];
	$contact = $_POST["contact"];
	$address = $_POST["address"];
	$pincode = $_POST["pincode"];
	$city2 = $_POST["city"];
	$area2 = $_POST["area"];
	$experiance = $_POST["experiance"];

	$result = $con->query("update worker set name='$name',contact='$contact',address='$address',pincode='$pincode',city_id='$city2',area_id='$area2',experiance='$experiance' where worker_id='$id' ");
	if($result)
	{
		echo "<script>alert('Data Updated Sucessfully')</script>";

		header('location:profile.php');
	}
	else
	{
		echo "<script>alert('Somthing went wrong...')</script>";
	}
}
if(isset($_POST["update"]))
{
	$email = $_POST["email"];
	$nemail = $_POST["nemail"];

	if($email==$raw->email)
	{
		$change = $con->query("update worker set email='$nemail' where worker_id='$id'");
		if($change)
		{
			echo "<script>alert('Email Updated Sucessfully')</script>";
		}
		else
		{
			echo "<script>alert('Somthing went wrong..')</script>";
		}
	}
	else
	{
		echo "<script>alert('Email is wrong..')</script>";
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
        <h3>Profile</h3>
      </div>
    </div>
  </div>
  <!-- Container End -->
</section>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Personal Information</h3>
							<form method="post">
								
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" value="<?php echo $raw->name; ?>">
								</div>

								<div class="form-group">
									<label for="contact">Contact</label>
									<input type="text" class="form-control" id="contact" name="contact" value="<?php echo $raw->contact; ?>">
								</div>
								
								<div class="form-group">
									<label for="address">Address</label>
									<textarea class="form-control" id="address" name="address"><?php echo $raw->address;; ?></textarea>
								 </div>

								<div class="form-group">
									<label for="pincode">pin Code</label>
									<input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $raw->pincode; ?>">
								</div>

								<div class="form-group">
									<label for="city">City</label>
									<select class="form-control" id="city" name="city">
										<option value="">--select city--</option>
										<?php
											while($city1 = $city->fetch_object())
											{
										?>
										<option value="<?php echo $city1->city_id; ?>" <?php if($raw->city_id==$city1->city_id){echo "selected";} ?>><?php echo $city1->city_name; ?></option>
										<?php
											}
										?>
									</select>
								</div>

								<div class="form-group">
									<label for="area">Area</label>
									<select class="form-control" id="area" name="area">
										<option value="">--select area--</option>
										<?php
											while($area1 = $area->fetch_object())
											{
										?>
										<option value="<?php echo $area1->area_id; ?>" <?php if($raw->area_id==$area1->area_id){echo "selected";} ?>><?php echo $area1->area_name; ?></option>
										<?php
											}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="experiance">Experiance</label>
									<input type="text" class="form-control" id="experiance" name="experiance" value="<?php echo $raw->experiance; ?>">
								</div>
								<!-- Submit button -->
								<button class="btn btn-transparent" id="submit" name="submit">Save My Changes</button>
							</form>
						</div>
					</div>
					
					<div class="col-lg-6 col-md-6">
						<!-- Change Email Address -->
					<div class="widget change-email mb-0">
						<h3 class="widget-header user">Edit Email Address</h3>
						<form method="post">
							<!-- Current Password -->
							<div class="form-group">
								<label for="email">Current Email</label>
								<input type="text" class="form-control" id="email" name="email">
							</div>
							<!-- New email -->
							<div class="form-group">
								<label for="nemail">New email</label>
								<input type="text" class="form-control" id="nemail" name="nemail">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent" id="update" name="update">Change email</button>
						</form>
					</div>
					</div>
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