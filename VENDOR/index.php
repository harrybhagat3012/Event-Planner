<?php
session_start();
include 'common/connection.php';

if(isset($_POST["submit"]))
{
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = $con->query("select * from worker where email='$email' && password='$password'");
  $rowcount = $result->num_rows;

  if($rowcount!=0)
  {
    $row = $result->fetch_object();
    $id = $row->worker_id;
    $_SESSION["id"] = $id;
    header('location:dashboard.php');
  }
  else
  {
    echo "<script>alert('Email or Password wrong')</script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:00 GMT -->
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

<?php include 'common/header1.php';?>

<section class="page-title">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>Log In</h3>
      </div>
    </div>
  </div>
  <!-- Container End -->
</section>


<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border">
          <h3 class="bg-gray p-4">Login</h3>
          <form method="post">
            <fieldset class="p-4">
              <input class="form-control mb-3" type="text" id="email" name="email" placeholder="Email" required>
              <input class="form-control mb-3" type="password" id="password" name="password" placeholder="Password" required>
              
              <button type="submit" id="submit" name="submit" class="btn btn-primary font-weight-bold mt-3">Log in</button>
              
              <a class="mt-3 d-block text-primary" href="register.php">Don't have an Account?Register Now</a>
            </fieldset>
          </form>
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


<!-- Mirrored from demo.themefisher.com/classimax/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:01 GMT -->
</html>