<?php

include "../db/db.php";

header("Content-Type: application/json");

$genreValue = '';
$genreFilter = [];

if (key_exists("genre", $_GET)) {
    $genreValue = $_GET['genre'];

    foreach ($db as $disc) {
        if ($disc['genre'] === $genreValue) {
            $genreFilter[] = $disc;
        }
    }
} else {
    $genreFilter = $db;
}


echo json_encode($genreFilter);
