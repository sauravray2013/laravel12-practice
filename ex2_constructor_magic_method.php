<?php
// constructor methods do not need to be called, they get called automatically, when we create objects from a class the constructor methods automatically gets called or used, and detructor is when we destroy

class Person {
    public $age;
    public $name;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function personDetails(){
        return "Name: ".$this->name.", Age: ".$this->age;
    }
}

$person1 = new Person("john", 35);
echo $person1->personDetails();
