<?php

try {
    $pdo = new PDO('mysql:dbname=crud_bd; host=localhost', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}
