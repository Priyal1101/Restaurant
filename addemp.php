<?php
 $name=$_GET["Name"];
 $age=$_GET["age"];
 $gender=$_GET["Gender"];
 $position=$_GET["position"];



$conn = new mysqli("localhost","root","January11$","menu");


$sql = "INSERT INTO employees(Name,Age,Gender,Position)
VALUES ('$name','$age','$gender','$position')";



if ($conn->query($sql) === TRUE) {
  header('Location: staff_users.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

?>