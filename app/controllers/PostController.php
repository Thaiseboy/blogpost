<?php
require_once __DIR__ . '/../models/Post.php';

class PostController {
    public function index() {
        $posts = Post::getAll();
        require __DIR__ . '/../views/index.php';
    }
}
?>