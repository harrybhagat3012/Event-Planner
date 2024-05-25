<?php

$con = new mysqli("localhost","root","","hifix");
if($con->connect_errno!=0)
{
	echo $con->connect_error;
	exit;
}

?>