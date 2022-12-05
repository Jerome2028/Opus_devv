<?php
require  "phpmail/Exception.php";
require  "phpmail/PHPMailerAutoload.php";
require  "phpmail/SMTP.php";
require  "phpmail/PHPMailer.php";
require  "email.template.php";

$name = $_POST["name"];
$email_address = $_POST["email_address"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$email_template = new email_template();
$emailBody = $email_template->emailMessage($name, $email_address, $subject, $message);

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "cpascual107@gmail.com";
$mail->Password = "uopogosrviqdghju";
$mail->setFrom('cpascual107@gmail.com', 'no-reply');
$mail->addAddress('itchaaanp@gmail.com', 'OPUS');
$mail->Subject = $subject;
$mail->Body = $emailBody;
$mail->isHTML(true);
if (!$mail->send()) {
    echo "Opps, something wrong! Please try again!";
    // echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Successfully sent!";
}