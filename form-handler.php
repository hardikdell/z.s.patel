<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'principal@zspatelcollege.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n"
              "Subject: $subject.\n"
              "User Message: $message.\n";

$to = 'hardikkamaliya0000@gmail.com'

$headers = "From: $email_form \r\n";

$headers = "Ready-To: $visitor_email \r\n";

mail($to,$email_subject_body,$headers)

header("Location: contact.html")
?>