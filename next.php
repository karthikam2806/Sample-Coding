<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Gmail=$_POST['Gmail'];
$Password=$_POST['Password'];
$Phonenumber=$_POST['Phonenumber'];

// Create connection
$conn = new mysqli('localhost','root','vac321','Registration');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Student VALUES ('$FirstName', '$LastName', '$Gmail', '$Password','$Phonenumber')";
echo $sql;
if(mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>
