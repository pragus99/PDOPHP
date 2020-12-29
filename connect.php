<?php   

$host = "127.0.0.1";
$db = "phpdo";
$user = "root";
$pass = "";
$char = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$char";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die($e->getMessage());// throw new \PDOException($e->getMessage(), (int)$e->getCode());
}