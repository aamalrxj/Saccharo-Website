
<?php
session_start();
if (isset($_SESSION['email']))
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name); // Using database connection file here

$password = $_POST['password1'];

if (empty($password)) {
    $message = 'Password is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('editpassword.php');
</SCRIPT>";
}

$del = mysqli_query($connection,"update donor set password='$password' where email='".$_SESSION['email']."'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("location:profile_donor.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Updating Failed"; // display error message if not delete
    header("location:profile_donor.php"); // redirects to all records page
}

?>