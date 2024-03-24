<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name); // Using database connection file here

$name = $_GET['name'];


$del = mysqli_query($connection,"delete from ngo where name = '$name'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("location:ngo_list.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>