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
      echo "Found a .com and reg = ". $retval[0][0];
   }
   else
   {
      echo "Could not found a .com";
   }
	
?>
