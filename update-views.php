<?php
session_start();
header('Content-Type: application/json'); // për të kthyer JSON

$postId = $_GET['post_id'] ?? '';

if (!empty($postId)) {
    if (!isset($_SESSION['post_views'][$postId])) {
        $_SESSION['post_views'][$postId] = 0;
    }
    $_SESSION['post_views'][$postId]++;

    // kthen view count si JSON
    echo json_encode([
        'views' => $_SESSION['post_views'][$postId]
    ]);
} else {
    echo json_encode(['error' => 'No post ID']);
}
