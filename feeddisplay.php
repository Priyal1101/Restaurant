<?php

$conn = new mysqli("localhost","root","January11$","menu");

$sql = "select Name, comment from feedbacks";
$resultant = $conn->query($sql);
if ($resultant->num_rows > 0) {
 while($row = $resultant->fetch_assoc()) {
    echo $row["Name"]."<br>".$row["comment"]."<br>";
}
}
$conn->close();
?>
