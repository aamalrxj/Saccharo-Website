<!DOCTYPE html>
<html>
<title>Welcome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>



<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()"> &times;</button>
  <a style="color:black; font-family: baskerville,serif;"; href="profile_donor.php" class="w3-bar-item w3-button">PROFILE</a>
  <a style="color:black; font-family: baskerville,serif;"; href="reportadmin_donor.php" class="w3-bar-item w3-button">REPORT AN ISSUE TO ADMIN</a>
  <a style="color:black; font-family: baskerville,serif;"; href="message_donor.php" class="w3-bar-item w3-button">MESSAGE</a>
  <a style="color:black; font-family: baskerville,serif;"; href="logout.php" class="w3-bar-item w3-button">LOG OUT</a>

</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1 style="color:white; font-family: times new roman,serif;";>SACCHARO</h1>
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
     <style>
      
.button1 {
    background: #ADD8E6 ;
}
.button1:hover {
    background: #fff;
}
.button1 {
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
     <button class="button button1"><a style="text-decoration:none" href="addpost.php">+ Add Post</a></button><br><br>
</body>
</html>
<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);
$sql = "select * from post where post.email = '".$_SESSION['email']."'";
$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}

table {
  width: 100%;
}

th {
  height: 60px;
}
</style>
</head>


</style>
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table >
         <th>Name</th>
         <th>Email</th>
         <th>Phone Number</th>
         <th>City</th>
         <th>Zip/Postal Code</Code></th>
         <th>Food Item</th>
         <th>Food Quantity</th>
         <th>Delete Post</th>
    </thead>
    <tbody>
  <?php
     while($row = mysqli_fetch_assoc($result)){
        ?>
      <tr>
      <td><?php echo $row['name']??''; ?></td>
      <td><?php echo $row['email']??''; ?></td>
      <td><?php echo $row['phonenumber']??''; ?></td>
      <td><?php echo $row['city']??''; ?></td>
      <td><?php echo $row['zip']??''; ?></td>
      <td><?php echo $row['fooditem']??''; ?></td>
      <td><?php echo $row['foodquantity']??''; ?></td> 
      <td><a href="delete.php?name=<?php echo $row['name']; ?>">Delete</a></td>
     </tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
<?php 
}else{
     header("Location:login_donor.php");
     exit();

}
 ?>

