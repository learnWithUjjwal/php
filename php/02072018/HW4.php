<!-- // write  a math class with the following method:
// sum, subtract, multiply, divide, cube, square. -->

<?php
class Mths{
    public $n1;
    public $n2;
    public function __construct($n1, $n2){
        $this->n1 = $n1;
        $this->n2 = $n2;

    }
    public function sum(){
        return $this->n1 + $this->n2;
    }

    public function subtract(){
        return $this->n1 - $this->n2;
    }

    
    public function multiply(){
        return $this->n1 * $this->n2;
    }

    public function divide(){
        if($this->n2 !== 0){
            return $this->n1 / $this->n2;
        }
        else{
            echo "Division by Zero is not possible";
        }
    }

    
    public function cube($num){
        return $num * $num * $num;
    }

    public function sqr($num){
        return $num * $num;
    }
}

$c1 = new Mths(1,3);
echo $c1->sum()."<br>";
echo $c1->cube(3);
