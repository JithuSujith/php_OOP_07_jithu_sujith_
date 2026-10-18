<?php
trait Calculator{
    public function sum($a, $b) {
  return $a + $b;
}

public function sub($a, $b) {
  return $a - $b;
}

public function mul($a, $b) {
  return $a * $b;
}

public function div($a, $b) {
  return $a / $b;
}

public function sqr($a){
  return sqrt($a);
}
}

class Rectangle{
    use Calculator;
    public $height;
    public $base;
    

    public function __construct($a,$b){
       $this->height=$a;
       $this->base=$b;
    }

    public function area(){
      echo "The area of the rectangle is:".$this->mul($this->height,  $this->base)."\n";
    }

    public function perimeter(){
       echo "The parameter of the rectangle is:".$this->sum($this->mul(2,$this->base ), $this->mul($this->height, 2))."\n";
    }

    public function diagonal(){
       echo "The diagonal of the rectangle is:".$this->sqr($this->sum($this->mul($this->height,$this->height),$this->mul($this->base,$this->base)))."\n";
    } 
}

$result= new Rectangle(5,5);
$result->area();
$result->perimeter();
$result->diagonal();






?>