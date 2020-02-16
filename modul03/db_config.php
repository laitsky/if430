<?php
$dbname = "27047_modul03_db";
$host = "localhost";
$username = "root";
$password = "";
$dsn = "mysql:host=$host;dbname=$dbname";
try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
