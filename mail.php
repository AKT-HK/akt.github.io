<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $POST['dropdown'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "AKTnowHK@gmail.com";
/*$recipient = "210591@hkis.edu.hk";*/
$subject = "Contact Us";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>