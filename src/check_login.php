<?php

	session_start();

	include('config.php');


	$sql="SELECT * FROM user WHERE username=('$_POST[_username]') and password=('$_POST[_password]')";

	if (!mysqli_query($con, $sql)) {
		$_SESSION["Login"] = "NO";
		die('Could not connect:' .mysqli_error($con));
		header("Location: login2.html");

	}

	$result=mysqli_query($con, $sql);
	$rows=mysqli_fetch_array($result); 
	$user_name=$rows['name'];
	$user_id=$rows['password'];
	$user_role=$rows['role'];
	$user_level=$rows['level'];

	$expire=time()+60*60*24*30;
	setcookie("Name", $user_name, $expire);

	$count=mysqli_num_rows($result);

	if($count==1 && (isset($_COOKIE["Name"]))) {
			
		$_SESSION["Login"] = "YES";
		
		
		$_SESSION['USER'] = $user_name;
		$_SESSION['ID'] = $user_id;
		$_SESSION['ROLE'] = $user_role;
		$_SESSION['LEVEL'] = $user_level;

		

		if (isset($_COOKIE["Name"]))


		if($user_role=="manager") {
			header("Location: Manager.php");
		}

		if($user_role=="admin") {
			header("Location: admin.php");
		}

		if($user_role=="student") {
			header("Location: student.php");
		}
		
	}

	//if wrong username and password
	else {

	$_SESSION["Login"] = "NO";

	echo '<script type="text/javascript">',
		'if(confirm("Wrong username or password entered")) {
			window.location.href = "login2.html"}',
		'</script>';
	}

	mysqli_close($con);

?>