<!DOCTYPE html>
<html>
<head>  
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

.button1 {
    background: #edf000; /* background color */
}
.button2 {
    background: #f15640;
}
.button3 {
    background: #27c9b8;
}
.button4 {
    background: #ADD8E6 ;
}
.button1:hover,
.button2:hover,
.button3:hover,
.button4:hover {
    background: #fff;
}

.button1,
.button2,
.button3,
.button4 {
    color: #1d1d1d; /* text color */
    display: inline-block;
    border-radius: 0; /* square corners */
    padding: 10px 18px; /* space around text */
    text-transform: uppercase; /* all capital letters */
    font-weight: 700;
    letter-spacing: 1px;
    -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    margin: 5px;
}

</style>
</head>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">&times;</button>
  <a style="color:black; font-family: baskerville,serif;"; href="logout.php" class="w3-bar-item w3-button">LOG OUT</a>
  <a style="color:black; font-family: baskerville,serif;"; href="showreports.php" class="w3-bar-item w3-button">REPORTS RECIEVED</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
  <h1 style="color:white; font-family: times new roman,serif;";>SACCHARO</h1>
  </div>
</div>

</div>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
<?php
session_start(); 
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);
$sql = "select * from admin";
$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
    
?>
<div class="button">
<br><br><a style="text-decoration:none" class="button1" href="donor_list.php">Registered Donor's List</a><a style="text-decoration:none" class="button2" href="ngo_list.php">Registered Ngo's List</a><a style="text-decoration:none" class="button3" href="postview.php">Show Current Post's</a><a style="text-decoration:none" class="button4" href="showrating.php">Show Donor Review's</a><a style="text-decoration:none" class="button1" href="messageview.php">Show Messages</a>
</div>

</body>
</html>