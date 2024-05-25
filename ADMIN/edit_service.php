<?php
session_start();
include "connection.php";

if(!isset($_SESSION["id"]))
{
	header("location:index.php");
}

$id = $_GET["ecatid"];
$cat = $con->query("select * from service where cat_id='$id'");
$result = $cat->fetch_object();

if(isset($_POST["submit"]))
{
	$category = $_POST["category_name"];


	$exe = $con->query("update service set cat_name='$category' where cat_id='$id'");

	if($exe)
	{
		header("location:view_service.php");
	}
	else
	{
	echo "<script>alert('Somthing went wrong..')</script>";
	}
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Service</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <?php include "common/sidebar.php";?>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php include "common/header.php";?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Services</h2>
					
					
					<div class="row">
						<h3 class="title1">Update Service :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" method="post">
								<div class="form-group">
									<label for="category_name" class="col-sm-2 control-label">Service Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="category_name" name="category_name" value="<?php echo $result->cat_name;?>" >
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12" style="text-align: center;">
										<input type="submit" class="" id="submit" name="submit" value="update">
									</div>
								</div>
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include "common/footer.php";?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>