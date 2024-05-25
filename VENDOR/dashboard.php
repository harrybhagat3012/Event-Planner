<?php

session_start();
include "common/connection.php";

if(!isset($_SESSION["id"]))
{
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:42 GMT -->
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

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Need Help With Home Service?</h1>
					<p>We Convert you with the best Home Service Professionals in your city.</p>
					<div class="short-popular-category-list text-center">
						
					</div>

				</div>
				<!-- Advance Search -->
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--==========================================
=            All Category Section            =
===========================================-->
<br><br><br>

<section class="page-title">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>All Event</h3>
      </div>
    </div>
  </div></section>

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				
				<div class="row">
					<!-- Category list -->
<div class="col-lg-4 col-md-4">


<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/food.jpg" alt="Card image cap">
			</a>
		</div>
</div>

</div>
</div>
<div class="col-lg-4 col-md-4">


<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/slider.jpg" alt="Card image cap">
			</a>
		</div>


</div>


</div>
</div>
<div class="col-lg-4 col-md-4">


<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/food.jpg" alt="Card image cap">
			</a>
		</div>


</div>





</div>
</div>
<div class="col-lg-4 col-md-4">


<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/dj.jpg" alt="Card image cap">
			</a>
		</div>


</div>


</div>
</div>
<div class="col-lg-4 col-md-4">


<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/slider.jpg" alt="Card image cap">
			</a>
		</div>


</div>


</div>
</div>
<div class="col-lg-4 col-md-4">


<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/dj.jpg" alt="Card image cap">
			</a>
		</div>


</div>


</div>
</div>

		</div>
	</div>
	<!-- Container End -->
</section>




<!--============================
=            Footer            =
=============================-->

<?php include "common/footer.php"; ?>

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


<!-- Mirrored from demo.themefisher.com/classimax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:52 GMT -->
</html>



