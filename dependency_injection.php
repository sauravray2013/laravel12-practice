<?php
// the below example is called tight coupling and this is not recommended as each
// one is dependent upon other
// we will do the same like above with dependedncy injection
// class MailService{
//     public function sendMail($message){
//         echo "Email sent with message: $message";
//     }
// }

// class UserController{
//     protected $mail;

//     public function __construct(MailService $mail2){ 
//         $this->mail = $mail2; // dependency injection, i.e. injected externally
//     }

//     public function notifyUser(){
//         $this->mail->sendMail("Welcome to our service");
//     }
// }

// $m1 = new MailService();
// $u1 = new UserController($m1); // we're injecting dependency to the object
// $u1->notifyUser();  
// die();

// another example of tight coupling

class MailService2{
    public function sendEmail($to, $message){
        echo "Email sent to $to with message: $message";
    }
}

class UserController2{
    private $mailService;

    public function __construct(MailService2 $mail3){ 
        $this->mailService = $mail3; // dependency injection, i.e. injected externally
    }

    public function registerUser($email){
        echo "User registered with email: $email";

        // send welcome mail
        $this->mailService->sendEmail($email, "Welcome to our service!");
    }
}
// usage

$m2 = new MailService2();
$u2 = new UserController2($m2); // we're injecting dependency to the object
$u2->registerUser("4cI0o@example.com");
