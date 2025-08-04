<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "api_project";
$port = 3306;

$dsn = "mysql:host=$host;port=$port;dbname=$database";

try {
    $connection = new PDO($dsn, $user, $password);
}catch (PDOException $e) {
    die("Database Connection failed: ");
}

