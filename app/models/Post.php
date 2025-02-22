<?php
include_once __DIR__ . '/../../config.php';

class Post {
    public static function getAll() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM posts ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>