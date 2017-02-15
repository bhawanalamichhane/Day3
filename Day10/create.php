<?php

$conn = new mysqli('localhost','root','comp123');

if(mysqli_connect_errno()) {
  exit('connect failed:'. mysqli_connect_error());
}

$sql = "CREATE DATABASE `tests` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";

if ($conn->query($sql)===TRUE) {
  echo "successfull";
}
else {
  echo 'Error:' .$conn->error;
}

$conn->close();
?>
