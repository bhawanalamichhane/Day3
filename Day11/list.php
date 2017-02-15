
<!DOCTYPE html>
<body>
<?php
include('config.php');
$query1=mysqli_query($conn,"select id, name, pass, email, reg_date from users");
echo "<table><tr><td>Name</td><td>Password</td><td>Email</td><td></td><td></td>";
while($query2=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
echo "<tr><td>".$query2['name']."</td>";
echo "<td>".$query2['pass']."</td>";
echo "<td>".$query2['email']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>x</a></td><tr>";
}
?>
</ol>
</table>
</body>
</html>
