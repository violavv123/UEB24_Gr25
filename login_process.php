<?php
global $conn;
session_start();
require_once 'conn.php';
require_once 'autorizimi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email format is invalid.";
        exit;
    }
    $stmtUser = $conn->prepare("SELECT id, password_id FROM users WHERE email = ?");
    if (!$stmtUser) {
        die("Prepare failed: " . $conn->error);
    }
    $stmtUser->bind_param("s", $email);
    $stmtUser->execute();
    $resultUser = $stmtUser->get_result();

    if ($resultUser->num_rows === 0) {
        echo "User not found.";
        exit;
    }

    $user = $resultUser->fetch_assoc();
    $passwordId = $user['password_id'];

    $passwordInfo = getPasswordInfoById($conn, (int)$passwordId);
    if (!$passwordInfo) {
        echo "Could not retrieve password info.";
        exit;
    }
    $isValid = verifyPassword($password, $passwordInfo['hashed_password'], $passwordInfo['salt'], (int)$passwordInfo['iterations']);

    if ($isValid) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $email;
        // Optionally, set a cookie for "remember me" (expires in 7 days)
        setcookie('user_id', $user['id'], time() + (86400 * 7), "/");
        header("Location: index.php");
        exit;
    } else {
        echo "Invalid password.";
        exit;
    }
} else {
    header("Location: indexSignIn.php");
    exit;
}
?>