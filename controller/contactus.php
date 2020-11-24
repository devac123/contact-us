<?php


   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   include ('../phpmailer/sendmail.php'); 

if (isset($_POST['callFunc']) && ($_POST['callFunc'] == "SendQuery")) 
{
    $json =  json_decode($_POST['data'], true);
    $recipent = new PHPMailer();

    $email = $json['person_email'];
    $name = $json['person_name'];
    $phone = $json['person_phone'];
    $msg = $json['person_msg'];
    
    $recipent->Subject = "query";
    $recipent->Address = $email;
    $recipent->Body =  $msg;
    $recipent->Phone =  $phone;
    sendMail($recipent);

}
else if (isset($_POST['callFunc']) && ($_POST['callFunc'] == "contactus")) 
{
    $json =  json_decode($_POST['data']);
    
    //echo $DataObj->person_name;
    echo "return here";
}
else
{
    echo "undefined function";

}


?>
