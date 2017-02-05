<!DOCTYPE html>
<html lang="en">
<head>
	<title>Required and Required once</title>
	<style>
	   #wrap {
		 
                 overflow:hidden;
                 position:relative; 
		 background:DarkCyan;
		
              }
            #nav {
		float:left;
		position:relative;
		left:50%;
   		height:50px;
		font-size:20px;
				
				
                }
	    #nav ul {
		float:left; 
		position:relative;
		left:-50%;
		list-style:none; 
				
				
		}
	    #nav li {
		float:left;
		display:inline-block;
		height:100px;
				
		}
	    #nav a {
		float:left;
		text-decoration:none; 
		padding:0px 30px;
		color:Black;
		font-weight: bold;
				
                }
	     a:hover {
                  background-color:Lavender;
	          height:100%;
                 }
                              
			      
	</style>
</head>
<body>
<h1 align="center">Welcome to Day3!</h1>
<div id="wrap">
<div id="nav">
<ul>
  <li><a href="require.php">SESSIONS</a></li>
  <li><a href="sum.php">VALUES</a></li>
  <li><a href="#">FORMS</a></li>
  <li><a href="#">ABOUT US</a></li>
  <li><a href="#">CONTACT US</a></li>
</ul>
</div>
</div>

</body>
</html>