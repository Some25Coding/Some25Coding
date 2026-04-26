<?php
require('connection.php');
if(isset($_POST['update'])){
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$re=mysqli_query($conn,"update stud set id='$id',name='$name',age='$age' where id=$id");
include('read.php');
die();}
?>

<?php
require('connection.php');
$id=$_GET['id'];
$r=mysqli_query($conn,"select * from stud where id=$id");
while($rr=mysqli_fetch_array($r)){
$id=$rr['id'];
$name=$rr['name'];
$age=$rr['age'];}
?>

<html>
<head>
<title>update</title>
</head>
<body>
<a href="add.html">add new form</a><br>
<form name="form1" method="POST" action="update.php">
<table>
<tr><td>id</td><td><input type="text" name="id" value="<?php echo $id; ?>"></td></tr>
<tr><td>name</td><td><input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
<tr><td>age</td><td><input type="text" name="age" value="<?php echo $age; ?>"></td></tr>
<tr><td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>> </td>
<td><input type="submit" name="update" value="update"></td></tr>
</table>
</form>
</body>
</html>