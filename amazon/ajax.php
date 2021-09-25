<?php
include "db-connection.php";
// $lastid = $_GET['lastId'];
// var_dump($lastid);
// exit();

$result = mysqli_query($conn, "select products.pid,products.name,products.image,products.date,user.fname,user.lname from products left join user on products.userid=user.userid");
// $row = mysqli_fetch_array($result);

// var_dump($lastid);
// exit();

while ($row = mysqli_fetch_array($result)) {
    echo '
        <div class="card col-md-3 ">
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


// var_dump($row);
// exit();

// $arr = ["pid" => "$row[0]", "name" => "$row[1]", "image" => "$row[2]", "date" => "$row[3]", "fname" => "$row[4]", "lname" => "$row[5]"];

// var_dump($arr);
// exit();

// echo json_encode($arr);

?>
