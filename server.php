<?php
include('database.php');
header('Content-Type:application/json');
echo json_encode($database);

// databaseRequest($database);
//
// function databaseRequest($database){
//     if (empty($_GET['author'])) {
//         header('Content-Type:application/json');
//         echo json_encode($database);
//
//     } else{
//         $database2 = [];
//         foreach ($database as $key) {
//             if (in_array($_GET['author'], $key)) {
//                 array_push($database2);
//                 header('Content-Type:application/json');
//                 echo json_encode($database2);
//             }
//         }
//     }
// }



 ?>
