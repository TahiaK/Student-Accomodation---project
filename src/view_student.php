<?php
include('config.php');

$username = $_POST['username'];

$result = mysqli_query($con, "Select * from user where username = '$username'");
while($row = mysqli_fetch_array($result)){
        echo "Level:" .$row['level']."<br/>";
        echo "Name:" .$row['name']."<br/>";
        echo "Username:" .$row['username']."<br/>";
        echo "Role:" .$row['role']."<br/>";
    }

    echo '<br/><a href="admin.php?">Done</a>'; 

    mysqli_close($con);
?>
