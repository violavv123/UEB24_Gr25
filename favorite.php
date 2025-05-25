<?php
session_start();

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