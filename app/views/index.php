<?php require_once __DIR__ . '/../../config.php'; ?>
<?php require_once __DIR__ . '/navbar.php';?>


<!DOCTYPE html>
<html lang="<?= $language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $texts['title']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center"><?= $texts['title']; ?></h1>
        <p class="text-center"><?= $text['description']; ?></p>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-primary">
            <?= $texts['button_read_more']; ?>
        </button>
    </div>
</body>
</html>