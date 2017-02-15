<?php

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'comp123';
  $db_name = 'tests';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
      
  if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
  }
         
  echo 'Connected successfully';
  mysqli_close($conn);

?>  
