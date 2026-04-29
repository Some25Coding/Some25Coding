<?php
require('connection.php');
$select = "select * from employee";
$result = mysqli_query($conn, $select);
?>
<html>
<head>
<title>read data</title>
</head>
<body>
<br>
<a href="add.html">add new employee</a><br><br>
<table border="2">
<tr bgcolor="grey"><td> ID : </td><td> Name : </td><td> Position : </td><td> Salary : </td><td>update</td></tr>
<?php
while($r = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$r['E_ID']."</td>";
    echo "<td>".$r['E_Name']."</td>";
    echo "<td>".$r['E_Position']."</td>";
    echo "<td>".$r['E_Salary']."</td>";
    echo "<td><a href=\"update.php?id=".$r['E_ID']."\">edit</a> | 
    <a href=\"delete.php?id=".$r['E_ID']."\" onclick=\"return confirm(' sure to delete?')\">delete</a></td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
