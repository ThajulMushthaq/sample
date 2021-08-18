<!DOCTYPE html>
<html>
<head>
    <title>Amazon Signup</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

    </style>

</head>
<body>
<!-- <?php $fnameErr=$lnameErr=$mailErr=$genderErr="";?> -->
    
    <div align=center>
    <div>
        <img src="amazon-logo.png" width="250" height="70"><br>
    </div><br>
    <div>
        <form action="amazon sign function.php" method="POST">
            First Name<input type="text" name="fname">
            <!-- <span class="error">* <?php echo $fnameErr;?></span> -->
            <br><br>
            Last Name<input type="text" name="lname">
            <!-- <span class="error">* <?php echo $lnameErr;?></span> -->
            <br><br>
            E-mail <input type="text" name="mail">
            <!-- <span class="error">* <?php echo $mailErr;?> -->
            <br><br>
            Address <textarea name="address" raws="10" cols="40"></textarea>
            <br><br>
            Gender <input type="radio" name="gender" value="male"> Male 
            <input type="radio" name="gender" value="female"> Female  
            <input type="radio" name="gender" value="other"> Other
            <!-- <span class="error">* <?php echo $genderErr;?> -->
            <br><br>
            <input type="submit" name="submit" value="Sign In">

        </form>
    </div>
    </div>
    

</body>

</html>