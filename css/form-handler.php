<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@easytutorialspro.com';

$email_subject = 'New form submission';
$email_body = "User name: $name.\n".
               "User Email: $visitor_email.\n".
               "User Subject: $subject.\n".
               "User Message: $Message.\n";

$to ='gatul7625@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");




?>