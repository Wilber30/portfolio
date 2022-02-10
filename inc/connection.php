<?php

$dbServername = "localhost";
$dbUsername = "williams_sears";
$dbPassword = "6O6nNLI8p2DwLeQI1m7t";
$dbName = "williams_portfolio";

// test
  $conn = mysqli_connect('localhost', 'williams_sears', '6O6nNLI8p2DwLeQI1m7t', 'williams_portfolio');
  // Check connection
    if($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    } else {
      // echo "connected";
    }


?>
