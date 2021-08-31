<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h4>Products</h4>
        <a href="logout.php"><h2><font color="red">Logout</font></h2>

        <a href="logout.php"><h2><font color="red">Logout</font></h2></a>
    </div>
</body>
</html>