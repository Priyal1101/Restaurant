<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
   <header class="page-header">
        <nav>
          <a href="#0" aria-label="forecastr logo" class="logo">
            <img src="/assets/bbq.png" alt="" style="height: 80px;">
          </a>
          <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
            <svg width="20" height="20" aria-hidden="true">
              <use xlink:href="#down"></use>
            </svg>
          </button>
          <ul class="admin-menu">
            <li class="menu-heading">
              <h3>Control Panel</h3>
            </li>
            <li>
              <a href="staff2.html">
                <span>Home</span>
              </a>
            </li>
            <li>
              <a href="staff2 (2).html">
                <span>Billing</span>
              </a>
            </li>
            <li>
            <a href="staff_users.php">
                <span>Users</span>
              </a>
            </li>
           <li>
            <li>
              <a href="staff_inventory.php">
                <span>Inventory</span>
              </a>
            </li>
            <li class="menu-heading">
              <h3>Logout</h3>
            </li>
            <li>
              <a href="practise.php">
              <span id="logout">Logout</span>
                <script>
                  function preventBack(){window.history.forward();}
                  setTimeout("preventBack()", 0);
                  window.onunload=function(){null};
                </script>
              </a>
            </li>
            <br>
           
          </ul>
        </nav>
      </header>
      <section class="page-content">
        <section class="search-and-user">
          <div class="admin-profile">
            <span class="greeting" style="font-weight: bold; font-style: italic; font-size:x-large;">Hello admin,</span>
          </div>
        </section>
        <section class="grid">
          <h1>Users</h1>
          <br>
           <article>
              <?php
                $conn = new mysqli("localhost","root","January11$","menu");

                $sql = "select Name, Age, Position from employees";
                $resultant = $conn->query($sql);
                if ($resultant->num_rows > 0) {
                    echo "<table style='width: 50%'";
                    echo "<tr><th>Name</th><th>Age</th><th>Position</th></tr>";
                while($row = $resultant->fetch_assoc()) {
                    echo "<tr style='justify-items:center;'>";
                    echo "<bl>"."<th>" . $row["Name"] . "</th>" . "<th>" . $row["Age"] . "</th>" . "<th> " . $row["Position"] . "</th>";
                    echo "</tr>";// echo "<br>";
                }
                echo "</table>";
                }
                $conn->close();
              ?>
                 <button type="submit" id="Btn" style='background-color:#b362ff; height:fit-content;padding: 4px;position: absolute; left: 50vw; top: 35vh; font-size: medium; font-weight: bold; border: 1px solid black; border-radius: 5px;z-index:5 ;width:fit-content;' onclick="editinfo()">Edit</button>    
                 <button type="submit" id="Btn" style='background-color:#b362ff; height:fit-content;padding:4px;position: absolute; left: 60vw; top: 35vh; font-size: medium; font-weight: bold; border: 1px solid black; border-radius: 5px;z-index:4;width:fit-content' onclick="addemp()">Add</button>
                 <button type="submit" id="Btn" style='background-color:#b362ff; height:fit-content;padding:4px;position: absolute; left: 70vw; top: 35vh; font-size: medium; font-weight: bold; border: 1px solid black; border-radius: 5px;width:fit-content' onclick="deleteemp()">Remove</button>  
                 
           </article>
        </section>
        <article>                
           <div id="edit" style="  padding: 20px;  background-color: #fff;  margin-left:auto;margin-right:auto ;width:fit-content; margin-top: 15px;  display:none;">
        <form action="/editinfo.php">
                    <label><h3>Name of employee you want to make changes to</h3></label>
	              		<input type="text" name="Name" id="name" style="border:2px solid black"/>
                    <label><h3>Age</h3></label>
	              		<input type="text" name="age" id="age" style="border:2px solid black"/>
                    <label><h3>Position</h3></label>
		              	<input type="text" name="position" id="position" style="border:2px solid black"/>
                    <button type="submit">submit</button>
                   </form> 
                </div>  
        </article>
        <script>
           function editinfo() {
           var x = document.getElementById("edit");
           if (x.style.display === "none") {
              x.style.display = "block";
           } else {
                x.style.display = "none";
           }
           }    
         </script>
         <article>                
           <div id="add" style="  padding: 20px;  background-color: #fff;  margin-left:auto;margin-right:auto ;width:fit-content; margin-top: 15px;  display:none;">
        <form action="/addemp.php">
                    <label><h3>Name</h3></label>
	              		<input type="text" name="Name" id="name" style="border:2px solid black"/>
                    <label><h3>Age</h3></label>
	              		<input type="text" name="age" id="age" style="border:2px solid black"/>
                    <label><h3>Gender</h3></label>
	              		<input type="text" name="Gender" id="gender" style="border:2px solid black"/>
                    <label><h3>Position</h3></label>
		              	<input type="text" name="position" id="position" style="border:2px solid black"/>
                    <button type="submit">submit</button>
                   </form> 
                </div>  
        </article>
        <script>
           function addemp() {
           var x = document.getElementById("add");
           if (x.style.display === "none") {
              x.style.display = "block";
           } else {
                x.style.display = "none";
           }
           }    
         </script>
         <article>                
           <div id="delete" style="  padding: 20px;  background-color: #fff;  margin-left:auto;margin-right:auto ;width:fit-content; margin-top: 15px;  display:none;">
        <form action="/deleteemp.php">
                    <label><h3>Name</h3></label>
	              		<input type="text" name="Name" id="name" style="border:2px solid black"/>
                    <button type="submit">submit</button>
                   </form> 
                </div>  
        </article>
        <script>
           function deleteemp() {
           var x = document.getElementById("delete");
           if (x.style.display === "none") {
              x.style.display = "block";
           } else {
                x.style.display = "none";
           }
           }    
         </script> 
      </section>
</body>
</html>