<?php
$to = "dolgiyseryoga@gmail.com"; // емайл получателя данных из формы
$tema = "Форма обратной связи на PHP"; // тема полученного емайла
$message = "Ваше имя: " . $_POST['name'] . "<br>"; //присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: " . $_POST['email'] . "<br>"; //полученное из формы name=email
$message .= "Номер телефона: " . $_POST['phone'] . "<br>"; //полученное из формы name=phone
$message .= "Сообщение: " . $_POST['message'] . "<br>"; //полученное из формы name=message
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
$send = mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных

if ($send) //проверяем, отправилось ли сообщение
    echo "Сообщение отправлено успешно! Перейти на <a href='http://seosite/'>http://seosite/</a>, если вас не перенаправило вручную.";
else
    echo "Ошибка, сообщение не отправлено! Возможно, проблемы на сервере";
