<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <style type="text/css">
      @import url("https://fonts.googleapis.com/css?family=Mate SC");
        p {
            font-size: 40px;
            font-family: Mate SC;
        }


    </style>
</head>
<body style="background: url('images/bg20.png') no-repeat center fixed;height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;">

    <nav>
    <button onclick="myFunction()" class="dropbtn">Employee</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="Add_Employee.php">Add Employee</a>
        
        <a href="Edit_Employee.php">Edit Employee</a>
      </div>
    <button href="#" onclick="myFunction2()" class="dropbtn2">Customer</button>
      <div id="myDropdown2" class="dropdown-content2">
        <a href="Add_Customer.php">Add Customer</a>
        <a href="Edit_Customer.php">Edit Customer</a>
      </div>
    <button href="#" onclick="myFunction3()" class="dropbtn3">Product</button>
      <div id="myDropdown3" class="dropdown-content3">
        <a href="Add_Sell_Product.php">Add Sell product Details</a>
        <a href="Edit_Sell_Product.php">Edit Sell product Details</a>
      </div>
    <button href="Call_Details.php">Call Details</button>
    <button href="Assign_Call.php">Assign Call</button>
    <button href="#" onclick="myFunction4()" class="dropbtn4">Report</button>
      <div id="myDropdown4" class="dropdown-content4">
        <a href="Assign_Call_Report.php">Assign Call Report</a>
      </div>
    <div class="animation start-employee"></div>
  </nav>


<?php
    $servername = "162.244.93.189";
    $username = "msquaret_task_manage";
    $password = "Msquare@123";
    $dbname = "msquaret_task_manage";



    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }


    $cid =  $_REQUEST['Call_id'];
    $first_name=  $_REQUEST['First_Name'];
    $last_name = $_REQUEST['Last_Name'];
    $email = $_REQUEST['Email'];
    $pn1 = $_REQUEST['Phone_number_1'];
    $pn2 = $_REQUEST['Phone_number_2'];
    $add = $_REQUEST['Address'];
    $emp_username = $_REQUEST['Emp_Username'];
    $emp_pass = $_REQUEST['Emp_Pass'];
    
    $sql = "INSERT INTO employees  VALUES ('$cid','$first_name','$last_name','$email','$pn1','$pn2','$add','$emp_username','$emp_pass')";
          
        if(mysqli_query($conn, $sql)){
            echo "<p>data stored in a database successfully.Please browse your localhost php my admin to view the updated data</p>"; 
  
            
        } else{
            echo "<p>" . mysqli_error($conn) . "</p>";
        }
          
        // Close connection
        mysqli_close($conn);

?>
<div class="book" style="padding-left: 50%;margin-left: 44%;margin-top: 20%;">
  <div class="back"></div>
  <div class="page6"><button style="height: 30%;width: 100%;margin-top: 25%;background-color: color:#fff;
  background-color:#e74c3c;"><a href="dashboard.php"><b>Return to Dashboard</b></a></button></div>
  <div class="page5" style="font-size: 250%;"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</div>
  <div class="page4"></div>
  <div class="page3"></div>
  <div class="page2"></div>
  <div class="page1"></div>
  <div class="front"><button style="height: 30%;width: 100%;margin-top: 25%;color:white;
  background-color:#e74c3c;border-top: 2px solid white;border-bottom: 2px solid white"><b>OPEN</b></button></div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show2");
}

function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show3");
}

function myFunction4() {
  document.getElementById("myDropdown4").classList.toggle("show4");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }

  if (!event.target.matches('.dropbtn2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show2')) {
        openDropdown.classList.remove('show2');
      }
    }
  }

   if (!event.target.matches('.dropbtn3')) {
    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show3')) {
        openDropdown.classList.remove('show3');
      }
    }
  }

     if (!event.target.matches('.dropbtn4')) {
    var dropdowns = document.getElementsByClassName("dropdown-content4");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show4')) {
        openDropdown.classList.remove('show4');
      }
    }
  }
  
}
</script>


</body>
</html>