<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
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

    
</head>
<body>
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a class="active" href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a href="home.php">Home</a>
    </div>
    <hr>
    <div>
    <form role="form" method="post">
        <div class="box box-primary">
            <div class="box-header">
                <h2 class="page-header"><i class="fa fa-lock"></i> Change Password</h2>
                <div class="pull-right">
                    <button type="button" name="Submit" value="Save" class="btn btn-danger"><i class="livicon" data-n="pen" data-s="16" data-c="#fff" data-hc="0" ></i> Save</button>
                    <button type="reset" name="Reset" value="Clear" class="btn btn-primary"><i class="livicon" data-n="trash" data-s="16" data-c="#fff" data-hc="0"></i> Clear</button>
                </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <label>Old Password</label>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input class="form-control" id="oldPassword" name="oldPassword" value="" placeholder="Enter the Old Password" type="password">
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <br/>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <label>New Password</label>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input class="form-control" id="newPassword" name="newPassword" value="" placeholder="Enter the New Password" type="password">
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <br/>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <label>Confirm Password</label>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input class="form-control" id="confirmPassword" name="confirmPassword" value="" placeholder="Re-enter the New Password" type="password">
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>

    </form>
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
      </div>
    </div>
</body>
</html>