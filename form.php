<?php
$name = $POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$smessage = $_POST['message'];

$email_from ='info@bestuniversity.com'

$email_subject = 'new form submission';

$email_body ="User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n".

$to = 'talktojmcvibes@gmail.com';

$headers ="from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>