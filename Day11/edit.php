<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$query3=mysqli_query($conn,"update users set name='$name',pass ='$pass',email='$email' where id='$id'");
if($query3)
{
header('location:list.php');
}
}
$query1=mysqli_query($conn,"select name, pass, email from users where id='$id'");
$query2=mysqli_fetch_array($query1,MYSQLI_ASSOC);
?>
<form method="post" action="">
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo $query2['name']; ?>" /></td><br />
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pass" value="<?php echo $query2['pass']; ?>" /></td><br /><br />
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email" value="<?php echo $query2['email']; ?>" /></td><br /><br />
</tr>
<br />
<tr>
<td></td>
<td><input type="submit" name="submit" value="update" /></td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
