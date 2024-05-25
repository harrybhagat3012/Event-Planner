<?php
session_start();
include "connection.php";

if(!isset($_SESSION["id"]))
{
	header("location:index.php");
}

$id = $_GET["delcatid"];
$cat = $con->query("delete from service where cat_id='$id'");

if($cat)
{
	header("location:view_service.php");
}
else
{
echo "<script>alert('Somthing went wrong..')</script>";
}


?>
