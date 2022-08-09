<?php

$dsn = "mysql:host=127.0.0.1;dbname=climbin";

try {
    $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}
