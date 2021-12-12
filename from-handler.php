<!-- Change the info to match your cleints credentials and what you want to receive via email -->

<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@northstarsatellites.com';

$email_subject = "New Inquiry from Website";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'Enter your email here';

$headers = "From: $email_from \r\n";

$headers .= "reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_from,$headers);

header("Location: contact.html")
?>