<?php
include 'db-connection.php';


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$hash = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO user VALUES (NULL,'$fname','$lname','$mail','$address','$gender','$dob','$hash')";
if(mysqli_query($conn, $sql)){
    header('Location: login.php');
}



mysqli_close($conn);
