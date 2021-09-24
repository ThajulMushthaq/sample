<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
include "db-connection.php";

if (isset($_GET['pid'])) {
    $product = $_GET['pid'];
    $sql = mysqli_query($conn, "select * from products where pid='" . $product . "'");
    $row = mysqli_fetch_array($sql);
}
if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // exit();---------------------------------------------------not updating in database
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $target = "./images/";
    $new_name = $target . time() . "-" . rand(1000, 9999) . "-" . $image;
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    // $pid=$_POST['id'];

    $edit = mysqli_query($conn, "update products set name='$name',image='$new_name',description='$description',price='$price' where pid='" . $_POST["id"] . "' ");
    if ($edit) {
        header("location:my-products.php");
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

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
        .container {
            max-width: 700px;
        }

        #imagePreview {
            max-height: 100px;
            width: auto;
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
    <div class="container">
        <hr>
        <h1 class="text-primary"><i class="fas fa-pen-square"></i> Edit Product</h1>
        <hr>
        <form action="edit-product.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label">Change Image</label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input form-control" id="customFile" accept=".png, .jpg, .jpeg">
                    <label class="custom-file-label control-label" for="customFile">Choose file</label>
                </div>
                <div class="text-center mt-3">
                    <img src="<?php echo $row['image']; ?>" class="rounded img-thumbnail" id="imagePreview">
                </div>
                <div class="">
                    <label class="control-label">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                    <label class="control-label">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        <input class="form-control" type="number" name="price" min="0.00" value="<?php echo $row['price']; ?>" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label class="control-label">Description</label>
                    <textarea name="description" class="form-control" cols="30"><?php echo $row['description']; ?></textarea><br>
                    <input type="submit" name="submit" value="Save Changes" class="form-control btn btn-primary">
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