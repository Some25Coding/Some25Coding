<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = '';
$dbname = "Practice";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("connection error: " . mysqli_connect_error());
}

echo "connection successful";
?>
