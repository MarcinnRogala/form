<?php
require('reset.php');
include('smtp/PHPMailerAutoload.php');

$rand = rand(10000, 99999);
$rstmail = $_POST["rest-email"];
$mail = new PHPMailer(true);

if (isset($_POST['submit'])) {
    $email = $_POST['rest-email'];
}

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "$rstmail";
$mail->Password = 'TDW8961ndd';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->setFrom($rstmail);
$mail->addAddress($rstmail);
$mail->isHTML(true);
$mail->Subject = 'Message';
$mail->Body = "Your new password: " . $rand;
if (!$mail->Send()) {
    echo $mail->ErrorInfo;
} else {
    return 'Send';
}
