<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sender mail id';
$mail->Password = 'sender password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->From = 'sender mail id';
$mail->FromName = 'name of website';
$mail->addAddress('to', 'name');
 
$mail->addReplyTo('sender mail', 'name');
 
$mail->WordWrap = 50;
$mail->isHTML(true);
 
$mail->Subject = 'Approval';
$mail->Body    = '';
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
        echo "<script>alert('Mail sent Successfully!!'); window.location='pagelink';</script>";

?>