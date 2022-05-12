<?php
function forgotpass()
{
    $username=$_POST["username"];
    $name=$_POST["name"];
   
   
   
   $conn = new mysqli("localhost","root","January11$","menu");
   
    $sql = "INSERT INTO forgotpass(username,name)
    VALUES ('$username','$name')";
    
    
    
    if ($conn->query($sql) === TRUE) {
      header('Location: staff_forgotpass.php');
      exit;
    } else {
      echo "Error " . $conn->error;
    }
   }
   
//    $sql = "INSERT INTO forgotpass(username,name)
//    VALUES ('$username','$name')";
   
   
   
//    if ($conn->query($sql) === TRUE) {
//      header('Location: staff_forgotpass.php');
//      exit;
//    } else {
//      echo "Error " . $conn->error;
//    }
   $conn->close();
   
?>