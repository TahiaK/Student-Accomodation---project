<?php
include('config.php');

$name = $_GET['val'];

$result = mysqli_query($con, "SELECT * from application where name = '$name'");
while($row = mysqli_fetch_array($result)) {
    echo "Student Name: " . $row['name'] . "<br/>";
    echo "Room Type: " . $row['roomtype'] . "<br/>";
    echo "Location: " . $row['location'] . "<br/>";
    echo "Date: " . $row['date'] . "<br/>";
    }

    echo '<br/><a href="Manager.php?">Done</a>'; 

    mysqli_close($con);

?>