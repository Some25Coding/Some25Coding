<?php
require('connection.php');
echo "<br>";

if(isset($_POST['submit'])) {
    $e_id = $_POST['E_ID'];
    $e_name = $_POST['E_Name'];
    $e_position = $_POST['E_Position'];
    $e_salary = $_POST['E_Salary'];
    
    if(empty($e_id) || empty($e_name) || empty($e_position) || empty($e_salary)){
        echo "<font color='red'>ID, Name, Position, or Salary is empty</font><br>";
        include("add.html");
        die();
    }
    
    $insert = "insert into employee (E_ID, E_Name, E_Position, E_Salary) values('$e_id','$e_name','$e_position','$e_salary')";
    $result = mysqli_query($conn, $insert);
    
    echo "<font color='green'>data added successfully</font><br>";
    include('read.php');
}
?>
