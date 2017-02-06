<?php
   $email_id = "admin@tutorialspoint.com";
   preg_match("/(.)(com$)/", $email_id, $retval, PREG_OFFSET_CAPTURE);
   
   if( $retval == true )
   {
      echo "Found a .com<br>";
   }
   else
   {
      echo "Could not found a .com<br>";
   }
	
   preg_match(("/(.)(com$)/"), $email_id, $retval, PREG_OFFSET_CAPTURE);
   
   if( $retval == true )
   {
      echo "Found a .com and reg =" . $retval[0][0] . "<br /><br />" ;
   }
   else

   {
      echo "Could not found a .com";
   }


      // preg_match ( pattern, subject [, matches [, flags [, offset]]])
     //2 basic and 3 optional parameters
    //regular expression string, source string, an array variable which stores matches, flag argument, offset parameter
   if (preg_match("/ell/", "Hello World!", $matches)) {
        echo "Match was found <br />";
        echo " $matches[0]<br /><br />";
 }

  if (preg_match("/ll.*/", "The History of Hello  Halloween", $matches)) {
     echo "Match was found <br />";
     echo "$matches[0] <br /><br />";
}   


 //to check if the password is srong or not 
  $password = "Fyfjk34sdfjfsjq7";

  if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) {
    echo "Your passwords is strong.";
  }
 else {
    echo "Your password must contain at least 8 characters,1 Lower case,1 upper case and 1 digit.";
  }  
 

   //to check for valid email 
  $email= "abc@example.com";
  if (preg_match("/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/", $email)){
 	echo "Your email is valid <br />";
    } 
  else {
	echo "Your email is invalid<br /> ";
   }


  //to replace 
  //preg_replace( pattern, replacement, subject [, limit ])
  //3 basic parameter and 1 opional which specifies how mny strings wll be replaced
  //1st is regular expresson, 2nd replaces the matched expression, 3rd is sring to be  modified 
  $date = "Copyright 1999";
  $date = preg_replace("([0-9]+)", "2000", $date);
   
   echo $date;	
?>
