<?php
require 'class.phpmailer.php';

$mail = new PHPMailer;
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$mail->isSMTP();
$mail->Host = "smtp.live.com";
$mail->Port = 25; // or 587
// Set mailer to use SMTP
//$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'imarunsinghal@live.com';                            // SMTP username
$mail->Password = 'ugas254728';                           // SMTP password
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = $email;
$mail->FromName = $name;
$mail->addAddress('hellocuriousbrain@gmail.com', 'Curious Brain');  // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('imarunsinghal@yahoo.co.in');
$mail->addBCC('imarunsinghal@gmail.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Feedback From ' . $name ;
$mail->Body    = '<b> We got Feedback from Email : ' . $email . ' </b>  <p> ' .  $message . '</p>';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
};
header('Location: thank_you.php');
