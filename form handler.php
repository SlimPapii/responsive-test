<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@abiodunolonade';   // this is your domain name{anything@domainname}
$email_subject = 'Anyname you want(So i choose NEW ENTRY)';
$email_body = "User Name: $name.\n",
                "User Email: $visitor_email.\n",
                 "Subject: $subject.\n",
                 "User Message: $message.\n";

$to = 'emmanuel_olonade@yahoo.com'      // personal email here

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>