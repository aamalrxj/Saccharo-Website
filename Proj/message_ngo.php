<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h3><a style="text-decoration:none" class=button2 href="message.php">+ Send Message</a><br></h3>
</div>
</body>
</html>
<?php
session_start();
if (isset($_SESSION['email']))
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);
$sql = "select Fromuser,Message,time from message where Touser = '".$_SESSION['email']."'";
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

.button1 {
    background: #27c9b8; /* background color */
}
.button2 {
    background: #f15640;
}

.button1:hover {
    background: #fff;
}
.button2:hover {
    background: #fff;
}


.button1{
  color: #1d1d1d; /* text color */
    display: inline-block;
    border-radius: 0; /* square corners */
    padding: 0px 18px; /* space around text */
    text-transform: uppercase; /* all capital letters */
    font-weight: 700;
    letter-spacing: 1px;
    -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    margin: 8px;
}

.button2 {
    color: #1d1d1d; /* text color */
    display: inline-block;
    border-radius: 0; /* square corners */
    padding: 3px 18px; /* space around text */
    text-transform: uppercase; /* all capital letters */
    font-weight: 700;
    letter-spacing: 1px;
    -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    margin: 8px;
}

</style>
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table >
         <th>Sender</th>
         <th>Time</th>
         <th>Message</th>


    </thead>
    <tbody>
  <?php
     while($row = mysqli_fetch_assoc($result)){
        ?>
      <tr>
      <td><?php echo $row['Fromuser']??''; ?></td>
      <td><?php echo $row['time']??''; ?></td>
      <td><?php echo $row['Message']??''; ?></td>
      <tr>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
<div class="button">
<a style=text-decoration:none href="homepage_ngo.php" class="button1"><h4>Go Back</h4></a>
  </div>
</body>
</html>
<?php 


