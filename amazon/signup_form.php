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

    <link rel="stylesheet" href="style.css" type="text/css">

    <style>
        .container {
            max-width: 500px;
        }
    </style>

</head>

<body>
    <div class="topnav">
        <a href="login.php">Login</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <div class="container">
        <div class="text-center">
            <hr><img src="./images/logo.png">
        </div>
        <hr>
        <h4>Create New Account</h4>
        <hr>
        <div>
            <form action="signup_function.php" method="POST">
                <label>First Name: </label><input type="text" name="fname" class="form-control">
                <label>Last Name: </label><input type="text" name="lname" class="form-control">
                <label>D.O.B: </label><input type="date" name="dob" class="form-control">
                <label>Address: </label><textarea name="address" class="form-control"></textarea>
                <label>Gender: </label><br>
                <input class="form-check-input" type="radio" name="gender" value="Male"> <label>Male</label>
                <input class="form-check-input" type="radio" name="gender" value="Female"> <label>Female</label>
                <input class="form-check-input" type="radio" name="gender" value="Other"> <label>Other</label><br>
                <label>E-mail: </label><input type="email" name="mail" class="form-control" required>
                <label>Password: </label><input type="password" name="password" class="form-control" required><br>
                <div style="text-align: center;"><input type="submit" name="submit" value="Sign In" class="btn btn-primary"></div>
            </form>
            <hr>
        </div>
    </div>

</body>

</html>