<?php 

      error_reporting();
      /* Exception class. */
      require '..\PHPMailer\Exception.php';
      /* The main PHPMailer class. */
      require '..\PHPMailer\PHPMailer.php';
      /* SMTP class, needed if you want to use SMTP. */
      require '..\PHPMailer\SMTP.php';
      require '..\PHPMailer\PHPMailerAutoload.php';

      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPDebug = 0;
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'ssl';
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465;
      $mail->IsHTML(true);
      $mail->Username = "pmcmailchimp@gmail.com";
      $mail->Password = "qyegdvkzvbjihbou";
      
 ?>
