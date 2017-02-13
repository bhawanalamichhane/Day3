<?php
 
 //Declare class
class Car {

  //properties	
  public $comp;
  public $color = 'red';
  public $hasSunRoof = true;
  public $price = "I'm class property as a price!";

  //methods to set and get value
  public function setProperty($newval)
  {
      $this->price = $newval;
  }

  public function getProperty()
  {
      return $this->price ."<br/>";
  }

  public function hello()
  {
	  return "Beeep I am a <i>" .$this->comp.
		  "</i>, and I am <i>" .$this->color;
  }
}


//create an instance 
$bmw = new Car();
$mercedes = new Car();

//Get the values 
echo $bmw->color;
echo "<br>";
echo $mercedes->color;
echo "<br>";

//Set the values
$bmw->color = 'blue';
$bmw->comp = 'BMW';

//Get the values again 
echo $bmw->color; //blue
echo "<br />";
echo $bmw->comp; //BMW
echo "<br />";

//use the method to get values
echo $bmw->getProperty();
echo $mercedes->getProperty();

//Set new values for boh objects 
$bmw->setProperty("Price of BMW is 1 million");
$mercedes->setProperty("Price of mercedes is 2 million");

//output both objects price value 
echo $bmw->getProperty();
echo $mercedes->getProperty();

//call the hello method for bmw 
echo $bmw->hello();
?>
