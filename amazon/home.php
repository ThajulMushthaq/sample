<?php
include "db-connection.php";

$sql=mysqli_query($conn,"select * from products");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="login.php">Login</a>
        <a href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a class="active" href="home.php">Home</a>
    </div>
    <?php
    while($row=mysqli_fetch_array($sql)){
    echo '<div class="card">
            <img src="'.$row["image"].'">
            <label>'.$row["name"].'</label>
            <p>'.$row["description"].'</p>
            <label>'.$row["date"].'</label>
        </div>';
    }
    ?>
</body>
</html>