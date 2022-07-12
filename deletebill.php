<?php
 $id=$_GET["ID"];

$conn = new mysqli("localhost","root","January11$","menu");


$sql = "DELETE FROM bills WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
  header('Location: staff2 (2).php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

?>