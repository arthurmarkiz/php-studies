<?php

$dsn = 'mysql:host=localhost;dbname=myfirstdatabase';
$dbusername = 'root';
$dbpassword = '';

try {
    // pdo = Php Data Object
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    // Error handler
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e -> getMessage();
}