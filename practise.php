<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>The Bar-B-Q</title>
</head>
<body>
    <div class="header">
    <div class="nav">
        <ul>
        
        <li style="float:right"><a href="#Contact">Contact us</a> </li>
        <li style="float:right"><a href= "/feedbacks.php">Feedback</a></li>  
        <li style="float:right"><a href="#menu"> Menu</a></li>
        <li style="float:right"><a href="#outlet"> Outlet</a></li>
        <li style="float:right"><a href="#home"> Home</a></li>
        <li style="float:left"><a href="/staff_login.html"> Login</a></li>

        </ul>
    </div>
</div>
    <div class="home" id="home">
        <img src="assets/home4.jpg" alt="main_image">
        <div class="text">
            THE <br> BAR-B-Q<a href="#Contact">
            <div class="button">
              Reserve now
            </div></a>
        </div>
    </div>
    <div class="About-us">
      <h1>About us</h1>
      <br><h3>
        "It's like nothing else you've ever tasted before."
      </h3>
      <h1>Outlet</h1>
    </div>

    <div class="outlet" id="outlet"> 
     
      <div class="Card">
        <h1>Kolkata</h1>
        <h3>Mother Teresa Sarani, Taltala Kolkata,
          West Bengal
          700016</h3>
      </div>
      <div class="Card">
        <h1>Bengaluru</h1>
        <h3>
          7th floor, 34a, Church St Shanthi Nagar, Ashok Nagar Bengaluru, Karnataka 560001
          </h3>
      </div>
    </div>
    <div class="menu" id="menu">  
   
        <div class="logo_menu clicker">
            <img src="/assets/menu.png" alt="" onclick="show()">
    </div> 
 
    <div id="MENU" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="off()">&times;</a>
    <div id="hiddendiv">
        <div class="container">
              <div class="card">
                <div class="imgBx">
                  <img src="/assets/soup 1.png">
                </div>
                <div class="contentBx">
                  <h2>Soups</h2>
                  <br>
                  <br>
                  <br>
                  <div id="overlay" onclick="off()">
                    <div id="overlaytext">
                      <?php

                        $conn = new mysqli("localhost","root","January11$","menu");

                        $sql = "select Item, Price from soups";
                        $resultant = $conn->query($sql);
                        // echo "Item"."\t\t\t\t\t"."Price <br>";
                        if ($resultant->num_rows > 0) {
                        while($row = $resultant->fetch_assoc()) {
                            echo "<h8 style='color: #d7bde2'>".$row["Item"]."\t\t".$row["Price"]."</h8> <br>";
                        }
                        }
                        $conn->close();
                      ?>
                    </div>
                  </div>
                  <div style="padding:20px">
                    <button style="width: 100px; height: 50px; border-radius: 10px;" onclick="on()">Show now</button>
                  </div>
                  <script>
                    function on() {
                      document.getElementById("overlay").style.display = "block";
                    }

                    function off() {
                      document.getElementById("overlay").style.display = "none";
                    }
                  </script>
                </div>
              </div>
              <div class="card">
                <div class="imgBx">
                  <img src="/assets/dish3.png">
                </div>
                <div class="contentBx">
                  <h2>Starters</h2>
                  <br>
                  <br>
                  <br>
                  <div id="overlay2" onclick="off2()">
                    <div id="overlaytext2">
                      <?php

                        $conn = new mysqli("localhost","root","January11$","menu");

                        $sql = "select Item, Price from starters";
                        $resultant = $conn->query($sql);
                        // echo "Item"."\t\t\t\t\t"."Price <br>";
                        if ($resultant->num_rows > 0) {
                        while($row = $resultant->fetch_assoc()) {
                            echo "<h8 style='color: #d7bde2'>".$row["Item"]."\t\t".$row["Price"]."</h8> <br>";
                        }
                        }
                        $conn->close();
                      ?>
                    </div>
                  </div>
                  <div style="padding:20px">
                    <button style="width: 100px; height: 50px; border-radius: 10px;" onclick="on2()">Show now</button>
                  </div>
                  <script>
                    function on2() {
                      document.getElementById("overlay2").style.display = "block";
                    }

                    function off2() {
                      document.getElementById("overlay2").style.display = "none";
                    }
                  </script>
                </div>
              </div>
              <div class="card">
                <div class="imgBx">
                  <img src="/assets/dish.png">
                </div>
                <div class="contentBx">
                  <h2>Main Course</h2>
                  <br>
                  <br>
                  <br>
                  <div id="overlay3" onclick="off3()">
                    <div id="overlaytext3">
                      <?php

                        $conn = new mysqli("localhost","root","January11$","menu");

                        $sql = "select Item, Price from main_course";
                        $resultant = $conn->query($sql);
                        // echo "Item"."\t\t\t\t\t"."Price <br>";
                        if ($resultant->num_rows > 0) {
                        while($row = $resultant->fetch_assoc()) {
                            echo "<h8 style='color: #d7bde2'>".$row["Item"]."\t\t".$row["Price"]."</h8> <br>";
                        }
                        }
                        $conn->close();
                      ?>
                    </div>
                  </div>
                  <div style="padding:20px">
                    <button style="width: 100px; height: 50px; border-radius: 10px;" onclick="on3()">Show now</button>
                  </div>
                  <script>
                    function on3() {
                      document.getElementById("overlay3").style.display = "block";
                    }

                    function off3() {
                      document.getElementById("overlay3").style.display = "none";
                    }
                  </script>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="card">
                <div class="imgBx">
                  <img src="/assets/dish2.png">
                </div>
                <div class="contentBx">
                  <h2>Rice</h2>
                  <br>
                  <br>
                  <br>
                  <div id="overlay4" onclick="off4()">
                    <div id="overlaytext4">
                      <?php

                        $conn = new mysqli("localhost","root","January11$","menu");

                        $sql = "select Item, Price from rice";
                        $resultant = $conn->query($sql);
                        // echo "Item"."\t\t\t\t\t"."Price <br>";
                        if ($resultant->num_rows > 0) {
                        while($row = $resultant->fetch_assoc()) {
                            echo "<h8 style='color: #d7bde2'>".$row["Item"]."\t\t".$row["Price"]."</h8> <br>";
                        }
                        }
                        $conn->close();
                      ?>
                    </div>
                  </div>
                  <div style="padding:20px">
                    <button style="width: 100px; height: 50px; border-radius: 10px;" onclick="on4()">Show now</button>
                  </div>
                  <script>
                    function on4() {
                      document.getElementById("overlay4").style.display = "block";
                    }

                    function off4() {
                      document.getElementById("overlay4").style.display = "none";
                    }
                  </script>
                </div>
              </div>
            <div class="card">
              <div class="imgBx">
                <img src="/assets/noodle2 1.png">
              </div>
              <div class="contentBx">
                <h2>Noodles</h2>
                <br>
                <br>
                <br>
                <div id="overlay5" onclick="off5()">
                    <div id="overlaytext5">
                      <?php

                        $conn = new mysqli("localhost","root","January11$","menu");

                        $sql = "select Item, Price from noodles";
                        $resultant = $conn->query($sql);
                        // echo "Item"."\t\t\t\t\t"."Price <br>";
                        if ($resultant->num_rows > 0) {
                        while($row = $resultant->fetch_assoc()) {
                            echo "<h8 style='color: #d7bde2'>".$row["Item"]."\t\t".$row["Price"]."</h8> <br>";
                        }
                        }
                        $conn->close();
                      ?>
                    </div>
                  </div>
                  <div style="padding:20px">
                    <button style="width: 100px; height: 50px; border-radius: 10px;" onclick="on5()">Show now</button>
                  </div>
                  <script>
                    function on5() {
                      document.getElementById("overlay5").style.display = "block";
                    }

                    function off5() {
                      document.getElementById("overlay5").style.display = "none";
                    }
                  </script>
              </div>
            </div>
            
              <div class="card">
                <div class="imgBx">
                  <img src="/assets/Frame 2.png">
                </div>
                <div class="contentBx">
                  <h2>Desserts</h2>
                  <br>
                  <br>
                  <br>
                  <div id="overlay6" onclick="off6()">
                    <div id="overlaytext6">
                      <?php

                        $conn = new mysqli("localhost","root","January11$","menu");

                        $sql = "select Item, Price from desserts";
                        $resultant = $conn->query($sql);
                        // echo "Item"."\t\t\t\t\t"."Price <br>";
                        if ($resultant->num_rows > 0) {
                        while($row = $resultant->fetch_assoc()) {
                            echo "<h8 style='color: #d7bde2'>".$row["Item"]."\t\t".$row["Price"]."</h8> <br>";
                        }
                        }
                        $conn->close();
                      ?>
                    </div>
                  </div>
                  <div style="padding:20px">
                    <button style="width: 100px; height: 50px; border-radius: 10px;" onclick="on6()">Show now</button>
                  </div>
                  <script>
                    function on6() {
                      document.getElementById("overlay6").style.display = "block";
                    }

                    function off6() {
                      document.getElementById("overlay6").style.display = "none";
                    }
                  </script>
                </div>
              </div>
          </div>
           <div class="container">
            <div class="card">
              <div class="imgBx">
                <img src="/assets/Frame 1.png">
              </div>
              <div class="contentBx">
                <h2>Beverages</h2>
                <br>
                <br>
                <br>
                <div id="overlay7" onclick="off7()">
                    <div id="overlaytext7">
                      <?php

                        $conn = new mysqli("localhost","root","January11$","menu");

                        $sql = "select Item, Price from beverages";
                        $resultant = $conn->query($sql);
                        // echo "Item"."\t\t\t\t\t"."Price <br>";
                        if ($resultant->num_rows > 0) {
                        while($row = $resultant->fetch_assoc()) {
                            echo "<h8 style='color: #d7bde2'>".$row["Item"]."\t\t".$row["Price"]."</h8> <br>";
                        }
                        }
                        $conn->close();
                      ?>
                    </div>
                  </div>
                  <div style="padding:20px">
                    <button style="width: 100px; height: 50px; border-radius: 10px;" onclick="on7()">Show now</button>
                  </div>
                  <script>
                    function on7() {
                      document.getElementById("overlay7").style.display = "block";
                    }

                    function off7() {
                      document.getElementById("overlay7").style.display = "none";
                    }
                  </script>
              </div>
            </div>
           
          </div>
          
    </div> 

<p id="result" style="background-color: blue"></p>
<br><br>
</div>
<div class="contact" id="Contact">
  <h1>Contact us</h1>
  <div class="items">
    <div class="con call">
  <table>
    <tr>
      <td rowspan="2"><img src="/assets/kol.png" alt=""></td>
      <th>Call us</th>
    </tr>
    <tr>
      <td>
      <?php 
      $num=9988776655;
      echo $num ?>
      </td>
    </tr>
  </table>
</div>
<div class="con email">
  <table>
    <tr>
      <td rowspan="2"><img src="/assets/email.png" alt=""></td>
      <th>Email</th>
    </tr>
    <tr>
      <td>
      <?php
      const EMAIL="barbq@gmail.com";
      echo EMAIL;
      ?>
      </td>
    </tr>
  </table>
</div>
<div class="con location">
  <table>
    <tr>
      <td rowspan="2"><img src="/assets/location.png" alt=""></td>
      <th>Location</th>
    </tr>
    <tr>
      <td>Bangaluru,<br>
        Karnataka</td>
    </tr>
  </table>
</div>
  </div>

</div>
<footer>
  <a href="#">Privacy policy</a>
  
  <a href="#">Terms of use</a>
  <div class="info">
  <p id="info"  style="color: #555"></p>  
  </div>
  
</footer>
    <script src="main.js"></script>
<?php
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['Email'];   
    
}
?>
</body>
</html>