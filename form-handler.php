<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'https://sidvp.github.io/Institute-Website-using-HTML-CSS-JS/';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $visitor_email.\n".
              "User's Message: $message.\n";

$to = 'abc-cares-admin@goa.gov.in';

$headers = "From: $email_from \r \n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>
