<?php

//header("Content-type:application/json");

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
$arr=array();
while($rows=$result->fetch_assoc())
$arr[]=$rows;
//$json_pretty= json_encode($arr,JSON_PRETTY_PRINT);
//echo "<pre>".$json_pretty."</pre>";
//$arr[]=$rows;
//echo json_encode($arr);
echo json_encode($arr);
?>


