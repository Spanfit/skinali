<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$width = $_POST['user_width'];
$height = $_POST['user_height'];
$type = $_POST['user_type'];
$check = $_POST['check_m'];
$check = $_POST['check_d'];
$names = $_POST['name'];
$phones = $_POST['phone'];
$sale = $_POST['sale'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sanek.kuzin2012@yandex.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'zx3132333435vfvf'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('sanek.kuzin2012@yandex.ru'); // от кого будет уходить письмо?
$mail->addAddress('akuzin481@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Ширина: ' .$width. '<br>Высота: ' .$height. '<br>Вид стекла: ' .$type. '<br>Монтаж ' .$check_m. '<br>Доставка ' .$check_d ;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>