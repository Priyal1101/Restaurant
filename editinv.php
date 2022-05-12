<?php
 $name=$_GET["Name"];
 $quantity=$_GET["quantity"];



$conn = new mysqli("localhost","root","January11$","menu");


$sql = "UPDATE Inventory SET Quantity_in_kg=$quantity WHERE Name='$name'";

if ($conn->query($sql) === TRUE) {
  header('Location: staff_inventory.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

?>