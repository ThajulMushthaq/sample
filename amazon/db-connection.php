<?php
  
// Create connection
$conn = mysqli_connect("localhost","root","","amazon");
  
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else{
//     echo "connected successfully";
// }


  
// Closing the connection.
// mysqli_close($conn);


?>