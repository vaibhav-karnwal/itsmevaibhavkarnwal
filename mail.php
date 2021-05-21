<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject="Mail From website";
    $mailFrom=$_POST['email'];
    $message=$_POST['message'];
    
    
    $mailTo="vaibhavkarnwal2812@gmail.com";
    $headers="From:".$mailFrom;
    $txt="You have receivedan email from".$name".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers)
        //redirect
    header("Location:thankyou.html");
}
?>
