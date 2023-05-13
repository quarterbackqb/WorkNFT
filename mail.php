<?php

$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$to = "office@simwood.com.ua";
$subject = "Заявка с сайта simwood.com.ua";
$txt = "Текст з форми: \r\n" .
    "E-mail: " . $email . "\n" .
    "Телефон: " . $phone . "\n" .
    "Сообщение: " . $message . "\n";

$headers = "From: " . "\r\n" .
    "CC: ";
mail($to, $subject, $txt, "Content-type: text/plain; charset=\"utf-8\"\n From: $headers");
print_r('Заявка');
