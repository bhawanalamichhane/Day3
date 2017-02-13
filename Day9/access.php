<?php

class User{
    private $name;
    public $surname;
    public function SetNam($received){
        $this->name = $received;
    }

    public function DisplayName(){
	    echo $this->name;
	    echo "<br />";
    }
}

$userA = new User();
$userA->surname = "Lamichhane";
echo $userA->surname;
$userA->SetNam("Bhawana");
$userA->DisplayName();


class Car {
    
    //denies access from outside class scope	
    private $model;	
    
    //allows access even from out of the class scope
    public function setModel($model){
	    $allowedModels = array("Mercedes","BMw");
	    if(in_array($model,$allowedModels)){
	        $this->model = $model;
	    }
	    else {
	        $this->model = "not in our list";
	    }
    }  
    public function getModel(){
	    return "The car model is " .$this->model;
	    echo "<br />";
    }	    
}

$bmw = new Car();
$bmw->setModel("BMW");
echo $bmw->getModel();

?>
