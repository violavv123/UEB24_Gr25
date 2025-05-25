<?php
session_start();
$propertyId = isset($_POST['property_id']) ? (int)$_POST['property_id'] : null;
if ($propertyId !== null && isset($_SESSION['favorites'])) {
    // Ensure all IDs are integers for strict comparison
    $_SESSION['favorites'] = array_map('intval', $_SESSION['favorites']);
    $_SESSION['favorites'] = array_values(
        array_diff($_SESSION['favorites'], [$propertyId])
    );
}
header('Location: favorites.php');
exit;