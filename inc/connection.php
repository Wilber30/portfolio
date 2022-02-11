<?php

// $dbServername = "localhost";
// $dbUsername = "williams_sears";
// $dbPassword = "6O6nNLI8p2DwLeQI1m7t";
// $dbName = "williams_portfolio";

$dbServername = "127.0.0.1";
$dbUsername = "will";
$dbPassword = "maine";
$dbName = "portfolio";


// test
$conn = mysqli_connect('127.0.0.1', 'will', 'maine', 'portfolio');

  // $conn = mysqli_connect('localhost', 'williams_sears', '6O6nNLI8p2DwLeQI1m7t', 'williams_portfolio');
  // Check connection
    if($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    } else {
      // echo "connected";
    }


?>
