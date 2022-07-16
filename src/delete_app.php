<?php

include('config.php');

$name = $_GET['val'];

    $result = "DELETE FROM application WHERE name = '$name'";


    if (mysqli_query($con, $result)) {
        echo "<br />Delete successful<br/>";
        echo '<br/><a href="Manager.php?">Done</a>'; 
    } else {
        die('<br />Error deletion ' .mysqli_error($con));
    }

    mysqli_close($con);
