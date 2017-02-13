<?php 
class Point{
    private $x;
    private $y;
    public function __construct($x,$y){
        $this->x = $x;
	$this->y = $y;
    }
	   
    public function setX($x){
        $this->x = $x;
    }
    public function getX(){
        return $this->x;
    }
	   
    public function setY($y){
        $this->y = $y;
    }
    public function getY(){
        return $this->y;
    }
}

$p1 = new Point(10,20);
$p2 = new Point(10,20);
if ($p1== $p2){
 echo "equal";
}
else {
  echo "No equal";
}



?>
