

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Required and Required once</title>
</head>
<body>
	
	<?php
                echo $_GET['id'];
                echo $_GET['name'];
		require 'header.php';
		echo "<p style ='text-align:center;font-size:30px;' >Content of a file is included in other file </p>";
	        echo "<p style= 'text-align:center; color:red;font-size:30px;'> If file not found it generates error and stop the script</p> ";
		 //file is included and continues even if file not found 
		include 'footer.php';
		
                
		
	 ?>
	
</body>
</html>
