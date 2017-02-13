<?php 
class Person {
    public $firstName;
    public $lastName;
 }
     
$person1 = new Person();
$person1->firstName="First Name";
$person1->lastName="Last Name";
         
$person2 = $person1;
$person2->firstName="Surprise";
	     
var_dump($person1);
var_dump($person2);

$person3 = clone $person1;
$person3->firstName = "Surprise again";
var_dump($person1);
var_dump($person3);

?>
