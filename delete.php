<?php
require('connection.php');
$id=$_GET['id'];
$r=mysqli_query($conn,"delete from stud where id=$id");
include('read.php');
?>