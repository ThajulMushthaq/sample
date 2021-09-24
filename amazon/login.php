<!DOCTYPE html>
<html>

<head>
    <title>Amazone Login</title>

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
            max-width: 500px;
        }
    </style>

</head>

<body>
    <div class="topnav">
        <!-- <a href="logout.php">Logout</a> -->
        <a href="signup_form.php">Register</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="container">
        <div class="">
            <hr>
            <img src="./images/logo.png" class="rounded mx-auto d-block">
            <hr>
        </div>
        <div>
            <form action="login-function.php" method="POST">
                <label class="control-label">E-mail :</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="mail" class="form-control" placeholder="Enter email" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <label class="control-label">Password :</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <hr>
                <div style="text-align: center;">
                    <input type="submit" value="Login" name="sub" class="btn btn-primary mr-2">
                    <a class="btn btn-secondary" href="signup_form.php" role="button">Create New Account</a>
                    <?php
                    if (isset($_REQUEST["err"])) {
                        $msg = "*Invalid username or Password";
                    }
                    ?>
                    <p style="color: red;">
                        <?php if (isset($msg)) {
                            echo $msg;
                        }
                        ?>
                    </p>
                </div>
            </form>
            <hr>
        </div>
    </div>



</body>

</html>