<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Not signed in, redirect to sign-in page
    header('Location: indexSignIn.php?error=login_required');
    exit;
}

$propertyId = isset($_POST['property_id']) ? (int)$_POST['property_id'] : null;
$redirect = $_POST['redirect'] ?? 'favorites.php';

if ($propertyId !== null) {
    if (!isset($_SESSION['favorites'])) {
        $_SESSION['favorites'] = [];
    }
    if (!in_array($propertyId, $_SESSION['favorites'], true)) {
        $_SESSION['favorites'][] = $propertyId;
    }
}

header('Location: ' . $redirect);
exit;