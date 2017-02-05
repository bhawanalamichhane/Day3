<?php
   session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
   echo "<p> $msg</p>"
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Required and Required once</title>
</head>
<body>
	
	<?php
		require_once 'header.php';
		echo "<p style ='text-align:center;font-size:30px;' >Content of a file is included in other file </p>";
	        echo "<p style= 'text-align:center; color:red;font-size:30px;'> If file not found it generates error and stop the script</p> ";
		echo "<p style= 'text-align:center;'>This was practiced in day ".$_SESSION["day"]." as ". $_SESSION["task"]."";
		 //file is included
		require 'file1.php';
		
                
		
	 ?>
	
</body>
</html>