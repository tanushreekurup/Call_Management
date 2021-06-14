<!DOCTYPE html>
<html>
<head>
<title>Add_New_Employee</title>

<style type="text/css">


  * {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

  body, html {
  height: 100%;
  width: 100%;
  overflow: auto;
}



@import url("https://fonts.googleapis.com/css?family=Noto Sans JP");
    table{

       width: 70%;
        margin-top: 0;
        border-collapse: separate;
        overflow: auto;
        font-size: 140%;
        line-height: 15px;
        font-family: Noto Sans JP;
    }

    .td1{
      border-left:15px solid #ffb347;
    }
    .td2{
      border-bottom:15px solid #ffb347;
      border-left:15px solid #ffb347;
    }
    .td3{
      border-right:15px solid #ffb347;
    }
    .td4{
      border-right:15px solid #ffb347;
      border-bottom:15px solid #ffb347;
    }


nav {
  margin: 27px auto 0;
  padding-top: 0%;
  position: relative;
  width: 100%;
  height: 50px;
  margin-top: 2px;
  border-radius: 8px;
  font-weight: bold;
  font-size: 50%;
  box-shadow: 0 0 20px rgba(0,0,0,0.2);
  background-color: rgba(68, 72, 77,.7);
}

@import url("https://fonts.googleapis.com/css?family=Sail");
nav button {
  line-height: 50px;
  height: 100%;
  display: inline-block;
  position: relative;
  z-index: 1;
  text-decoration: none;
  text-transform: uppercase;
  text-align: center;
  color: white;
  cursor: pointer;
  width: 16%;
  background-color: transparent;
  font-family: Sail;
}
nav .animation {
  position: absolute;
  height: 100%;
  top: 0;
  z-index: 0;
  transition: all .5s ease 0s;
  border-radius: 8px;
}
button:nth-child(1) {
  width: 16%;
}
button:nth-child(3) {
  width: 16%;
}
button:nth-child(5) {
  width: 16%;
}
button:nth-child(7) {
  width: 16%;
}
button:nth-child(8) {
  width: 16%;
}
button:nth-child(9) {
  width: 16%;
}

nav .start-Employee, button:nth-child(1):hover~.animation {
  width: 16%;
  left: 0;
  background-color: #ffb347;
  border:2px solid #ffffff;
}
nav .start-Customer, button:nth-child(3):hover~.animation {
  width: 16%;
  left: 16%;
  background-color: #ffb347;
  border:2px solid #ffffff;
}
nav .start-Product, button:nth-child(5):hover~.animation {
  width: 16%;
  left: 33%;
  background-color: #ffb347;
  border:2px solid #ffffff;
}
nav .start-Call, button:nth-child(7):hover~.animation {
  width: 16%;
  left: 49%;
  background-color: #ffb347;
  border:2px solid #ffffff;
}
nav .start-Assign, button:nth-child(8):hover~.animation {
  width: 16%;
  left: 65%;
  background-color: #ffb347;
  border:2px solid #ffffff;
}

nav .start-Report, button:nth-child(9):hover~.animation {
  width: 16%;
  left: 83.4%;
  background-color: #ffb347;
  border:2px solid #ffffff;
}

#wrapper {
    margin-left:auto;
    margin-right:auto;
    width:1350px;
}


h1 {
  text-align: center;
  margin: 40px 0 40px;
  text-align: center;
  font-size: 30px;
  color: #ecf0f1;
  text-shadow: 2px 2px 4px #000000;
  font-family: 'Cherry Swash', cursive;
}

p {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: #ecf0f1;
    font-family: 'Cherry Swash',cursive;
    font-size: 16px;
}

span {
    color: #2BD6B4;
}

button{
  border: 0px;
  background-color: #44484d;
  font-size: 20px;
}

.dropdown-content {
  margin-left: 2%;
  display: none;
  position: absolute;
  background-color: rgba(68, 72, 77,.9);
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 20px;
}

.dropdown-content a {
  text-decoration: none;
  display: block;
  padding: 12px 16px;
  font-family: Sail;
  color: white;
}

.dropdown-content a:hover {background-color: rgba(0,51,102,.6);}


.show {display: block;}

.dropdown-content2 {
  margin-left: 18%;
  display: none;
  position: absolute;
  background-color: rgba(68, 72, 77,.9);
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 20px;
}

.dropdown-content2 a {
  text-decoration: none;
  display: block;
  padding: 12px 16px;
  font-family: Sail;
  color: white;
}

.dropdown-content2 a:hover {background-color: rgba(0,51,102,.6);}

.show2 {display: block;}

.dropdown-content3 {
  margin-left: 34%;
  display: none;
  position: absolute;
  background-color: rgba(68, 72, 77,.9);
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 20px;
}

.dropdown-content3 a {
  text-decoration: none;
  display: block;
  padding: 12px 16px;
  font-family: Sail;
  color: white;
}

.dropdown-content3 a:hover {background-color: rgba(0,51,102,.6);}

.show3 {display: block;}

.dropdown-content4 {
  margin-left: 84%;
  display: none;
  position: absolute;
  background-color: rgba(68, 72, 77,.9);
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: 20px;
}

.dropdown-content4 a {
  font-family: Sail;
  color: white;
  text-decoration: none;
  display: block;
  padding: 12px 16px;
}

.dropdown-content4 a:hover {background-color: rgba(0,51,102,.6);}

.show4 {display: block;}

@import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url(https://fonts.googleapis.com/css?family=Signika:700,300,600);



h1 {

 font:bold 7.5vw/1.6 'Signika', sans-serif;
 user-select:none;
 margin-top: 0;
 margin-bottom: 0;
 display: inline-flex; 
 padding-top: 2%;
}

h1 span { display:inline-block; animation:float .2s ease-in-out infinite; margin-top: 0;font-size:50px;
 margin-bottom: 0; }
 @keyframes float {
  0%,100%{ transform:none; }
  33%{ transform:translateY(-1px) rotate(-2deg); }
  66%{ transform:translateY(1px) rotate(2deg); }
}
body:hover span { animation:bounce .6s; }
@keyframes bounce {
  0%,100%{ transform:translate(0); }
  25%{ transform:rotateX(20deg) translateY(2px) rotate(-3deg); }
  50%{ transform:translateY(-20px) rotate(3deg) scale(1.1);  }
}

span:nth-child(n) { color:hsl(197, 100%, 29%); text-shadow:1px 1px hsl(197, 100%, 19%), 2px 2px hsl(197, 100%, 19%), 3px 3px hsl(197, 100%, 19%), 4px 4px hsl(197, 100%, 19%); }


h1 span:nth-child(2){ animation-delay:.05s; }
h1 span:nth-child(3){ animation-delay:.1s; }
h1 span:nth-child(4){ animation-delay:.15s; }
h1 span:nth-child(5){ animation-delay:.2s; }
h1 span:nth-child(6){ animation-delay:.25s; }
h1 span:nth-child(7){ animation-delay:.3s; }
h1 span:nth-child(8){ animation-delay:.35s; }
h1 span:nth-child(9){ animation-delay:.4s; }
h1 span:nth-child(10){ animation-delay:.45s; }
h1 span:nth-child(11){ animation-delay:.5s; }
h1 span:nth-child(12){ animation-delay:.55s; }
h1 span:nth-child(13){ animation-delay:.6s; }
h1 span:nth-child(14){ animation-delay:.65s; }

    @import url("https://fonts.googleapis.com/css?family=Noto Serif");
  table{
      font-family: Noto Serif;  
    
  }

   .td2{
      border-bottom:15px solid #ffb347;
      border-left:15px solid #ffb347;
    }
    .td3{
      border-right:15px solid #ffb347;
    }

    .td5{
      border-right:15px solid #ffb347;
       border-left:15px solid #ffb347;
    }

    td{
      
      padding-left: 10%;
      padding-right: 10%;
    }



.input-container{
  position:relative;
  margin-bottom:28px;
}
.input-container label{
  position:absolute;
  top:0px;
  left:0px;
  margin-bottom: 4%;
  color:#002366; 
  pointer-events: none;
  transition: all 0.5s ease-in-out;
}
.input-container input{ 
  border:0;
  border-bottom:2px solid #555;  
  background:transparent;
  width:100%;
  font-size: 100%;
  color:black;
}
.input-container input:focus{ 
 border:none; 
 outline:none;
 border-bottom:2px solid #e74c3c; 
}
.btn{
  color:#fff;
  background-color:#e74c3c;
  outline: none;
  border: 0;
  color: #fff;
  padding:10px 20px;
  text-transform:uppercase;
  margin-top:5%;
  border-radius:2px;
  cursor:pointer;
  position:relative;
  margin-bottom: 5%;

}
/*.btn:after{
  content:"";
  position:absolute;
  background:rgba(0,0,0,0.50);
  top:0;
  right:0;
  width:100%;
  height:100%;
}*/
.input-container input:focus ~ label{
  top:-20px;
  
  
}
.input-container input:valid ~ label{
  top:-20px;
  
  
}


</style>
</head>
<body style="background: url('images/bg18.jpg') no-repeat center fixed;height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;">


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



  <div class="container">
    <center><h1><span>A</span><span>d</span><span>d</span><span><pre> </pre></span><span>E</span><span>m</span><span>p</span><span>l</span><span>o</span><span>y</span><span>e</span><span>e</span></h1></center>

 <form action="insert_employee.php" method="GET">
 <center>
    <form>
        <table cellspacing="0px" style="background-color:  rgba(240,248,255,.9);color: #002147;padding-bottom: 5%;">

          <tr style="height: 5px;vertical-align: center; padding:0;margin:0;">
            <th colspan="2"><img style="width:100%; height:50px;" border="none" src='images\bg17.jpg' /></th>
          </tr>
          <tr>
              <td  class="td5" style="padding-bottom: 2%;padding-top: 5%;">
                <div class="input-container">   
                  <input type="text" name="Employee ID">
                  <label style="margin-top: -1%;">Employee ID:</label>
                </div>
              </td>
          </tr>
          <tr>
              <td  class="td5" style="padding-bottom: 2%;">
                <div class="input-container">   
                  <input type="text" name="First_Name">
                  <label style="margin-top: -1%;">First Name:</label>
                </div>
              </td>
          </tr>
          <tr>
              <td  class="td5" style="padding-bottom: 2%;">
                  <div class="input-container">
                    <input type="text" name="Last_Name">
                    <label style="margin-top: -1%;">Last Name:</label>    
                  </div>
              </td>
          </tr>
          <tr>
              <td  class="td5">
                  <div class="input-container" style="padding-bottom: 2%;">
                    <input type="email" name="Email">
                    <label style="margin-top: -1%;">Email:</label>    
                  </div>
              </td>
          </tr>
          <tr>
              <td  class="td5" style="padding-bottom: 2%;">
                  <div class="input-container">
                    <input type="number" name="Phone_Number_1">
                    <label style="margin-top: -1%;">Phone Number 1:</label>    
                  </div>
              </td>
          </tr>
           <tr>
              <td  class="td5" style="padding-bottom: 2%;">
                  <div class="input-container">
                    <input type="number" name="Phone_Number_2">
                    <label style="margin-top: -1%;">Phone Number 2:</label>    
                  </div>
              </td>
          </tr>
          <tr>
              <td  class="td5" style="padding-bottom: 2%;">
                  <div class="input-container">
                    <input type="text" name="Address">
                    <label style="margin-top: -1%;">Address:</label>    
                  </div>
              </td>
          </tr>
          <tr>
              <td  class="td5" style="padding-bottom: 2%;">
                  <div class="input-container">
                    <input type="text" name="Emp_Username">
                    <label style="margin-top: -1%;">Employee Username:</label>    
                  </div>
              </td>
          </tr>
          <tr>
              <td  class="td5" style="padding-bottom: 2%;">
                  <div class="input-container">
                    <input type="number" name="Total_cctv">
                    <label style="margin-top: -1%;">Employee Password:</label>    
                  </div>
              </td>
          </tr>
  
          <tr>
              <td  class="td2 td3"><center><input type="submit" value="submit" class="btn"></center></td>
          </tr>
        </table>
      </form>
    </center>
  </form>

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