<!DOCTYPE html>
<body>
<?php
include('config.php');
?>
<?php
if(isset($_POST['submit']))
{
echo "<br/>";
echo "hbujhj";
echo $_POST['name'].'<br>';
$name=mysqli_real_escape_string($conn,$_POST['name']);
echo $name;
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
/*
$sql="INSERT INTO users (name, pass, email)
VALUES ('$name', '$pass', '$email')";

if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($con));
}
else{
	echo "inserted";
}


*/

$conn1=mysqli_query($conn,"insert into users (name, pass, email) values('$name','$pass','$email')");
echo "insert into `users` values('$name','$pass','$email')";
if($conn1)
{
header("location:list.php");
}
}
mysqli_close($conn);
?>


<fieldset style="width:300px;">
<form method="post" action="">
Name: <input type="text" name="name"><br>
Password: <input type="password" name="pass"><br>
E-mail: <input type="text" name="email"><br>
<br>
<input type="submit" name="submit">
</form>
</fieldset>
</body>
</html>
