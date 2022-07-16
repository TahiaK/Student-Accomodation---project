<?php
include("config.php");
$insert = "INSERT INTO user (name, username, password, role) VALUES ('$_POST[name]','$_POST[username]','$_POST[password]','$_POST[role]')";
if (mysqli_query($con, $insert))
{
    echo '<script type="text/javascript">',
		'if(confirm("Record added successfully")) {
			window.location.href = "admin.php"}',
		'</script>';
} else {
    echo '<script type="text/javascript">',
		'if(confirm("Level cannot be repeated.")) {
			window.location.href = "admin.php"}',
		'</script>';
}



?>