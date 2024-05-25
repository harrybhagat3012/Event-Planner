<?php

include "common/connection.php";

if(isset($_POST["submit"]))
{
  $name = $_POST["name"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
  $pincode = $_POST["pincode"];
  $city2 = $_POST["city"];
  $area2 = $_POST["area"];
  $pass = $_POST["pass"];
  $cpass = $_POST["cpass"];

  $user = $con->query("select * from customer where email='$email' & password='$pass'");
  $rowcount = $user->num_rows;

  if($rowcount == 0)
  {
    if($pass == $cpass)
    {
      $exe = $con->query("insert into customer(name,email,contact,address,pincode,city_id,area_id,password) values('$name','$email','$contact','$address','$pincode','$city2','$area2','$pass')");

      if($exe)
      {
        echo "<script>alert('Register Sucessfully')</script>";
      }
      else
      {
        echo "<script>alert('Something went wrong...')</script>";
      }
    }
    else
    {
      echo "<script>alert('Password mismatched')</script>";
    }
  }
  else
  {
    echo "<script>alert('Already registered')</script>";
  }
}

$city = $con->query("select * from city");
$area = $con->query("select * from area");

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Event Planner</title>

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

<?php include "common/header1.php"; ?>

<section class="page-title">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>Registration</h3>
      </div>
    </div>
  </div>
  <!-- Container End -->
</section>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                   <img src="images/register.png" width="100%" height="80%">
            </div>
            <div class="col-md-8">
                    <form method="post">
                        <fieldset class="p-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 py-2">
                                        <input class="form-control mb-3" type="text" id="name" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="col-lg-6 py-2">
                                        <input class="form-control mb-3" type="text" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 py-2">
                                    <input class="form-control mb-3" type="text" id="contact" name="contact" placeholder="Contact" required>
                                  </div>
                                  <div class="col-lg-6 py-2">
                                    <textarea class="form-control mb-3" id="address" name="address" placeholder="Address"></textarea>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 py-2">
                                   <select class="form-control mb-3" id="area" name="area">
                                      <option value="">--select area--</option>
                                      <?php
                                        while($area1=$area->fetch_object())
                                       {
                                     ?>
                                     <option value="<?php echo $area1->area_id; ?>"><?php echo "$area1->area_name";?></option>
                                     <?php
                                       }
                                     ?>
                                  </select>
                                  </div>
                                  <div class="col-lg-6 py-2">
                                    <select class="form-control mb-3" id="city" name="city">
                                       <option value="">--select city--</option>
                                       <?php
                                         while($city1=$city->fetch_object())
                                         {
                                       ?>
                                       <option value="<?php echo $city1->city_id; ?>"><?php echo "$city1->city_name";?></option>
                                        <?php
                                          }
                                        ?>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6 py-2">
                                    <input class="form-control mb-3" type="text" id="pincode" name="pincode" placeholder="pincode" required>
                                  </div>
                                </div>
                                 <div class="row">
                                  <div class="col-lg-6 py-2">
                                    <input class="form-control mb-3" type="password" id="pass" name="pass" placeholder="Password*" required>
                                  </div>
                                  <div class="col-lg-6">
                                    <input class="form-control mb-3" type="password" id="cpass" name="cpass" placeholder="Confirm Password*" required>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="btn-grounp">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary mt-2 float-right">Register</button>
                            </div>
                        </fieldset>
                    </form>
            </div>
        </div>
    </div>
</section>

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


<!-- Mirrored from demo.themefisher.com/classimax/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:01 GMT -->
</html>