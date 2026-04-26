<?php
require('connection.php');
//echo "<br>";
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
if(empty($id)||empty($name)||empty($age)){
echo "<font color='red'>id,name or age is empty";
include("add.html");
die();}
$insert="insert into stud (id,name,age) values('$id','$name','$age')";
$result=mysqli_query($conn,$insert);
echo "<font color='green'>data added successfully";
echo "<br>";
include('read.php');
}
?>

