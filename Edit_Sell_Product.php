<!DOCTYPE html>
<html>
<head>
<title>Edit_Sell_Product</title>

<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body style="background-image: url('images/bg10.png');">


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