<?php

include_once('connection.php');

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$cc = mysqli_real_escape_string($conn, $_POST["cc"]);
$subject = mysqli_real_escape_string($conn, $_POST["subject"]);
$message = mysqli_real_escape_string($conn, $_POST["message"]);

$nameclean = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$emailclean = filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$ccclean = filter_var($cc, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$subjectclean = filter_var($subject, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$messageclean = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$sql = "INSERT INTO portfolio_contact(`name`, `email`, `cc`, `subject`, `message`) VALUES ('$nameclean',
          '$emailclean', '$ccclean','$subjectclean','$messageclean')";

if(mysqli_query($conn, $sql)){
      echo "<h3>data stored in a database successfully." ;

      echo nl2br("\n Thank you $nameclean\n");
  } else {
      echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($conn);
  }

//Close connection
mysqli_close($conn);

?>
