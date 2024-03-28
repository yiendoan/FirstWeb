<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "Doanminhyen";
$dbName = "first_web";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn){
    die("Something went wrong");
}

?>