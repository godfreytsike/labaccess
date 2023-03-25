<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "fost laboratory";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  echo "$conn->connect_error";
  die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully";}
?>