<?php
//get data from form  
$name = 'name';
$email= 'email';
$message= 'message';
$to = "vaibhavkarnwal2812@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = 'From: <anmolkarnwal2812@gmail.com>' . "\r\n" .
"Cc : vaibhavkarnwal2812@gmail.com" . "\r\n";
if($email!=NULL){
    mail($to ,$subject ,$txt ,$headers);
}
//redirect
if(mail($to ,$subject ,$txt ,$headers)){
    echo "Mail Sent";   
}else{
    echo "Mail Failed";
?>
