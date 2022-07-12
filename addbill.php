<?php
 $table=$_GET["table"];
 $amount=$_GET["amount"];



$conn = new mysqli("localhost","root","January11$","menu");


$sql = "INSERT INTO bills(Table_no,Amount)
VALUES ('$table','$amount')";



if ($conn->query($sql) === TRUE) {
  header('Location: staff2 (2).php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

?>