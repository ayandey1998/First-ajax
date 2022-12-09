<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "mydatabase";

$conn=mysqli_connect($host, $userName, $password, $dbName);
if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
?>