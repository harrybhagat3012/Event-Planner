<?php 

include 'common/connection.php';

$inquiry = $con->query("select * from inquiry");
$feedback = $con->query("select * from feedback");
$workspace = $con->query("select * from worker");
$user = $con->query("select * from customer");
$category = $con->query("select * from service");

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dashboard</title>
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
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
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
<style type="text/css">
    .footer{
        position: fixed;
        left: 0;
        bottom: 0;
    }
</style>
    
</head> 
<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <!--left-fixed -navigation-->
        <aside class="sidebar-left">
        <?php include "common/sidebar.php"; ?>
        </aside>
        </div>
        <!--left-fixed -navigation-->
        
        <!-- header-starts -->
        <?php include "common/header.php"; ?>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
            <div class="col_3">
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-align-justify icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $category->num_rows; ?></strong></h5>
                      <span>Total Category</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $inquiry->num_rows; ?></strong></h5>
                      <span>Inquiries</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-edit dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $feedback->num_rows; ?></strong></h5>
                      <span>Feedbacks</span>
                    </div>
                </div>
             </div>
             <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $workspace->num_rows; ?></strong></h5>
                      <span>Total Vendor</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $user->num_rows; ?></strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
             </div>
            <div class="clearfix"> </div>
        </div>

    <!--footer-->
    <?php include "common/footer.php"; ?>
    <!--//footer-->
    
    </div>

    
        
    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
    
    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
      $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->
    
    
    <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
    <!-- //Bootstrap Core JavaScript -->
    
</body>
</html>