<?php


		 require_once ("config.php");
		
	     $sql = "INSERT INTO user(name, username, password, role) values ('user1','user1','pass1', 'student')";

		 if (!mysqli_query($con, $sql)) {
			die('Error: ' . mysqli_error());
		} else echo "record added<br />";

		 $sql = "INSERT INTO user(name, username, password, role) values ('user2','user2','pass2', 'admin')";

		 if (!mysqli_query($con, $sql)) {
			die('Error: ' . mysqli_error());
		} else echo "record added<br />";

		$sql = "INSERT INTO user(name, username, password, role) values ('user3','user3','pass3', 'manager')";

		 if (!mysqli_query($con, $sql)) {
			die('Error: ' . mysqli_error());
		} else echo "record added<br />";

	    		 
	     mysqli_close($con);
?>

	
