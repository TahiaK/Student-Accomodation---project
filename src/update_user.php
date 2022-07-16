<?php
    include('config.php');
    $id = $_GET['val'];

    $name = "update user set name = ('$_POST[_n]') WHERE name='$id'";
    $username = "update user set username = ('$_POST[_u]') WHERE name='$id'";
    $password = "update user set password = ('$_POST[_p]') WHERE name='$id'";


    if (mysqli_query($con, $name)) {
        echo "<br />Update name successful";
    } else {
        die('br />Error ' .mysqli_error($con));
    }

    if (mysqli_query($con, $username)) {
        echo "<br />Update username successful";
    } else {
        die('br />Error ' .mysqli_error($con));
    }

    if (mysqli_query($con, $password)) {
        echo "<br />Update password successful";
    } else {
        die('br />Error ' .mysqli_error($con));
    }

    echo '<br/><a href="admin.php?">Done</a>'; 

    mysqli_close($con);

?>
