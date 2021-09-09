<?php
include "db-connection.php";
session_start();

$sql=mysqli_query($conn,"select products.pid,products.name,products.image,products.date,user.fname,user.lname from products left join user on products.userid=user.userid");
// $data=mysqli_fetch_array($sql);

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
    <!-- Font awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="topnav">
        <?php
        if(isset($_SESSION['login'])){            
            echo '<a href="logout.php">Logout</a>' ;
        } else {
            echo '<a href="login.php">Login</a>' ;
        }
        ?>
        <a href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a class="active" href="home.php">Home</a>
    </div>
    <?php
    while($row=mysqli_fetch_array($sql)){
    echo '<div class="card col-md-3 ">
            <h4>'.$row["fname"].' '.$row["lname"].'</h4>
            <img src="'.$row["image"].'">
            <label>'.$row["name"].'</label><br>
            <label>'.$row["date"].'</label>
            <a href="product-details.php?pid='.$row["pid"].'" class="stretched-link"></a>
        </div>';
    }
    ?>
</body>
</html>