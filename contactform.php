<?php
if (isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
}

    $content="From: $name \n Email: $email \n Message: $message";
    $recipient = "bmtcontact7@gmail.com";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $content, $mailheader) or die("Error!");
    
    echo "Email sent!";


?>