<?php
$host = "localhost";
$dbname = "blog_db";
$username = "root";
$password = ""; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Database connectie mislukt: " . $e->getMessage());
}

// Nederlands standaard taal
$language = $_GET['lang'] ?? 'nl';

// Bepaal de juiste taalbestand
$langFile = __DIR__ . "/app/lang/{$launguage}.ini";

// Controleer of het taalbestand bestaat, anders fallback naar NL
if (!file_exists($langFile)) {
    $langFile = __DIR__ . "/app/lang/nl.ini";
}

// Laad de taalbestand in een array
$texts = parse_ini_file($langFile);
?>
