<?php
session_start ();
if(!isset($_SESSION["login"]))
	header("location:login.php");

include "db-connection.php";

if(isset($_POST['submit'])){
    $name=$_POST['product_name'];
    $image=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    // var_dump($_FILES);
    // exit();
    $target="./images/";
    $new_name=$target.time()."-".rand(1000,9999)."-".$image;
    $description=$_POST['description'];

    $sql="insert into products values(null,'$name','$new_name','$description',now())";
    
    if(mysqli_query($conn,$sql)){
        if(move_uploaded_file($tmp_name, $new_name)){
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

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="user-profile.php">Profile</a>
        <a class="active" href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="divmain">
        <form action="products.php" method="POST" enctype="multipart/form-data">
            <label for="">Add Image</label>
            <input type="file" src="" name="image" id="imageUpload" accept=".png, .jpg, .jpeg"><br><br>
            <img id="imagePreview" src="./images/upload-img.png" alt=""><br><br>
            <label for="">Product Name</label>
            <input type="text" name="product_name" id=""><br><br>
            <label for="">Description</label>
            <textarea name="description" id="" cols="30"></textarea><br><br>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
    <script>
        function readURL(input){
            if(input.files && input.files[0]){
                var reader=new FileReader();
                reader.onload=function(e){
                    $('#imagePreview').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#imageUpload').change(function(){
            readURL(this);
        });
    </script>
</body>
</html>