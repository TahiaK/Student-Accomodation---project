<?php
 
  $con = mysqli_connect("localhost", "root", "");

  if (!$con) {
      die('Could not connect: ' .mysqli_error($con));
  }

  if (mysqli_query($con, "CREATE DATABASE db")) {
    echo "Database created";
  } else {
    echo "ERROR: Could not connect. " . mysqli_error();
  }

  mysqli_select_db($con, "db");

  $sql = "CREATE TABLE user (
      level int NOT NULL AUTO_INCREMENT,
      name varchar (100),
      username varchar(100),
      password varchar(12),
      role varchar(10),
      PRIMARY KEY(level)
  )";

  if (mysqli_query($con, $sql))
  {
    echo "<br />Table user created";
  }
  else
  {
    die('<br />Error creating user table: ' . mysqli_error());
  }

  $sql_a = "CREATE TABLE application (
    ID int NOT NULL AUTO_INCREMENT,
    name varchar (100),
    roomtype varchar(100),
    location varchar(50),
    date DATE,  
    PRIMARY KEY(ID)
)";

if (mysqli_query($con, $sql_a))
{
  echo "<br />Table application created";
}
else
{
  die('<br />Error creating application table: ' . mysqli_error());
}

$sql_v= "CREATE TABLE validation (
  ID int NOT NULL AUTO_INCREMENT,
  rejected varchar(100),
  approved varchar(50), 
  PRIMARY KEY(ID)
)";

if (mysqli_query($con, $sql_v))
{
echo "<br />Table validation created";
}
else
{
die('<br />Error creating validation table: ' . mysqli_error());
}

  mysqli_close($con);
?>