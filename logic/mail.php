<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$formcontent="From: $name \n Message: $service";
$recipient = "mail.kaseyc@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>