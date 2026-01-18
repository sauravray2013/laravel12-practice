<?php
interface Notifiable{
      public function send($message);
}

class EmailNotification implements Notifiable{
    public function send($message){
        echo "Sending email notification: $message\n";
    }
}

class SMSNotification implements Notifiable{
    public function send($message){
        echo "Sending SMS notification: $message\n";
    }
}

class PushNotification implements Notifiable{
    public function send($message){
        echo "Sending push notification: $message\n";
    }
}

function notify(Notifiable $notifiable, $m1){
    $notifiable->send($m1);
}

$email = new EmailNotification();
$sms = new SMSNotification();
$push = new PushNotification();

notify($email, "Email notification content");
echo "<br>";
notify($sms, "SMS notification content");
echo "<br>";
notify($push, "Push notification content");