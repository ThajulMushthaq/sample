<?php
session_start ();
if(!isset($_SESSION["login"])){
    header("location:login.php"); 
}
include 'db-connection.php';

$sql=mysqli_query($conn,"select * from user where userid='".$_SESSION["login"]."' ");
$row=mysqli_fetch_array($sql);
// var_dump($sql);
// exit();
if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $hash = password_hash($password, PASSWORD_BCRYPT);

    $edit=mysqli_query($conn,"update user set fname='$fname',lname='$lname',mail='$mail',address='$address',gender='$gender',dob='$dob',password='$hash' where userid='".$_SESSION["login"]."' ");
    if($edit){
        header("location:user-profile.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a class="active" href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <hr><h4>Edit Your Profile</h4><hr>
    <div>
        <form action="edit-profile.php" method="POST">
            <label>First Name: </label><input type="text" name="fname" value="<?php echo $row['fname']; ?>">
            <label>Last Name: </label><input type="text" name="lname" value="<?php echo $row['lname']; ?>">
            <label>D.O.B: </label><input type="date" name="dob" value="<?php echo $row['dob']; ?>">
            <label>Address: </label><textarea name="address"><?php echo $row['address']; ?></textarea><br>
            <label >Gender: </label>
            <input type="radio" name="gender" value="Male" <?php echo $row['gender']=='male' ? "checked":""; ?>> <label>Male</label> 
            <input type="radio" name="gender" value="Female" <?php echo $row['gender']=='female' ? "checked":""; ?>> <label>Female</label>  
            <input type="radio" name="gender" value="Other" <?php echo $row['gender']=='other' ? "checked":""; ?>> <label>Other</label><br>
            <label>E-mail: </label><input type="email" name="mail" value="<?php echo $row['mail']; ?>">
            <label>Password: </label><input type="password" name="password" value="" required><br>
            <div style="text-align: center;"><input type="submit" name="update" value="Update" class="btn btn-primary"></div>
        </form>
    </div>
</body>
</html>