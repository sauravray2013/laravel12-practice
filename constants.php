<?php
// class Myclass{
//     const PI = 3.14;
//     const APP_VERSION = "1.0.0";

//     public function getAppVersion(){
//         echo "App Version is: ".self::APP_VERSION;
//     }
// }

// $obj1 = new Myclass();
// // $obj1->getAppVersion(); // accessing when defined inside class
// echo $obj2 = Myclass::APP_VERSION; // accessing from outside class

// trying via inheritance

class Animal{
 const TYPE = "mammal";
}

class Dog extends Animal{
    public function getType(){
        return Self::TYPE;
    }
}
$dog1 = new Dog();
echo $dog1->getType();