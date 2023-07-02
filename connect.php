<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "diary";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    # code...
    die("Yo mama gae my liege hehe/ went wrong");
}

?>