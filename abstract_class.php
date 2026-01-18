<?php
abstract class paymentGateway{
    abstract public function pay($amt);
}

class Bkash extends paymentGateway{
    public function pay($amt){
        echo "pay now: {$amt} using Bkash";
    }
}

class Rocket extends paymentGateway{
    public function pay($amt){
        echo "pay now: {$amt} using Rocket";
    }
}
$p1 = new Bkash();
$p1->pay(110);
echo '<br>';
$p2 = new Rocket();
$p1->pay(190);