<?php
// three types - public, private and protected

// below is the example of protected
// here methods and properties can be accessed in 
// sub-class or child class

// class Test{
//     protected $name = "John Doe";
//     protected function getName(){
//         return $this->name;
//     }
// }

// class newTest extends Test{
//     public function getNameData(){
//         return $this->getName();
//     }
// }
// $newtest1 = new newTest();
// echo $newtest1->getNameData();

// below is the example of private
//here only accessible within that class ONLY

class Demo{
    private $var1 = "Saurav";
    private function getVar1(){
        return $this->var1;
    }
    public function showVar1(){
        return $this->var1;
    }
}
$demo1 = new Demo();
echo $demo1->showVar1();