<!DOCTYPE html>
<html>
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>


<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()"> &times;</button>
  <a style="color:black; font-family: baskerville,serif;"; href="profile_ngo.php" class="w3-bar-item w3-button">PROFILE</a>
  <a style="color:black; font-family: baskerville,serif;"; href="logout.php" class="w3-bar-item w3-button">LOG OUT</a>
  <a style="color:black; font-family: baskerville,serif;"; href="reportadmin_ngo.php" class="w3-bar-item w3-button">REPORT TO ADMIN</a>
  <a style="color:black; font-family: baskerville,serif;"; href="review.php" class="w3-bar-item w3-button">SEND DONOR RATING</a>
  <a style="color:black; font-family: baskerville,serif;"; href="message_ngo.php" class="w3-bar-item w3-button">RECEIVED MESSAGES</a>

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
if (isset($_SESSION['email'])) {
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 style="color:black; font-family: baskerville,serif;";>Welcome, <?php echo $_SESSION['email']; ?></h1>
</body>
</html>
<?php
        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $database_name = "saccharo";
        $connection = mysqli_connect($server_name, $user_name, $password, $database_name);
        $sql = "select * from post";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) > 0){
        }else{
            $msg = "No Record found";
        }
    ?>


      <?php
         while($row = mysqli_fetch_assoc($result)){
            ?>
          <div class="w3-cursive">
            <div class="w3-panel w3-border w3-round-large w3-blue-grey">
            <h3 style="color:red; font-family: baskerville,serif;"><b><?php echo $row['fooditem']??''; ?></b></h3>
            <h5 style="color:black; font-family: baskerville,serif;"><?php echo $row['city']??''; ?>-<?php echo $row['zip']??''; ?></h5>
            <h5 style="color:black; font-family: baskerville,serif;">Quantity : <?php echo $row['foodquantity']??''; ?></h5>
            <h5 style="color:black; font-family: baskerville,serif;">Name : <?php echo $row['name']??'' ?></h5>
            <h5 style="color:black; font-family: baskerville,serif;">Email : <?php echo $row['email']??''; ?></h5>
            <h5 style="color:black; font-family: baskerville,serif;">Phone Number :<?php echo $row['phonenumber']??''; ?></h5>
            <h5 style="color:black; font-family: baskerville,serif;">Date/Time Added :<?php echo $row['time']??''; ?></h5>
            <a  class="button1" href="message.php">Message</a>

          </div>
        </div>
        <?php
        }
    }else{
         header("Location:login_ngo.php");
         exit();
    
    }
     ?>
</body>
</html>