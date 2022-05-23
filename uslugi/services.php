<?php
session_start();

$link = mysqli_connect('localhost', 'root', '', 'uslugi');

if (!$link) {
    die('Error connect to DataBase');
}

if (isset($_POST['button'])) {

    switch (!$_SESSION['user']) {
        case 0:
            $sql = 'INSERT INTO us SET package = "На готовом шаблоне OpenCart, WordPress, Joomla", text = "Сайты-визитки и корпоративные сайты на бесплатных CMS,Удобная и современная админка,до 20 страниц, адаптивная верстка", BYN = "100"';
            $result = mysqli_query($link, $sql);

            if ($result == false) {
                print("Произошла ошибка при выполнении запроса");
            }
        case 1:
            header('Location: /');
    }
}


if (isset($_POST['button1'])) {

    switch (!$_SESSION['user']) {
        case 0:
            $sql = 'INSERT INTO us SET package = "Индивидуальный дизайн WordPress, Joomla, Bitrix", text = "Сайты-визитки и корпоративные сайты на любых CMS,Индивидуальный дизайн, согласование и отрисовка, до 15 страниц, адаптивная верстка, обучение администрированию", BYN = "130"';
            $result = mysqli_query($link, $sql);

            if ($result == false) {
                print("Произошла ошибка при выполнении запроса");
            }
        case 1:
            header('Location: /');
    }
}


if (isset($_POST['button2'])) {

    switch (!$_SESSION['user']) {
        case 0:
            $sql = 'INSERT INTO us SET package = "Интернет-магазин WordPress, Joomla, Bitrix, Shop-Script", text = "Функциональные и надежные решения для интернет маркетинга, разработка структуры сайта под дальнейшее продвижение, анализ конкурентов, структура сайта, яркий дизайн и индивидуальный функционал, подключение платежных систем, интеграция с 1C, программирование 15 часов", BYN = "170"';
            $result = mysqli_query($link, $sql);

            if ($result == false) {
                print("Произошла ошибка при выполнении запроса");
            }
        case 1:
            header('Location: /');
    }
}

if (isset($_POST['button3'])) {

    switch (!$_SESSION['user']) {
        case 0:
            $sql = 'INSERT INTO us SET package = "Тариф Лайт", text = "Продвижение корпоративного сайта", BYN = "133"';
            $result = mysqli_query($link, $sql);

            if ($result == false) {
                print("Произошла ошибка при выполнении запроса");
            }
        case 1:
            header('Location: /');
    }
}


if (isset($_POST['button4'])) {

    switch (!$_SESSION['user']) {
        case 0:
            $sql = 'INSERT INTO us SET package = "Тариф Медиум", text = "Продвижение интернет-магазина", BYN = "100"';
            $result = mysqli_query($link, $sql);

            if ($result == false) {
                print("Произошла ошибка при выполнении запроса");
            }
        case 1:
            header('Location: /');
    }
}

if (isset($_POST['button5'])) {

    switch (!$_SESSION['user']) {
        case 0:
            $sql = 'INSERT INTO us SET package = "Тариф VIP", text = "Продвижение VIP", BYN = "300"';
            $result = mysqli_query($link, $sql);

            if ($result == false) {
                print("Произошла ошибка при выполнении запроса");
            }
        case 1:
            header('Location: /');
    }
}
