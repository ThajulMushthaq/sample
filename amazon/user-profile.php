<?php
session_start ();
if(!isset($_SESSION["login"])){
    header("location:login.php"); 
}
include 'db-connection.php';

$result=mysqli_query($conn,"SELECT * FROM user WHERE mail='".$_SESSION['login']."'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a class="active" href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="divmain">
        <table>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
            </tr>
            <?php
            while($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['fname']."</td>";
            echo "<td>".$row['mail']."</td>" ;
            echo "</tr>";
            }
            ?>
            
        </table>


    </div>
</body>
</html>