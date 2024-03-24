<?php
session_start(); 
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

$email=$_POST['email'];
$password=$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


if (empty($email)) 
{
$message = 'Email is required';
echo "<SCRIPT>
alert('$message')
window.location.replace('login_donor.php');
</SCRIPT>";

}
if (empty($password)) {
    $message = 'Password is required';
    echo "<SCRIPT>
alert('$message')
window.location.replace('login_donor.php');
</SCRIPT>";        

}

$sql = "select * from donor where email = '$email' and password = '$password'"; 
$result = mysqli_query($connection, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);  
          
if($count == 1){  
    echo "<h1><center> Login successful </center></h1>";
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];  
    header("location: homepage_donor.php"); 
    exit(); 
} else {
    $messsage = 'Login Failed. Retry';
    echo "<SCRIPT>
alert('$messsage')
window.location.replace('login_donor.php');
</SCRIPT>";        
    
}

if ($email == "saccharoadmin@gmail.com" && $password  == "admin")
    {
    header("location:admin.php");
    exit();
}
else{
    
}
?>
