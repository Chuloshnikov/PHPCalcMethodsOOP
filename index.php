<?php

//Simple calc on OOP methods

class Calc {

    private $a;
    private $b;
    
    public function mult($a, $b){
        $this->a = $a;
        $this->b = $b;
        return $a * $b;
    }

    public function div($a, $b){
        $this->a = $a;
        $this->b = $b;
        return $a / $b;
    }

    public function plus($a, $b){
        $this->a = $a;
        $this->b = $b;
        return $a + $b;
    }

    public function min($a, $b){
        $this->a = $a;
        $this->b = $b;
        return $a - $b;
    }

}

$calc1 = new Calc;

echo $calc1->plus(12, 4) . "<br>";
echo $calc1->min(15, 25) . "<br>";
echo $calc1->mult(7, 8) . "<br>";
echo $calc1->div(12, 3) . "<br>";

?>