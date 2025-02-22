<?php
$host = "db";
$port = 3306;
$dbname = "blog_db";
$username = "root";
$password = "root";

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connectie mislukt: " . $e->getMessage());
}
?>