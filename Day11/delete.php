
<!DOCTYPE html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysqli_query($conn,"delete from users where id='$id'");
if($query1)
{
header('location:list.php');
}
}
?>
</body>
</html>
