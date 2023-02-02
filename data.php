<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn=new mysqli('localhost','root','vac321','Registration');
if($conn->connect_error){
die('connecton failed:'.$conn->connect_error);
}
$sql="select * from Student";
$result=$conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<head>
<title>VAC</title>
<h1>Student Details</h1>
<style>
table,th,td{border:1px solid black;}
</style>
</head>
<body>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Gmail</th>
<th>Password</th>
<th>phonenumber</th>
</tr>
<?php

while($rows=$result->fetch_assoc())
{
?>
<tr>
<td><?php echo $rows['FirstName'];?></td>
<td><?php echo $rows['LastName'];?></td>
<td><?php echo $rows['Gmail'];?></td>
<td><?php echo $rows['Password'];?></td>
<td><?php echo $rows['phonenumber'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>

