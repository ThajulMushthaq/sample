<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amazon";
  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}


  
// Closing the connection.
$conn->close();
  


?>