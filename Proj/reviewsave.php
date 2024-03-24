<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

$email=$_POST['email'];
$donoremail=$_POST['email2'];
$rating=$_POST['rating'];
$review=$_POST['review'];


if (empty($email)) {
    $message = 'Email is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('review.php');
</SCRIPT>";
}

if (empty($donoremail)) {
    $message = 'Donor Email is required';
    echo "<SCRIPT>
alert('$message')
window . location . replace('review.php');
</SCRIPT>";
}

$query = "insert into rating values('" . $email . "','" . $donoremail . "','" . $rating . "','" . $review . "')";

$result=mysqli_query($connection,$query);
$message = 'Review Send';
echo "<SCRIPT>
        alert('$message')
        window.location.replace('homepage_ngo.php');
    </SCRIPT>";

?>