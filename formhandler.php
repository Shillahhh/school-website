<?php
// Stores the name that we will have at our contact form
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']


<!-- email of your website -->
<!-- Your domain name -->
$email_from = 'shila@gmail.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n" .  
              "User Subject: $subject.\n". 
              "User Message: $message.\n";    
              
// To this is where you want to receive the enquiries

$to = 'shillahnyanjui@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

// It will send all this information to the email ID

mail($to, $email_subject,$email_body,$headers);
// File name where you want to detect the usser after submitting the form.

header("Location: contact.html");
?>

