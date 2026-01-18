<?php

// there are two ways here, way 1 and way 2, one is commented out currently

// way 1

// class Test{
//    public $num1;
//    public $num2;

//    public function valueCalculate(){
//       echo "The sum is ". $this->num1 + $this->num2;
//    }
// }

// $test1 = new Test();
// $test1->num1 = 10;
// $test1->num2 = 19;
// $test1->valueCalculate();

// way 2

class Test{

   public function valueCalculate($num1, $num2){
      echo "The sum is ". $num1 + $num2;
   }
}

$test1 = new Test();
$test1->valueCalculate(11,14);
