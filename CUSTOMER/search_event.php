<?php
error_reporting(0);
session_start();
include 'common/connection.php';

$id = $_SESSION["id"];


$city_name=$con->query("select * from city");
$area_name=$con->query("select * from area");
$category=$con->query("select * from service");

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:00 GMT -->
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Search Event</title>

  <!-- ** Mobile Specific Metas ** -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<script type="text/javascript">			
			function getarea()
			{
				var city_id = $("#city_name").val();

				$.ajax({
					type: "POST",
					url : "newarea.php",
					data: "cid="+city_id,
					success:function(ans)
					{
						$("#area_name").html(ans);
					}
				});
			}
		</script>

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

<section class="page-title">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>Search Event</h3>
      </div>
    </div>
  </div>
</section>

<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<section class="page-search">
	
				<!-- Advance Search -->
				<div class="category-search-filter">
					<form method="post">
						<div class="form-row align-items-center">

							<div class="form-group col-lg-3 col-md-6">
								<select class="w-100 form-control my-2 my-lg-0" id="city_name" name="city" onchange="getarea()">
									<option>Select City</option>
									<?php
									while($city_result=$city_name->fetch_object()) 
									{
										
									
									?>
									<option value="<?php echo $city_result->city_id; ?>"><?php echo $city_result->city_name; ?></option>
									<?php
									}
									?>
				
								</select>
							</div>
							<div class="form-group col-lg-3 col-md-6">
								<select class="w-100 form-control my-2 my-lg-0" id="area_name" name="area">
									<option>Select Area</option>
									<?php
									while($area_result=$area_name->fetch_object()) 
									{
										
									
									?>
									<option value="<?php echo $area_result->area_id; ?>"><?php echo $area_result->area_name; ?></option>
										<?php
									}
									?>
									
								</select>
							</div>
							<div class="form-group col-lg-3 col-md-6">
								<select class="w-100 form-control my-2 my-lg-0" name="cat">
									<option>Choose Event</option>
									<?php
									while($cat_result=$category->fetch_object()) 
									{
										
									
									?>
									<option value="<?php echo $cat_result->cat_id;?>"><?php echo $cat_result->cat_name; ?></option>
									<?php
									}
									?>
									
								</select>
							</div>
							<div class="form-group col-xl-2 col-lg-3 col-md-6">
								<input type="submit" name="submit" value="Search" class="btn btn-primary active w-100">

								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
				
	
<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Vendors</h2>
					<!--<p>Service Hours from <span style="color: blue;">morning 10 am to evening 8 pm</span>.<br>Regular rates for <span style="color: blue;">24/7</span> service</p>-->
				</div>

				<?php
				 if (isset($_POST['submit'])) 
			{

					$city_id = $_POST["city"];
					$area_id = $_POST["area"];
					$category = $_POST["cat"];

 					$vendor_data=$con->query("select * from worker where city_id='$city_id' and area_id='$area_id' and cat_id='$category'");
			}	
	
				?>
				<div class="row">

					<?php
                                while ($vendor_result=$vendor_data->fetch_object()) 
                                {

                                ?>

					<div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
						<div class="category-block">
							<div class="header">
								<a href="view_event.php?vid=<?php echo $vendor_result->worker_id; ?>"><i class="fa fa-laptop icon-bg-1"></i></a>
								<h4><a href="view_event.php?vid=<?php echo $vendor_result->worker_id; ?>"><?php echo $vendor_result->name ?></a></h4>
							</div>
							<ul class="category-list">
								<li><a href="view_event.php?vid=<?php echo $vendor_result->worker_id; ?>">Email<span><?php echo $vendor_result->email ?><span></a></li>
								<li><a href="view_event.php?vid=<?php echo $vendor_result->worker_id; ?>">Contact<span><?php echo $vendor_result->contact ?></span></a></li>
								<li><a href="view_event.php?vid=<?php echo $vendor_result->worker_id; ?>">Experince<span><?php echo $vendor_result->experiance ?></span></a></li>
								
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
			<?php
			}
			?>

				</div>

		
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


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