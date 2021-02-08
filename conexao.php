<?php

$dsn = "mysql:dbname=teste_cadastro;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn,$dbuser,$dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falhou".$e->getMessage();
}