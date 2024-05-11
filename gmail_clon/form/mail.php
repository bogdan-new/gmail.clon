<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$text = $_POST['user_text'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];

$mail->isSMTP();
$mail->Host = ' smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'listopadovschool@gmail.com';
$mail->Password = 'qweasdzxc-12345678900000';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('listopadovschool@gmail.com'); 
$mail->addAddress('braliktvink887@gmail.com'); 

$mail->isHTML(true); 

$mail->Subject = 'Заявка с тестового сайту';
$mail->Body    = '' .$name . ' залишив заявку, його телефон ' .$phone. '<br>Пошта цього користувача ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>