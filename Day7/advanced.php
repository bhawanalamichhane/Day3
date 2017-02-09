<?php
 $a = 'hello';
 $$a = 'world';
 echo "$a $hello <br>";

 $ktm = 360000;
 $pkr = 138000;
 $cityname = "ktm";
 echo "The size of $cityname is ${$cityname}<br>";
 $cityname = "pkr";
 echo "The size of $cityname is ${$cityname}<br>";
 
 $abc = array('a', 'ktm', 'pkr');
 foreach($abc as $ab){
 echo $$ab . "<br />";
 }
 //array functions
 $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
 $result=array_flip($a1);
 print_r($result);
 echo '<br />';
 $mobile_os = array("Mac", "android", "java", "Linux");
    
    if (in_array("java", $mobile_os)) {
	          echo "Got java <br>";
		     }
    
    if (in_array("mac", $mobile_os)) {
	          echo "Got mac";
		     }
 
 

 $str = "Hello world. It's a beautiful day.<br>";
 print_r (explode(" ",$str));
 echo '<br />';

 $str = 'one,two,three,four';

 // zero limit
 print_r(explode(',',$str,0));
 echo '<br />';
 
  // positive limit
  print_r(explode(',',$str,2));
  echo '<br />';
  // negative limit
  print_r(explode(',',$str,-1));
  echo '<br />';
  

  //creating date and date format
  $date=date_create("2013-03-15");
  echo date_format($date,"Y/m/d");
  echo "The time is " . date("h:i:sa")."<br>";
  echo "Today is " . date("Y/m/d") . "<br>";
  echo "Today is " . date("Y.m.d") . "<br>";
  echo "Today is " . date("Y-m-d") . "<br>";
  echo "Today is " . date("l"). "<br>";
   // creating date
  $d=mktime(11, 14, 54, 8, 12, 2014);
  echo "Created date is " . date("Y-m-d h:i:sa", $d);
  echo '<br>';

  //creaing date 
  $d=strtotime("next Saturday");
  echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

