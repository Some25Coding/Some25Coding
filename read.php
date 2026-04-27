<?php
require('connection.php');
$select = "select * from Student";
$result = mysqli_query($conn, $select);
?>
<html>
<head>
<title>read data</title>
</head>
<body>
<br>
<a href="add.html">add new form1</a><br><br>
<table border="2">
<tr bgcolor="grey"><td> id : </td><td> name : </td><td> age : </td><td>update</td></tr>
<?php
while($r = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$r['id']."</td>";
    echo "<td>".$r['name']."</td>";
    echo "<td>".$r['age']."</td>";
    echo "<td><a href=\"update.php?id=".$r['id']."\">edit</a> | 
    <a href=\"delete.php?id=".$r['id']."\" onclick=\"return confirm(' sure to delete?')\">delete</a></td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
