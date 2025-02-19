<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogpost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="text-center">Blogpost</a>

<?php
require_once "config.php";

$stmt = $pdo->query("SELECT * FROM blogpost");
$stmt->fetchAll();
?>
        <div class="container mt-4">
            <h1 class="text-center">Welkom op mijn Blog!</h1>
<?php foreach($posts as $post): ?>
<div class="card mb-3">
    <dic class="card-body">
        <h5 class="card-title"> <?= htmlspecialchars($post['title']) ?></h5>
        <p class="card-text"><?= nl2br(htmlspecialchars($post["content"])) ?></p>
        <p class="text-muted">Geplaatst op: <?= $post['create_at'] ?></p>
    </dic>
</div>
<?php endforeach ?>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>