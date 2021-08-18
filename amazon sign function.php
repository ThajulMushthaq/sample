<?php
$conn = mysqli_connect("localhost", "root", "", "amazon");

if($conn==false){
    die("ERROR: could not connect. " . mysqli_connect_error());
}
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$mail=$_REQUEST['mail'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];

$sql = "INSERT INTO user VALUES ('NULL','$fname','$lname','$mail','$address','$gender')";

if(mysqli_query($conn, $sql)){
    echo "<h4>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h4>"; 

    echo nl2br("\n$fname\n $lname\n "
        . "$mail\n $address\n $gender");
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

mysqli_close($conn);


?>