<?php
session_start();
// var_dump($_SESSION);

include "db-connection.php";

if(isset($_POST['sub'])){
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    
    $result=mysqli_query($conn,"SELECT * FROM user WHERE mail='$mail'");
    // var_dump($result);
    if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_array($result);
        if(password_verify($password, $row["password"])){
            $_SESSION["login"]=$row['userid'];
            // var_dump($_SESSION);
            // exit();
            header("location: home.php");
        }
        else{
            echo '<script>alert("Wrong username / password! Please try again!");window.location="login.php"</script>';
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
