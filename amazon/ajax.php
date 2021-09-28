<?php
include "db-connection.php";
// $lastid = $_GET['lastId'];
// var_dump($lastid);
// exit();

$result = mysqli_query($conn, "select products.pid,products.name,products.image,products.date,user.fname,user.lname from products left join user on products.userid=user.userid order by pid desc");

$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

// var_dump($row);
// exit();

// while ($row = mysqli_fetch_array($result)) {
//     echo '
//         <div class="card col-md-3 ">
//             <div class="card-header">
//                 <label class="card-title">' . $row["fname"] . ' ' . $row["lname"] . '</label>
//             </div>
//             <div class="card-body">
//                 <img src="' . $row["image"] . '" class="card-img-top product-img">
//                 <label>' . $row["name"] . '</label><br>
//                 <label>' . $row["date"] . '</label>
//                 <a href="product-details.php?pid=' . $row["pid"] . '" class="stretched-link"></a>
//             </div>
//         </div>
//         ';
// }


echo json_encode($row);
?>
