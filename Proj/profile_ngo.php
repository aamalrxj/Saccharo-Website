
<?php 
session_start();
if (isset($_SESSION['email'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Welcome, <?php echo $_SESSION['email']; ?></h1>
</body>
</html>
<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);
$sql = "select * from ngo where ngo.email = '".$_SESSION['email']."'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      echo "<div class='card'>";
      echo "<h3><strong>Name:</strong> " . $row['name'] . ' <a href="editname_ngo.php">Edit</a></h3>';
      echo "<h3><strong>Location:</strong> " . $row['location'] . "</h3>";
      echo "<h3><strong>Adhaar No:</strong> " . $row['organizationname'] . "</h3>";
      echo "<h3><strong>Email:</strong> " . $row['email'] . "</h3>";
      echo "<h3><strong>Password:</strong> " . $row['password'] . ' <a href="editpassword_ngo.php">Edit</a></h3>';
      echo "<h3><strong>Phone:</strong> " . $row['phoneno'] . ' <a href="editphone_ngo.php">Edit</a></h3>';
      echo "<h3><strong>Address:</strong> " . $row['address'] . "</h3>";
      echo "</div>";
  }
} else {
  echo "0 results";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>

.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    padding: 10px;
}
.card h2 {
    font-size: 1.2rem;
    margin: 0;
}
.card p {
    margin: 0;
}

</style>
   </div>
</div>
</div>
</div>
<a href="homepage_ngo.php" class="button"><h4>Go Back</h4></a>
</body>
</html>
<?php 
}else{
     header("Location:login_ngo.php");
     exit();

}
 ?>
