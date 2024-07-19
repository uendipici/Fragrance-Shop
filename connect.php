<?php
 

$hostName = "localhost"; // Host name 
$dbUser = "root";     // MySQL username
$dbPassword = "";         // MySQL password
$dbName = "luxury_db";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// Check connection
if (!$conn) {
    die("Something went worng;");
}

?>
