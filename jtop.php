<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn=new mysqli('localhost','root','','Registration');
if($conn->connect_error){
die('connecton failed:'.$conn->connect_error);
}
$sql="select * from Student";
$result=$conn->query($sql);
$conn->close();
while($rows=$result->fetch_assoc())
$json=json_decode(file_get_contents('http://192.168.1.37/karthika/json.php'));
print_r($json);
?>


