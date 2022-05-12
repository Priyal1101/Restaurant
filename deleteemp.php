<?php
 $name=$_GET["Name"];

$conn = new mysqli("localhost","root","January11$","menu");


$sql = "DELETE FROM employees WHERE Name='$name'";

if ($conn->query($sql) === TRUE) {
  header('Location: staff_users.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

?>