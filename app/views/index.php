<?php require_once __DIR__ . '/../../config.php'; ?>
<?php require_once __DIR__ . '/navbar.php;'?>


<!DOCTYPE html>
<html lang="<?= $language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $texts['title']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mijn Blog</a>
    </nav>
    <div class="container mt-4">
        <h1 class="text-center">Welkom op mijn Blog!</h1>

        <?php foreach ($posts as $post): ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($post['title']) ?></h5>
                    <p class="card-text"><?= nl2br(htmlspecialchars($post['content'])) ?></p>
                    <p class="text-muted">Geplaatst op: <?= $post['created_at'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>