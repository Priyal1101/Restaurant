<?php
 $name=$_GET["Name"];
 $quantity=$_GET["quantity"];



$conn = new mysqli("localhost","root","January11$","menu");


$sql = "INSERT INTO Inventory(Name,Quantity_in_kg)
VALUES ('$name','$quantity')";



if ($conn->query($sql) === TRUE) {
  header('Location: staff_inventory.php');
  exit;
} else {
  echo "Error " . $conn->error;
}
$conn->close();

?>