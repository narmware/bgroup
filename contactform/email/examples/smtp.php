<?php
function sendmail($to,$name,$sub,$msg, $to2,$name2,$sub2,$msg2,$state, $email, $sender)
{
require 'email/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
//$mail->Host = "smtp.gmail.com";
$mail->Host = "mail.narmware.com";

//enable this if you are using gmail smtp, for mandrill app it is not required
$mail->SMTPSecure = 'tls';                            

//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "suraj@narmware.com";
//Password to use for SMTP authentication
$mail->Password = "suraj@123";

$mail->setFrom($email, $sender);

$mail->addAddress($to, $name);
$mail->Subject = $sub;
$msg =($msg);   
$mail->msgHTML($msg);
$mail->send();

$mail->ClearAddresses();
if($state==1)
{
$mail->addAddress($to2, $name2);
$mail->Subject = $sub2;
$msg =($msg2);   
$mail->msgHTML($msg);
$mail->send();
}

}
?>

