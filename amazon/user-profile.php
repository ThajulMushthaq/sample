<?php
session_start ();
if(!isset($_SESSION["login"])){
    header("location:login.php"); 
}
include 'db-connection.php';

$result=mysqli_query($conn,"SELECT * FROM user WHERE userid='".$_SESSION['login']."'");
// var_dump($result);
// exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a class="active" href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="">
        <table>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Address</th>
                <th>Gender</th>
                <th>D.O.B</th>
            </tr>
            <?php
            while($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['fname']." ".$row['lname']."</td>";
            echo "<td>".$row['mail']."</td>" ;
            echo "<td>".$row['address']."</td>" ;
            echo "<td>".$row['gender']."</td>" ;
            echo "<td>".$row['dob']."</td>" ;
            echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div style="margin-left: 400px;">
        <a href="edit-profile.php" class="btn btn-primary">Edit</a>
    </div>
</body>
</html>