<?php
session_start(); 
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "saccharo";
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

$sql = "select * from ngo";
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

.button1:hover {
    background: #fff;
}

.button1 {
    color: #1d1d1d; /* text color */
    display: inline-block;
    border-radius: 0; /* square corners */
    padding: 0px 18px; /* space around text */
    text-transform: uppercase; /* all capital letters */
    font-weight: 600;
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
    <div class="table-responsive">
      <table >
         <th>Name</th>
         <th>Location</th>
         <th>Organizationname</th>
         <th>Email</th>
         <th>Password</Code></th>
         <th>Delete User</th>

         
    </thead>
    <tbody>
  <?php
     while($row = mysqli_fetch_assoc($result)){
        ?>
      <tr>
      <td><?php echo $row['name']??''; ?></td>
      <td><?php echo $row['location']??''; ?></td>
      <td><?php echo $row['organizationname']??''; ?></td>
      <td><?php echo $row['email']??''; ?></td>
      <td><?php echo $row['password']??''; ?></td>
      <td><a href="delete_ngo.php?name=<?php echo $row['name']; ?>">Delete</a></td>

     </tr>
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
<a style="text-decoration:none" href="admin.php" class="button1"><h4>Go Back</h4></a>
</html>