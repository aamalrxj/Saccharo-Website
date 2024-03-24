<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

if (empty($name)) 
{
$message = 'Name is required';
echo "<SCRIPT>
alert('$message')
window.location.replace('reportadmin_ngo.php');
</SCRIPT>";
}


if (empty($email)) {
    $message = 'Password is required';
    echo "<SCRIPT>
alert('$message')
window.location.replace('reportadmin_ngo.php');
</SCRIPT>";        
}

if (empty($message)) {
    $message = 'Password is required';
    echo "<SCRIPT>
alert('$message')
window.location.replace('reportadmin_ngo.php');
</SCRIPT>";        
}

$query = "insert into reportadmin values('" . $name . "','" . $email . "','" . $message . "');";
$result=mysqli_query($connection,$query);
$messages = 'Report Submited';
echo "<SCRIPT>
        alert('$messages')
        window.location.replace('reportadmin_ngo.php');
    </SCRIPT>";
