<?php
$name = $-POST['name'];
$visitor_email = $POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from = '';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Number: $number.\n".
                "User Message: $message .\n";
    
 $to = '';
 
 $headers = "From: $email_from \r\n";

 $headers .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: contact.html");

?>