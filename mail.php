<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];



$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'apresyan42@mail.ru';
$mail->Password = 'alberto5149';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('apresyan42@mail.ru');
$mail->addAddress('apresyan_alberto@mail.ru');






$mail->isHTML(true);

$mail->Subject = 'Заявка текстового сайта';
$mail->Body    = '' .$name  . ' вот такое письмо ';
$mail->AltBody = ' ';

if(!mail->send()) {
    echo 'error';
} else {
    echo 'good';
}
?>