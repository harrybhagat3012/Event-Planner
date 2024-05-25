

<?php

session_start();
include 'common/connection.php';

$id = $_SESSION["id"];
$event_id=$_GET["eid"];




$event_details=$con->query("select * from post_info where event_id='$event_id'");


$event_result=$event_details->fetch_object();
$event_result->event_id;

$category = $con->query("select * from service where cat_id='$event_result->cat_id'");
$cat1 = $category->fetch_object();

$vendor_name = $con->query("select * from worker where worker_id='$event_result->worker_id'");
$vendor1 = $vendor_name->fetch_object();





$cart_eventid=$event_result->event_id;







$cat_id = $event_result->cat_id;
$event_id = $event_result->event_id;
$vendor_id = $event_result->worker_id;


$_SESSION["cid"] = $cat_id;
$_SESSION["eid"] = $event_id;
$_SESSION["vid"] = $vendor_id;


if (isset($_POST["submit"])) 
{
	  

 	$id 	   = $_SESSION["id"];
	$event_id  = $_SESSION["eid"];

	$date = date('Y-m-d');
	$price = $_POST['budget'];




	$cart_insert=$con->query("insert into order_info(customer_id,event_id,order_date,price)values('$id','$event_id','$date','$price')");

		if($cart_insert) 
		{
			$o_id = $con->insert_id;
			$_SESSION['order_id'] = $o_id;
			$_SESSION['price'] = $price;
			header('location:cart.php');
		}
		else
		{
			echo "<script>alert('Failed to Insert')</script>";
		}
}






?>





<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:00 GMT -->
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>View More Event</title>

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
<!--=================================
=            Single Blog            =
==================================-->
<section class="blog single-blog section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article class="single-post">
					<h2><?php echo $event_result->title; ?></h2>
					<ul class="list-inline">
						<li class="list-inline-item">by <a href="user-profile.html"><?php echo $vendor1->name; ?></a></li>
						<li class="list-inline-item"><?php echo $event_result->post_date; ?></li>
					</ul>
					<img src="../VENDOR/images/event/<?php echo $event_result->image; ?>" height="500" width="500" alt="article-01">
					<h6>Small 	Description</h6>
					<p><?php echo $event_result->small_description; ?></p>
					<h6>Large Description</h6>
					<p><?php echo $event_result->description; ?></p>

					<p></p>
					
				</article>

				<div class="product-slider-item my-4" data-image="images/products/products-2.jpg">
							<img class="d-block img-fluid w-100" src="../VENDOR/images/event/<?php echo $event_result->t1; ?>" alt="Second slide">
						</div>
						<div class="product-slider-item my-4" data-image="images/products/products-3.jpg">
							<img class="d-block img-fluid w-100" src="../VENDOR/images/event/<?php echo $event_result->t2; ?>" alt="Third slide">
						</div>
						<div class="product-slider-item my-4" data-image="images/products/products-1.jpg">
							<img class="d-block img-fluid w-100" src="../VENDOR/images/event/<?php echo $event_result->t3; ?>" alt="Third slide">
						</div>
						

				
	
			</div>


			<div class="col-lg-4">
				<div class="sidebar">
					<!-- Search Widget -->
					<!--<div class="widget price text-center">
						<h4>Price</h4>
						<p><?php echo $event_result->budget; ?><?php echo " " ?>Rupees.</p>
					</div>-->
					<!-- Category Widget
					<div class="widget category">
						 Widget Header -->
						<!--<h5 class="widget-header">Categories</h5>
						<ul class="category-list">

							<li><a href="category.html">Title Name<span class="float-right"><?php echo $event_result->title; ?></span></a></li>
						
							<li><a href="category.html">Category<span class="float-right"><?php echo $cat1->cat_name; ?></span></a></li>
							<li><a href="category.html">Vendor Name<span class="float-right"><?php echo $vendor1->name; ?></span></a></li>

						</ul>

						<ul class="list-inline mt-20">
							
							<li class="list-inline-item">
								<form method="post">
								<input type="submit" name="submit" value="Add To Cart" class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3">
								</form>
							</li>
						</ul>-->
					</div>


												<!-- product card -->






					<div class="widget map product-item bg-light">
						<div class="card">
							<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="../VENDOR/images/event/food.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html">VEG Food Price =<?php echo " " ?><?php echo $event_result->veg; ?>PER PLATE</a></h4>
		    <h4 class="card-title"><a href="single.html">NON VEG Food   =<?php echo " " ?><?php echo $event_result->nveg; ?>PER PLATE</a></h4>
		    
		    <p class="card-text"><?php echo $event_result->fdesc; ?></p>
		    
		</div>
						</div>
					</div>
					<!-- Rate Widget -->
					<div class="widget map product-item bg-light">
						<div class="card">
							<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="../VENDOR/images/event/dj.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="single.html">Music Price =<?php echo " " ?><?php echo $event_result->music; ?>PER Event</a></h4>
		   
		    
		  <!-- <p class="card-text"><?php echo $event_result->fdesc; ?></p> -->
		    
		</div>
						</div>
					</div>
					<!-- Archive Widget -->

		<div class="widget price text-center">
						<h4>Price</h4>
						<p><?php echo $event_result->budget; ?><?php echo " " ?>Rupees.</p>
						
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Categories</h5>
						<ul class="category-list">

							<li><a href="category.html">Title Name<span class="float-right"><?php echo $event_result->title; ?></span></a></li>
						
							<li><a href="category.html">Category<span class="float-right"><?php echo $cat1->cat_name; ?></span></a></li>
							<li><a href="category.html">Vendor Name<span class="float-right"><?php echo $vendor1->name; ?></span></a></li>

						</ul>

						<ul class="list-inline mt-20">
							
							<li class="list-inline-item">
								<form method="post">
									<input type="hidden" id="budget" name="budget" value="<?php echo $event_result->budget; ?>">
								<input type="submit" name="submit" value="Add To Cart" class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3">
								</form>
							</li>
						</ul>
					</div>
		
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


<!-- Mirrored from demo.themefisher.com/classimax/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:00 GMT -->
</html>
