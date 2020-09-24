<?php
include 'database.php';
$db = $database;

if (!empty($_GET['author'])) {
    $db2 = [];
    $searchAuthor = $_GET['author'];
    foreach ($database as $cd) {
        if ($searchAuthor == $cd['author']) {
            $db2[] = $cd;
            }
        }
  $db = $db2;
        }

        header('Content-Type:application/json');
        echo json_encode($db);

?>
