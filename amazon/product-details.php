<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
include "db-connection.php";

$product = $_GET['pid'];
// var_dump($product);
$sql = mysqli_query($conn, "select * from products where pid='" . $product . "'");
// var_dump($sql);
$row = mysqli_fetch_array($sql);
// var_dump($row);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Details</title>

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

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="user-profile.php">Profile</a>
        <a class="active" href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <!--Section: Block Content-->
    <section class="mb-5">
        <div class="row">
            <div class="col-md-3">
                <div id="mdb-lightbox-ui"></div>
                <div class="mdb-lightbox">
                    <div class="row product-gallery mx-1">
                        <div class="col-12 mb-0">
                            <?php echo "<img src='" . $row['image'] . "' class='product-img'>"; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php echo "<h3>" . $row['name'] . "</h3>"; ?>
                <?php echo "<p><strong>$" . $row['price'] . "</strong></p>"; ?>
                <?php echo "<p class='pt-1'>" . $row['description'] . "</p>"; ?>
                <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
                <button type="button" class="btn btn-light btn-md mr-1 mb-2" style="box-shadow: black;"><i class="fas fa-shopping-cart"></i>Add to cart</button>
            </div>
            <div class="col-md-3" style="margin-top: 5px;">
                <label for="">Comment</label>
                <input type="text" name="comment" id="">
            </div>
        </div>
    </section>
    <!--Section: Block Content-->
</body>

</html>