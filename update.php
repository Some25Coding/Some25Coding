<?php
require('connection.php');

// Handle the update submission first
if(isset($_POST['update'])){
    $new_id = $_POST['id'];
    $old_id = $_POST['old_id']; // Correctly targets the old record
    $name = $_POST['name'];
    $age = $_POST['age'];
    
    $re = mysqli_query($conn, "update Student set id='$new_id', name='$name', age='$age' where id='$old_id'");
    include('read.php');
    die();
}

// Fetch the existing record
$id = $_GET['id'];
$r = mysqli_query($conn, "select * from Student where id='$id'");
while($rr = mysqli_fetch_array($r)){
    $id = $rr['id'];
    $name = $rr['name'];
    $age = $rr['age'];
}
?>

<html>
<head>
<title>update</title>
</head>
<body>
<br>
<a href="add.html">add new form</a><br><br>
<form name="form1" method="POST" action="update.php">
<table>
<tr><td>id</td><td><input type="text" name="id" value="<?php echo $id; ?>"></td></tr>
<tr><td>name</td><td><input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
<tr><td>age</td><td><input type="text" name="age" value="<?php echo $age; ?>"></td></tr>
<tr>
    <td><input type="hidden" name="old_id" value="<?php echo $_GET['id']; ?>"></td>
    <td><input type="submit" name="update" value="update"></td>
</tr>
</table>
</form>
</body>
</html>
