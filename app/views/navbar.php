<?php require_once __DIR__ . '/../../config.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><?= $texts['home']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#"><?= $texts['about']; ?></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><?= $texts['contact']; ?></a></li>
        </ul>
        <div class="ml-auto">
            <a href="?lang=nl" class="btn btn-light">🇳🇱 <?= $texts['language_switch']; ?></a>
            <a href="?lang=en" class="btn btn-light">🇬🇧 <?= $texts['language_switch']; ?></a>
        </div>
    </div>
</nav>