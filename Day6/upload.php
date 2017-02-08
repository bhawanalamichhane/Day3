<?php
   if(isset($_FILES['myimage'])){
      $errors= array();
      $file_name = $_FILES['myimage']['name'];
      $file_size =$_FILES['myimage']['size'];
      $file_tmp =$_FILES['myimage']['tmp_name'];
      $file_type=$_FILES['myimage']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['myimage']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         if(move_uploaded_file($file_tmp,"/home/eb386/html/Day6/uploads/".$file_name)){
		echo "MOve uploaded success";}
	else {
		echo "move not succedded";
}
}
   }
?> <html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="myimage" />
         <input type="submit"/>
      </form>
      
   </body>
</html>
