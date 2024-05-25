<?php
session_start();
include 'common/connection.php';

if(!isset($_SESSION["id"]))
{
  header("location:index.php");
}

$id = $_SESSION["id"];

if(isset($_POST["submit"]))
{
  $name = $_POST["name"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $date = $_POST["date"];

  $result = $con->query("insert into inquiry(name,email,contact,subject,message,date) values('$name','$email','$contact','$subject','$message','$date')");

  if($result)
  {
    echo "<script>alert('Data inseted sucessfully')</script>";
  }
  else
  {
    echo "<script>alert('Something went wrong...')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:58 GMT -->
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

<?php include 'common/header.php'; ?>

<!-- page title -->
<!--================================
=            Page Title            =
=================================-->
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3>Contact Us</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<!-- page title -->

<!-- contact us start-->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-us-content p-4">
                    <h1>Contact Us</h1>
                    <h2 class="pt-3">Easy Ways to Talk to Us</h2>
                    <p class="pt-3 pb-5">If you have additional quistions about house services or would like to speak with a service on Hi-Fix representative you mail us at one the address.</p>
                </div>
            </div>
            <div class="col-md-6">
                    <form method="post">
                        <fieldset class="p-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 py-2">
                                        <input type="text" id="name" name="name" placeholder="Name *" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6 pt-2">
                                        <input type="text" id="contact" name="contact" placeholder="Contact *" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <input type="email" id="email" name="email" placeholder="Email *" class="form-control" required>

                            <input type="text" id="subject" name="subject" placeholder="Subject *" class="border w-100 p-3 mt-3 mt-lg-4" required>

                            <textarea name="message" id=""  placeholder="Message *" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>

                            <input type="date" id="date" name="date" class="border w-100 p-3 mt-3 mt-lg-4" required>

                            <div class="btn-grounp">
                                <button id="submit" name="submit" type="submit" class="btn btn-primary mt-2 float-right">SUBMIT</button>
                            </div>
                        </fieldset>
                    </form>
            </div>
        </div>
    </div>
</section>
<!-- contact us end -->

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


<!-- Mirrored from demo.themefisher.com/classimax/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:32:58 GMT -->
</html>