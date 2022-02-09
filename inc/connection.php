<?php

$dbServername = "127.0.0.1";
$dbUsername = "will";
$dbPassword = "maine";
$dbName = "portfolio";

// test
  $conn = mysqli_connect('127.0.0.1', 'will', 'maine', 'portfolio');
  // Check connection
    if($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    } else {
      echo "connected";
    }


?>
