

<?php

session_start();
include 'common/connection.php';

$id = $_SESSION["id"];
$vendor_id=$_GET["vid"];


$event_details=$con->query("select * from post_info where worker_id='$vendor_id'");







?>






<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:00 GMT -->
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Search Event</title>





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


<div class="section-title">
					<h2>All Event</h2>
					<!--<p>Service Hours from <span style="color: blue;">morning 10 am to evening 8 pm</span>.<br>Regular rates for <span style="color: blue;">24/7</span> service</p>-->
				</div>

<div class="container">
		<div class="row mt-30">
			<?php
                                while ($event_result=$event_details->fetch_object()) 
                                {
                                  
          

                                ?>
			<div class="col-lg-4 col-md-4">


<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="../VENDOR/images/event/<?php echo $event_result->image; ?>" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html"><?php echo $event_result->title; ?></a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i><?php echo $event_result->budget; ?></a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i><?php echo $event_result->post_date; ?></a>
		    	</li>
		    </ul>
		    <p class="card-text"><?php echo $event_result->small_description; ?></p>
		    <div class="">
		    	<ul class="list-inline mt-20">
							
		<li class="list-inline-item"><a href="view_morevent.php?eid=<?php echo $event_result->event_id; ?>" class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3">View More Details</a></li>
				</ul>
		    </div>
		   
		</div>
	</div>
</div>
</div>

<?php
}
?>
</div>
</div>
				
	


<?php include 'common/footer.php'; ?>
<!-- Footer Bottom -->


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


<!-- Mirrored from demo.themefisher.com/classimax/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:00 GMT -->
</html>