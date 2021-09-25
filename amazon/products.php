<?php
include "db-connection.php";
session_start();
if (!isset($_SESSION["login"])){
    header("location:login.php");
}


if (isset($_POST['submit'])) {
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    // var_dump($_FILES);
    // exit();
    $target = "./images/";
    $new_name = $target . time() . "-" . rand(1000, 9999) . "-" . $image;
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "insert into products values(null,'$name','$new_name','$description',now(),'" . $_SESSION['login'] . "','$price')";
    // var_dump($sql);
    // exit();

    if (mysqli_query($conn, $sql)) {
        if (move_uploaded_file($tmp_name, $new_name)) {
            header('location:home.php');
        }
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

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

    <style>
        #imagePreview {
            max-height: 100px;
            width: auto;
        }

        .container {
            max-width: 700px;
        }
    </style>

</head>

<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="user-profile.php">Profile</a>
        <a class="active" href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="container">
        <hr>
        <h1 class="text-primary"><i class="fas fa-shopping-cart"></i> Add Product</h1>
        <hr>
        <form action="products.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label">Add Image</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input form-control" id="customFile" accept=".png, .jpg, .jpeg">
                    <label class="custom-file-label control-label" for="customFile">Choose file</label>
                </div>
                <div class="text-center mt-3">
                    <img src="./images/upload-img.png" class="rounded img-thumbnail" id="imagePreview">
                </div>
                <div class="">
                    <label class="control-label">Name</label>
                    <input type="text" name="product_name" class="form-control">
                    <label class="control-label">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        <input class="form-control" type="number" name="price" min="0.00" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label class="control-label">Description</label>
                    <textarea name="description" class="form-control" cols="30"></textarea><br>
                    <button type="submit" name="submit" class="btn btn-primary form-control">Upload</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#customFile').change(function() {
            readURL(this);
        });
    </script>
</body>

</html>