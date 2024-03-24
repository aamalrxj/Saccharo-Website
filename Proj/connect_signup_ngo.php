<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

$name=$_POST['name'];
$location=$_POST['location'];
$organizationname=$_POST['org'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


if (empty($name)) {
    $message = 'Name is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('login_ngo.php');
</SCRIPT>";

}

if (empty($location)) {
    $message = 'Location is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('login_ngo.php');
</SCRIPT>";
   
}

if (empty($organizationname)) {
    $message = 'Organization details is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('login_ngo.php');
</SCRIPT>";
  
}

if (empty($email)) 
{
$message = 'Email is required';
echo "<SCRIPT>
alert('$message')
window.location.replace('login_ngo.php');
</SCRIPT>";

}


if (empty($phoneno)) {
    $message = 'Phone No is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('login_donor.php');
</SCRIPT>";
  
}

if (empty($address)) {
    $message = 'Address is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('login_donor.php');
</SCRIPT>";
  
}


if (empty($password)) {
    $message = 'Password is required';
    echo "<SCRIPT>
alert('$message')
window.location.replace('login_ngo.php');
</SCRIPT>";        

}


if (empty($cpassword)) 
{
$message = 'Password is required';
echo "<SCRIPT>
alert('$message')
window.location.replace('login_ngo.php');
</SCRIPT>";

}


if($password!=$cpassword)
{
    echo "<h1>Access Denied</h1>";
    exit();
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "insert into ngo values('" . $name . "','" . $location . "','" . $organizationname . "','" . $email . "','" . $password . "','" . $phoneno . "','" . $address . "');";

$result=mysqli_query($connection,$query);

$message = 'Signin Successful. Login with your new detials';
echo "<SCRIPT>
        alert('$message')
        window.location.replace('login_ngo.php');
    </SCRIPT>";

?>