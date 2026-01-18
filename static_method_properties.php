<?php
class MyClass{
    public static $prop1 = "static property";
    public static function method1(){
        echo "static method";
    }
}

// WE DON'T NEED TO CREATE INSTANCE
echo MyClass::$prop1;
echo "<br>";
echo MyClass::method1();