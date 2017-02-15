<!DOCTYPE html>
<a href="insert.php">Back</a>
<?php
$conn = new mysqli('localhost', 'root', 'comp123', 'tests');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// UPDATE sql query
$sql = "UPDATE `users` SET `name`='unknown' WHERE `email`='manita@gmail.com' AND `id`=2";

// perform the query and check for errors
if (!$conn->query($sql)) {
  echo 'Error: '. $conn->error;
}

$conn->close();
?>
</html>
