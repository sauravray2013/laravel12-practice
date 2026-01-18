<?php
// below is the example
// class Test{
//     public $var1;
//     public function learn(){
//         echo "$this->var1 is learning \n";
//     }
// }
// class NewTest extends Test{
//     public function practice(){
//         echo "$this->var1 is practising";
//     }
// }

// $newtest = new NewTest();
// $newtest->var1 = "Saurav";
// $newtest->learn();
// $newtest->practice();

// below is the example of method overriding and 
// scope resolution
class Test{
    public $var1;
    public function f1(){
        return $this->var1." is old";
    }
}
class newTest extends Test{
    public function f1(){
       // return $this->var1." is new"; // method overriding
        return Parent::f1(); // if parent class is accessed
    }
}
$t1 = new newTest();
$t1->var1 = "testing";
echo $t1->f1();