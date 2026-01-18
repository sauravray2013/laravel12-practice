<?php

class Demo1{
	public function func1($user,$userMessage){
		echo " Email has been sent to $user with $userMessage";
	}
}

class Demo2{
	public $demo1;
	
	public function __construct($demo1){
		$this->demo1 = $demo1;
	}
	
	public function func2($userMail){
		echo "user has been registered with $userMail";
		$this->demo1->func1($userMail,"Welcome to our service");
	}
}

$d2 = new Demo2(new Demo1);
$d2->func2("saurav@demo.in");