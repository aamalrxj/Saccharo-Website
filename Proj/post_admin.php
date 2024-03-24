<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['phone'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$fooditem=$_POST['food'];
$foodquantity=$_POST['foodq'];


if (empty($name)) {
    $message = 'Name is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('addpost_admin.php');
</SCRIPT>";

}

if (empty($email)) {
    $message = 'Email is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('addpost_admin.php');
</SCRIPT>";
   
}

if (empty($fooditem)) {
    $message = 'Food Item is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('addpost_admin.php');
</SCRIPT>";
  
}

if (empty($foodquantity)) 
{
$message = 'Food Quantity is required';
echo "<SCRIPT>
alert('$message')
window.location.replace('addpost_admin.php');
</SCRIPT>";

}

$query = "insert into post values('" . $name . "','" . $email . "','" . $phonenumber . "','" . $city . "','" . $zip . "','" . $fooditem . "','" . $foodquantity . "',now());";

$result=mysqli_query($connection,$query);
$message = 'Post Added';
echo "<SCRIPT>
        alert('$message')
        window.location.replace('postview.php');
    </SCRIPT>";

?>
