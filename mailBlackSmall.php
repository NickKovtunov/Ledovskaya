<?php

if ($_POST && isset($_POST['inputName'], $_POST['inputTheme'], $_POST['inputMessage'])) {
    $inputName = $_POST['inputName'];
    $inputTheme = $_POST['inputTheme'];
    $inputMessage = $_POST['inputMessage'];

    $to = 'ledovskaya.dina@gmail.com';
    $subject = "Сообщение с сайта - '$inputTheme'";
    $message = "Пользователь $inputName отправил Вам следующее сообщение: '$inputMessage'";

    mail($to, $subject, $message);
//переадресация после отправки формы 

    header("location: http://ledovskaya.ru/contactsThanksBlackSmall.html");
    exit;

}