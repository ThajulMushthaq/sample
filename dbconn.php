<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

//create a database
$sql = "CREATE DATABASE demo";
if(mysqli_query($conn, $sql)){
  echo "Database created successfully";
} else{
  echo "Error creating Database: " . mysqli_error($conn);
}






mysqli_close($conn);


?>