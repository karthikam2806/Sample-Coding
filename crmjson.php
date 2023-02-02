<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn=new mysqli('localhost','root','vac321','vtigercrm');
if($conn->connect_error){
die('connecton failed:'.$conn->connect_error);
}
$sql = "select phone from vtiger_leadaddress where leadaddressid=5;";

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


