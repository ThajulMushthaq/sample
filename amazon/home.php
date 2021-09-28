<?php
include "db-connection.php";
session_start();

$sql = mysqli_query($conn, "select products.pid,products.name,products.image,products.date,user.fname,user.lname from products left join user on products.userid=user.userid order by pid desc limit 12");
// $data=mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Font awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div class="topnav">
        <?php
        if (isset($_SESSION['login'])) {
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Login</a>';
        }
        ?>
        <a href="user-profile.php">Profile</a>
        <a href="products.php">Add new Products</a>
        <a class="active" href="home.php">Home</a>
    </div>
    <?php
    while ($row = mysqli_fetch_array($sql)) {
        echo '
        <div class="card col-md-3" id="alldata">
            <div class="card-header">
                <label class="card-title">' . $row["fname"] . ' ' . $row["lname"] . '</label>
            </div>
            <div class="card-body">
                <img src="' . $row["image"] . '" class="card-img-top product-img">
                <label>' . $row["name"] . '</label><br>
                <label>' . $row["date"] . '</label>
                <a href="product-details.php?pid=' . $row["pid"] . '" class="stretched-link"></a>
            </div>
        </div>
        ';
    }
    ?>

    <!-- <script type="text/javascript" src="jquery.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {

                //check if the users are at bottom of the window
                //scroll to returns 0

                if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                    getmoredata();
                }
            });

            function getmoredata() {
                // var ids = $('.vikash:last').attr("id");

                $.ajax({
                    type: 'post',
                    asynch: false,
                    url: 'ajax.php',
                    cache: false,
                    // data: {
                    //     getdata: ids
                    // },
                    success: function(response) {
                        var data = JSON.parse(response);
                        console.log(data);
                        //appending the result get_moredata page result with div id alldata
                        $('#alldata').append('<P></p>');
                    }
                });
            }
        });
    </script>

    <!-- <script>
        $(document).ready(function() {
            $("#display").click(function() {
                $.ajax({
                    type: "GET",
                    url: "ajax.php",
                    // dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        var arr = JSON.parse(response);
                        // $.each(arr, function(index, value) {
                        //     console.log('The value at arr[' + index + '] is: ' + value);
                        // });
                        // $("li").each(function(index) {
                        //     console.log(index + ": " + $(this).text());
                        // });

                        $('#pid').html(arr.pid);
                        $('#pname').html(arr.name);
                        $('#image').html(arr.image);
                        $('#date').html(arr.date);
                        $('#fname').html(arr.fname);
                        $('#lname').html(arr.lname);
                    }
                });
            });
        });
    </script> -->


</body>

</html>