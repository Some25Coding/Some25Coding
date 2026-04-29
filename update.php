<?php
require('connection.php');

// Handle the update submission first
if(isset($_POST['update'])){
    $new_id = $_POST['E_ID'];
    $old_id = $_POST['old_id']; // Targets the old record for updating
    $name = $_POST['E_Name'];
    $position = $_POST['E_Position'];
    $salary = $_POST['E_Salary'];
    
    $re = mysqli_query($conn, "update employee set E_ID='$new_id', E_Name='$name', E_Position='$position', E_Salary='$salary' where E_ID='$old_id'");
    include('read.php');
    die();
}

// Fetch the existing record
$id = $_GET['id'];
$r = mysqli_query($conn, "select * from employee where E_ID='$id'");
while($rr = mysqli_fetch_array($r)){
    $e_id = $rr['E_ID'];
    $e_name = $rr['E_Name'];
    $e_position = $rr['E_Position'];
    $e_salary = $rr['E_Salary'];
}
?>

<html>
<head>
<title>update employee</title>
</head>
<body>
<br>
<a href="add.html">add new employee</a><br><br>
<form name="form1" method="POST" action="update.php">
<table>
<tr><td>ID</td><td><input type="text" name="E_ID" value="<?php echo $e_id; ?>"></td></tr>
<tr><td>Name</td><td><input type="text" name="E_Name" value="<?php echo $e_name; ?>"></td></tr>
<tr><td>Position</td><td><input type="text" name="E_Position" value="<?php echo $e_position; ?>"></td></tr>
<tr><td>Salary</td><td><input type="text" name="E_Salary" value="<?php echo $e_salary; ?>"></td></tr>
<tr>
    <td><input type="hidden" name="old_id" value="<?php echo $_GET['id']; ?>"></td>
    <td><input type="submit" name="update" value="update"></td>
</tr>
</table>
</form>
</body>
</html>
