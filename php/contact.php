<?php

$name = isset($_POST['name']) ? $_POST['name'] : die("0");
$email = isset($_POST['email']) ? $_POST['email'] : die("0");
$subject = isset($_POST['subject']) ? $_POST['subject'] : die("0");
$message = isset($_POST['message']) ? $_POST['message'] : "";

    require_once '/PHPMailer/config.php';
    require_once '/PHPMailer/class.phpmailer.php';
    require_once '/PHPMailer/class.smtp.php';
    require_once '/PHPMailer/PHPMailerAutoload.php';

    $mailer = new PHPMailer();
    $mailer->IsSMTP();  // telling the class to use SMTP
    $mailer->Host     = gethostbyname("smtpout.asia.secureserver.net"); // SMTP server
    $mailer->Port = "80";
    $mailer->Username = "support@aztechcorps.com";
    $mailer->Password = "Aptitudo@95";
    $mailer->From     = "no-reply@aztechcorps.com";
    $mailer->FromName = "AztechCorps Support";
    $mailer->SMTPAuth = true;
    $mailer->Sender = "no-reply@aztechcorps.com";
    $mailer->SMTPSecure = '';



// Set the subject
    $mailer->Subject = $subject;

// Body
    $mailer->Body = 
$name.' has some query.
('. $email .')

'. $message .'


Thank you for choosing us.

With regards,
Support Team,
AztechCorps

';

// Add an address to send to.
    $mailer->AddAddress("kingdomlubricants@gmail.com", "Kingdom Lubricants");
    $mailer->AddAddress("bloodyshower@gmail.com", "Kingdom Lubricants");
    $mailer->AddAddress("gomez.obaiz@gmail.com", "Kingdom Lubricants");
    if($mailer->send())
    echo 1;
    else 
    echo 0;

?>