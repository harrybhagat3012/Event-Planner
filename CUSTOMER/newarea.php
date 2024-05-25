<?php

include 'common/connection.php';
$aid = $_POST['cid'];


$area=$con->query("select * from area where city_id='$aid';");

?>


	<option value="">Select your Area </option>
	
	<?php
		while ($a= $area->fetch_object())
		 {
	?>
		<option value="<?php echo $a->area_id; ?>"><?php echo $a->area_name;?></option>
	<?php
			
		}
	?>

