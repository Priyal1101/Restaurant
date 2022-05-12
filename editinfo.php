<?php
 $name=$_GET["Name"];
 $age=$_GET["age"];
 $position=$_GET["position"];



$conn = new mysqli("localhost","root","January11$","menu");


$sql = "UPDATE employees SET Age=$age, Position='$position' WHERE Name='$name'";

if ($conn->query($sql) === TRUE) {
  header('Location: staff_users.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

?>