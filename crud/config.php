<?php

try {
    $pdo = new PDO('mysql:dbname=baza; host=localhost', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}
