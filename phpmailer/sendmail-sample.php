
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.devologix.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mandeep@devologix.com';                 // SMTP username
$mail->Password = '!TbRuPf2';                           // SMTP password

$mail->SMTPAutoTLS = false;
$mail->SMTPSecure = false;                              // false | tls  | ssl
$mail->Port = 25;                                    // TCP port to connect to no security 25 / ssl 465  /  tls 587

$mail->isHTML(true);                                  // Set email format to HTML
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->From = 'mandeep@devologix.com';
$mail->FromName = 'Mandeep Saini';
$mail->addReplyTo('mandeep@devologix.com', 'Reply from mail');

$mail->addAddress('me.mandeepsaini@gmail.com', 'Mandeep Saini');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional

//$mail->addCC('cc@example.com');
$mail->addBCC('mandeepsaini_ldh@yahoo.com');


$mail->Subject = 'Here is the subject test 1';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}