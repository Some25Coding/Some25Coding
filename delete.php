<?php
require('connection.php');
$id = $_GET['id'];
$r = mysqli_query($conn, "delete from employee where E_ID='$id'");
include('read.php');
?>
