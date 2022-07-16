<?php
include("config.php");

$date= $_POST["_date"];



$checkDate = "SELECT * FROM application where date='$date'";
$check = mysqli_query($con, $checkDate);
$result = mysqli_fetch_row($check);
$result = $result['0'];

if($result >0) {
   echo '<script type="text/javascript">',
		'if(confirm("Already booked.")) {
			window.location.href = "student.php"}',
		'</script>';
  } else {
	$insert = "INSERT INTO application (name, roomtype, location, date) VALUES ('$_COOKIE[Name]','$_POST[room]','$_POST[location]','$_POST[_date]')";
	if (mysqli_query($con, $insert))
	{
		echo '<script type="text/javascript">',
			'if(confirm("Record added successfully")) {
				window.location.href = "student.php"}',
			'</script>';
	} else {
			echo "Error: " . sqli_error();
		}
  }


// }
?>