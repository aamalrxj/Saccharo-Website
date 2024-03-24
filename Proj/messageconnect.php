<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

$receiveremail=$_POST['email'];
$senderemail=$_POST['email2'];
$message=$_POST['message'];

$query = "insert into message values('" . $receiveremail . "','" . $senderemail . "','" . $message . "',now())";

$result=mysqli_query($connection,$query);
$message = 'Message Send';
echo "<SCRIPT>
        alert('$message')
        window.location.replace('homepage_ngo.php');
    </SCRIPT>";

?>