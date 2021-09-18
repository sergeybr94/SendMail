<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP(); // Говорим, что отправляем напрямую в SMTP
$mail->SMTPDebug = 2; // можно установить 0. 2 - вывод логов

// Настройка отправки через SMTP
$mail->Host = 'smtp.mail.ru'; // адрес сервера
$mail->Port = 587; // порт сервера
$mail->SMTPAuth = true; // нужна авторизация
$mail->Username = 'login@mail.ru'; // логин
$mail->Password = 'you_password'; // пароль

// Настройка письма
$mail->setFrom('from@mail.ru', 'Sergei'); // От кого отправляем
$mail->addAddress('email_to@gmail.com', 'Sergei'); // Кому отправляем
$mail->Subject = 'Testing PHPMailer'; // Тема письма
$mail->Body = 'This is a plain text message body'; // Содержимое письма
//$mail->addAttachment('test.txt'); // Прикрепить файл к письму

// Отправляем письмо
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}