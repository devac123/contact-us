<?php


   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   include ('../phpmailer/sendmail.php'); 

if (isset($_POST['callFunc']) && ($_POST['callFunc'] == "SendQuery")) 
{
    $json =  json_decode($_POST['data'], true);
    
    // this one is for user
    $recipent1 = new stdClass();
    $email = $json['person_email'];
    $name = $json['person_name'];
    $phone = $json['person_phone'];
    $msg = $json['person_msg'];
    
    $recipent1->Subject = "query";
    $recipent1->Address = $email;
    $recipent1->Body =  "Thankyou for contacting us ".$name. " we will reply you as soon as possible";
    $recipent1->Phone =  $phone;
    
    // this one is for admin
    $recipent2 = new stdClass();
    $recipent2->Address = 'mandeep@devologix.com';
    $recipent2->Body = 'Hello Admin'.$name. 'Contact us and their query is '.$msg . 'and customer detail is '.'Name'.$name.'E-mail'.$email ;

    sendMail($recipent1);
    sendMail($recipent2);



}
else if (isset($_POST['callFunc']) && ($_POST['callFunc'] == "contactus")) 
{
    $json =  json_decode($_POST['data']);
    echo "return here";
}
else
{
    echo "undefined function";

}


?>
