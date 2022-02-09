<?php

$dbServername = "127.0.0.1";
$dbUsername = "will";
$dbPassword = "maine";
$dbName = "portfolio";

  $conn = mysqli_connect('127.0.0.1', 'will', 'maine', 'portfolio');
  // Check connection
    if($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    } else {
      echo "connected";
    }

// $name = $_REQUEST["name"];
// $company = $_REQUEST["company"];
// $email = $_REQUEST["email"];
// $phone = $_REQUEST["phone"];
// $subject = $_REQUEST["subject"];
// $message = $_REQUEST["message"];
//
// $sql = "INSERT INTO contact_form  VALUES ('$name',
//           '$company','$email','$phone','$subject','$message')";
//
// if(mysqli_query($conn, $sql)){
//       echo "<h3>data stored in a database successfully." ;
//
//       echo nl2br("\n Thank you $name\n");
//   } else {
//       echo "ERROR: Hush! Sorry $sql. "
//           . mysqli_error($conn);
//   }
//
//   // Close connection
//   mysqli_close($conn);


?>
