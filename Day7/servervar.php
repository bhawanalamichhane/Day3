<!DOCTYPE html>
<html>
<body>

<?php
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br /><br / >";

//variables scope
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo" $y <br >";


//static variables
function myTest1() {
    static $x = 0;
    echo $x;
    echo "<br>";
        $x++;
}

myTest1();
myTest1();
myTest1();


//assigning by reference
$myVar = "Hi there";
$anotherVar =& $myVar;
$anotherVar = "See you later";
echo $myVar;// Displays "Hi there"
echo "<br>";
echo $anotherVar; // Displays "See you later"
echo "<br><br>";

//passing reference to a function 
function goodbye(&$greeting ) {
       	$greeting = "See you later";
}
 
$myVar = "Hi there";
goodbye( $myVar );
echo $myVar; // Displays "See you later"
echo "<br>";


//returning references from functions
$num = 10;
 
function &getNumWidgets() {
  global $num;
  return $num;
}
 
$num1 =& getNumWidgets();
$num1--;
echo "\$num = $num<br>";  // Displays "9"
echo "\$num1 = $num1<br>";  // Displays "9"

?>

</body>
</html>

