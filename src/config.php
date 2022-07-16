	
	
	<?php
	     
	     $con = mysqli_connect("localhost", "root", "");

		if (!$con) {
			die('Could not connect:' .mysqli_error($con));
		}

		$selected= mysqli_select_db($con, "db");
		if (!$selected) die ("Cannot use database: " . mysqli_error() );
	 ?>
