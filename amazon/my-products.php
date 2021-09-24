<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
include "db-connection.php";

$result = mysqli_query($conn, "SELECT * FROM products WHERE userid='" . $_SESSION['login'] . "'");
// $row=mysqli_fetch_array($result);

// var_dump($row);
// exit();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Products</title>

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

    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: right;
            color: #f2f2f2;
            text-align: center;
            padding: 15px 16px;
            text-decoration: none;
            font-size: 20px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #047baa;
            color: white;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }
    </style>

</head>

<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="card-deck m-3">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo '
    <div class="card border-secondary">
        <img class="card-img-top" src="' . $row["image"] . '">
        <div class="card-body">
            <h5 class="card-title">' . $row["name"] . '</h5>
            <p class="card-text">' . $row["description"] . '</p>
            <p class="card-text"><small class="text-muted">$' . $row["price"] . '</small></p>
        </div>
        <a href="edit-product.php?pid=' . $row["pid"] . '" class="btn btn-primary">Edit</a>
    </div>
    ';
        }
        ?>
    </div>

</body>

</html>