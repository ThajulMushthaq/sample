<!DOCTYPE html>
<html>
<head>
    <title>Amazone Login</title>
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

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="topnav">
        <!-- <a href="logout.php">Logout</a> -->
        <a href="signup_form.php">Register</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="divmain">
        <div>
            <img src="./images/logo.png"><br>
        </div><br>
        <div>
            <form action="login-function.php" method="POST">
                <div>
                    <label>E-mail :</label><input type="email" name="mail" placeholder="Enter email" class="form-control"><br><br>
                    <label>Password :</label><input type="password" name="password" placeholder="Enter password" class="form-control"><br><br>
                </div>
                <div style="text-align: center;">
                    <input type="submit" value="Login" name="sub" class="btn btn-primary">
                    <a href="signup_form.php" class="btn btn-secondary ml-2">Create New Account</a><br>
                    <?php
                    if (isset($_REQUEST["err"])) {
                        $msg="*Invalid username or Password";
                    }
                    ?>           
                    <p style="color: red;">
                    <?php if(isset($msg)){
                        echo $msg;
                    }
                    ?>
                    </p>
                </div>
            </form>
        </div>
    </div>



</body>
</html>