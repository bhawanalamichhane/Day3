<?php
	require 'header.php';
	require 'file1.php';
	$x=2;
	$y=3;

	function display()
	{
		global $x, $y;
	    echo " <p style='text-align:center; font-size:20px;'>The two numbers are $x , $y </p>" ;
	}
	function sum($num1 = 10, $num2 = 20)
	{
	    
		$sum = $num1 + $num2;
		echo "<p style='text-align:center; font-size:20px;'>The sum of two numbers is $sum </p>";
		
	}

	function passByValue($num) {
            $num += 5;
         }
         
    function passByReference(&$num) {
            $num += 6;
         }
         
         $orignum = 10;
         passByValue( $orignum );
         
         echo "<p style='text-align:center; font-size:20px;'>Original Value is $orignum  </p>";
         
         passByReference( $orignum );
         echo " <p style='text-align:center; font-size:20px;'>Original Value is $orignum </p>";
	 display();
	 sum();
	 sum(40,50);

	 //create cookies
	 $cookie_name = 'example';
     $cookie_value = 'example1';
     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

     //this cookie will be deleted
     setcookie("age", "36", time()+3600, "/", "",  0); // 86400 = 1 day


     	//retrieving cookies value 
     if( isset($_COOKIE["age"]))
            echo "Welcome your age is" . $_COOKIE["age"] ." <br>";
         
         else
            echo "Sorry...  Cookie is  Deleted" . "</p>";


     	//retrieving cookie value
     if(!isset($_COOKIE[$cookie_name])) {
      print 'Cookie with name "' . $cookie_name . '" does not exist...';
      } 
      else {
        print 'Cookie with name "' . $cookie_name . '" value is: ' . $_COOKIE[$cookie_name];
       }
            //deleting cookies
           setcookie( "age", "", time()- 60, "/","", 0);



?>