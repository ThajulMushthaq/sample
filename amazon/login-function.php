<?php
session_start();
// var_dump($_SESSION);

include "db-connection.php";

if(isset($_POST['sub'])){
    $mail=$_POST['mail'];
    $password=$_POST['pswd'];
    
    $result=mysqli_query($conn,"SELECT * FROM user WHERE mail='$mail'");
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            if(password_verify($password, $row['pswd'])){
                $_SESSION["login"]="1";
                header("location: home.php");
            }
            else{
                echo '<script>alert("Wrong user details")</script>';
            }
        }
    }
    // $row=mysqli_fetch_array($result);
    // if($row){
    //     $_SESSION["login"]="1";
    //     header("location: home.php");
    // }
    // else{
    //     header("location: login.php?err=1");
    // }
    
}
?>
