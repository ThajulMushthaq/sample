<?php
session_start ();
if(!isset($_SESSION["login"])){
    header("location:login.php"); 
}
include 'db-connection.php';

$sql=mysqli_query($conn,"select * from user where userid='".$_SESSION["login"]."' ");
$row=mysqli_fetch_array($sql);

if(isset($_POST['update'])){
  // var_dump($_POST);
  // exit();

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $hash = password_hash($password, PASSWORD_BCRYPT);

    $edit=mysqli_query($conn,"update user set fname='$fname',lname='$lname',mail='$mail',address='$address',gender='$gender',dob='$dob' where userid='".$_SESSION["login"]."' ");
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
      .container{
        max-width: 700px;
      }
    </style>

</head>
<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a class="active" href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="container">
        <hr>
    <h1 class="text-primary"><i class="fas fa-user-edit"></i> Edit Profile</h1>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        <form action="edit-profile.php" method="POST">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fname" value="<?php echo $row['fname']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lname" value="<?php echo $row['lname']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <textarea class="form-control" name="address"><?php echo $row['address']; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
                <input type="radio" name="gender" value="Male" <?php echo ($row['gender']=='Male') ? 'checked':''; ?>> <label>Male</label> 
                <input type="radio" name="gender" value="Female" <?php echo ($row['gender']=='Female') ? 'checked':''; ?>> <label>Female</label>  
                <input type="radio" name="gender" value="Other" <?php echo ($row['gender']=='Other') ? 'checked':''; ?>> <label>Other</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">D.O.B:</label>
            <div class="col-lg-8">
                <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" name="mail" value="<?php echo $row['mail']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-8">
              <input type="submit" name="update" value="Save Changes" class="form-control btn btn-primary">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-8">
              <a href="password-reset.php" class="form-control btn btn-danger">Change Password</a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
</html>