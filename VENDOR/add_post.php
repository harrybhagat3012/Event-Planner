<?php

session_start();
include 'common/connection.php';

$id = $_SESSION["id"];

$Category=$con->query("select * from service");




if (isset($_POST['submit'])) 
{
  $cat           = $_POST["category_name"];
  $vfood         = $_POST["vfood"];
  $nfood         = $_POST["nfood"];
  $fdesc         = trim($con->real_escape_string($_POST["fdesc"]));
  $dj            = $_POST["dj"];

  $budget         = $_POST["budget"];
  $title          = $_POST["title"];
  $small_description    = trim($con->real_escape_string($_POST["small_desc"]));
  $description    = trim($con->real_escape_string($_POST["large_desc"]));
  $vendor_id        = $_SESSION["id"];
  $dop            = date("Y/m/d");
  $photo_id       = $_FILES["post"]["name"];

  $theme_1       = $_FILES["post1"]["name"];
  $theme_2       = $_FILES["post2"]["name"];
  $theme_3       = $_FILES["post3"]["name"];
  

  $tmpname1 = $_FILES["post"]["tmp_name"];
  $tmpname2 = $_FILES["post1"]["tmp_name"];
  $tmpname3 = $_FILES["post2"]["tmp_name"];
  $tmpname4 = $_FILES["post3"]["tmp_name"];
  


  $path1 = "images/event/$photo_id";
  $path2 = "images/event/$theme_1";
  $path3 = "images/event/$theme_2";
  $path4 = "images/event/$theme_3";
  

  $pic1 = explode(".",$photo_id);
  $exe1 =strtolower(end($pic1));


  $pic2 = explode(".",$theme_1);
  $exe2 =strtolower(end($pic2));

  $pic3 = explode(".",$theme_2);
  $exe3 =strtolower(end($pic3));


  $pic4 = explode(".",$theme_3);
  $exe4 =strtolower(end($pic4));

  
  if ($exe1 == 'jpeg' || $exe1 == 'jpg' ) 
  {

  

    move_uploaded_file($tmpname1,$path1);
    move_uploaded_file($tmpname2,$path2);
    move_uploaded_file($tmpname3,$path3);

    move_uploaded_file($tmpname4,$path4);

  $post_image=$con->query("insert into post_info
    (worker_id,title,description,small_description,cat_id,image,post_date,budget,veg,nveg,fdesc,music,t1,t2,t3)values
    ('$vendor_id','$title','$description','$small_description','$cat','$photo_id','$dop','$budget','$vfood','$nfood','$fdesc','$dj','$theme_1','$theme_2','$theme_3')");

  

    if($post_image) 
    {
      echo "<script>alert('post uploaded successfully');</script>";
      
    }
    else
    {
      echo "<script>alert('post upload Failed');</script>";
    }

  }

  else
  {
    echo "<script>alert('invalid file...... try again......')</script>";
  }

}



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themefisher.com/classimax/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:01 GMT -->
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Add Event</title>

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

<section class="page-title">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <!-- Title text -->
        <h3>Add Package</h3>
      </div>
    </div>
  </div>
  <!-- Container End -->
</section>

<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border border">
          <h3 class="bg-gray p-4">Add Event</h3>
          <form method="post" enctype="multipart/form-data">
            <fieldset class="p-4">

                 <select name="category_name" id="" class="form-control w-100 mb-3">
                                <option value="1">Select Category</option>
                                <?php
                                while ($cat_result=$Category->fetch_object()) 
                                {
                                  
                                

                                ?>
                                <option value="<?php echo $cat_result->cat_id; ?>"><?php echo $cat_result->cat_name; ?></option>
                              <?php
                                }
                              ?>
                                
                </select>

            <input class="form-control mb-3" type="text" placeholder="Enter Title" name="title" required>

            <input class="form-control mb-3" type="text" placeholder="Enter Event Budget" name="budget" required>

            <input class="form-control mb-3" type="text" placeholder="Enter Veg-Food Price" name="vfood" required>

            <input class="form-control mb-3" type="text" placeholder="Enter Non-Veg-Food Price" name="nfood" required>

            <textarea name="fdesc" id="adrs"  placeholder="Enter Food description" class="border w-100 p-2 mt-2 mt-lg-4 mb-3"></textarea>

            <input class="form-control mb-3" type="text" placeholder="Enter Sound Systerm Price" name="dj" required>

            <textarea name="small_desc" id="adrs"  placeholder="Enter Small description" class="border w-100 p-2 mt-2 mt-lg-4 mb-3"></textarea>
            
              
                  <textarea name="large_desc" id="adrs"  placeholder="Enter Large description" class="border w-100 p-2 mt-2 mt-lg-4 mb-3"></textarea>
            <i class="fa fa-user text-center px-3">     Enter Post Image</i>

                <input type="file" name="post" class="form-control-file mt-2 pt-1 mb-3 " id="profile">

                <i class="fa fa-user text-center px-3">     Enter theme 1</i>

                <input type="file" name="post1" class="form-control-file mt-2 pt-1 mb-3 " id="profile">

                <i class="fa fa-user text-center px-3">     Enter theme 2</i>

                <input type="file" name="post2" class="form-control-file mt-2 pt-1 mb-3 " id="profile">

                <i class="fa fa-user text-center px-3">     Enter theme 3</i>
                <input type="file" name="post3" class="form-control-file mt-2 pt-1 mb-3 " id="profile">
              
             
              <div class="form-group" align="center"> 
                  <input type="submit" name="submit" value="Submit" class=" btn btn-primary">
                </div>
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


<!-- Mirrored from demo.themefisher.com/classimax/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 17:33:01 GMT -->
</html>