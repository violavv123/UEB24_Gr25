<?php
session_start();
$postId = $_GET['post_id'] ?? '';

if (!empty($postId)) {
    if (!isset($_SESSION['post_views'][$postId])) {
        $_SESSION['post_views'][$postId] = 0;
    }
    $_SESSION['post_views'][$postId]++;
    echo "Viewed";
}
?>