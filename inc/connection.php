<?php

$dbServername = "localhost";
$dbUsername = "williams_sears";
$dbPassword = "6O6nNLI8p2DwLeQI1m7t";
$dbName = “williams_portfolio";

try {
    $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if (!$con) {
      throw new Exception('MySQL Connection Database Error: ' . mysql_error());
    } else {
      // echo "Connected";
    }
  }
catch (Exception $e)
{
  echo $e->getMessage();
}

?>
