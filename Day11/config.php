<?php
 $dbhost ='localhost';
 $dbuser = 'root';
 $dbpass = 'comp123';
 $db_name = 'tests';
 $conn = mysqli_connect($dbhost, $dbuser ,$dbpass, $db_name);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo $conn;
}
else {
 echo "connected successfully";
}

?>
