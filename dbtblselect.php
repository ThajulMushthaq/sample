<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT id, firstname, lastname FROM sample ";
// $sql="RENAME TABLE user TO sample";--------------------rename table name
//$sql="UPDATE MyGuests SET lastname='Doe' WHERE id=2"; ---------update query
// $sql = "DELETE FROM MyGuests WHERE id=3"; --------------------delete query
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: ".$row["id"]."-name: " . $row["firstname"]." ". $row["lastname"]. "<br>";

    }
}else {
    echo "0 results";
}


mysqli_close($conn);
?>