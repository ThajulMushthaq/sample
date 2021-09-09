<?php
session_start ();
if(!isset($_SESSION["login"])){
    header("location:login.php"); 
}
include 'db-connection.php';

$result=mysqli_query($conn,"SELECT * FROM user WHERE userid='".$_SESSION['login']."'");
$row=mysqli_fetch_array($result);
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
    <!-- Font awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- Google icons    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="style.css">

    <style>
    </style>

</head>
<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a class="active" href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 img-thumbnail">
                            <img src="http://placehold.it/160x200" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <?php echo "<h3>".$row['fname']." ".$row['lname']."</h3>";?>
                            <?php echo '<small class="location"><cite>'.$row['address'].' '.'<i class="fas fa-map-marker"></i></cite></small>' ;?>
                            <?php echo '<p>
                                <i class="fas fa-envelope"></i>'.' '.$row['mail'].
                                '<br />
                                <i class="fas fa-user"></i>'.' '.$row['gender'].
                                '<br />
                                <i class="fas fa-gift"></i>'.' '.$row['dob'].
                            '</p>' ;?>
                            <a href="edit-profile.php" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                            <a href="my-products.php" class="btn btn-danger"><i class="fas fa-shopping-bag"></i> My Products</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>