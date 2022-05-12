<?php
 $experience=$_POST["experience"];
 $comments=$_POST["comments"];
 $name=$_POST["name"];
 $email=$_POST["email"];



$conn = new mysqli("localhost","root","January11$","menu");


$sql = "INSERT INTO feedbacks(Name,email_id,comment,experience)
VALUES ('$name','$email','$comments','$experience')";



if ($conn->query($sql) === TRUE) {
  header('Location: feedbacks.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

?>