<?php
include('config.php');


// if the user is logged in, unset the session 
if (isset($_SESSION['USER'])) 
{ 
	unset($_SESSION['USER']); 
} 
session_destroy(); //destroy the session


// go to login page 
header('Location: login2.html'); 
exit; 
?> 