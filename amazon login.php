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
        .divmain{
            border-radius: 10px;
            display: flex;
            justify-content: center;
            padding: 50px;
        }

    </style>

</head>
<body>
<div class="divmain">
    <div>
        <img src="amazon-logo.png" width="250" height="70"><br>
    </div><br>
    <div>
        <form>
            <div>
                E-mail :<input type="text",name="mail"><br><br>
                Password :<input type="password",name="pswrd"><br><br>
            </div>
            <div>
                <button type="submit" name="login" value="Login">Login</button>
                <button type="submit" name="signup" value="Signup">Signup</button>
            </div>
        </form>
    </div>
</div>


</body>
</html>