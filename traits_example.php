<?php
trait Logger{
    public function log($message){
        echo "[LOG] ".$message."\n";
    }
}

class Product{
    use Logger;
    // use Logger1, Logger2 // when multiple
    public function create(){
        echo $this->log("product created");
    }
}

class Order{
    use Logger;
    // use Logger1, Logger2 // when multiple
    public function place(){
        echo $this->log("order placed");
    }
}

$p = new Product();
$p->create();
echo "<br>";
$o = new Order();
$o->place();