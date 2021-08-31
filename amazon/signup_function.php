<?php
include_once 'db-connection.php';


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$password=$_POST['pswd'];
$password = password_hash($password, PASSWORD_DEFAULT);
var_dump($hashed_password);
// $password=password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user VALUES (NULL,'$fname','$lname','$mail','$address','$gender','$dob','$password')";

if(mysqli_query($conn, $sql)){
    header('Location: login.php');
}

mysqli_close($conn);


?>