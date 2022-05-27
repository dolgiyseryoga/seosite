<?php

$connect = mysqli_connect('localhost', 'root', '', 'baza');

if (!$connect) {
    die('Error connect to DataBase');
}
