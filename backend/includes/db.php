<?php

$dsn = "mysql:host=localhost;dbname=climbin";

try {
	$pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
	echo $e->getMessage();
}
