<?php
function generateSalt(int $length = 6): string {
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $salt = '';
    for ($i = 0; $i < $length; $i++) {
        $salt .= $chars[random_int(0, strlen($chars) - 1)];
    }
    return $salt;
}

function hashPassword(string $password, string $salt, int $iterations): string {
    return hash_pbkdf2('sha256', $password, $salt, $iterations,32);
}

function verifyPassword(string $providedPassword, string $storedHash, string $storedSalt, int $storedIterations): bool {
    $hashOfInput = hash_pbkdf2('sha256', $providedPassword, $storedSalt, $storedIterations, 32);
    var_dump([
  'storedHash' => $storedHash,
  'calculatedHash' => $hashOfInput,
  'storedSalt' => $storedSalt,
  'storedIterations' => $storedIterations,
]);
    return hash_equals($storedHash, $hashOfInput);
}

function createPasswordEntry(mysqli $conn, string $password): ?int {
    $salt = generateSalt();
    $iterations = 100; 

    $hashed = hashPassword($password, $salt, $iterations);

    $stmt = $conn->prepare("INSERT INTO passwords (hashed_password, salt, iterations) VALUES (?, ?, ?)");
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        return null;
    }

    $stmt->bind_param("ssi", $hashed, $salt, $iterations);
    if (!$stmt->execute()) {
        error_log("Execute failed: " . $stmt->error);
        $stmt->close();
        return null;
    }

    $passwordId = $conn->insert_id;
    $stmt->close();
    return $passwordId;
}

function getPasswordInfoById(mysqli $conn, int $passwordId): ?array {
    $stmt = $conn->prepare("SELECT hashed_password, salt, iterations FROM passwords WHERE id = ?");
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        return null;
    }

    $stmt->bind_param("i", $passwordId);
    if (!$stmt->execute()) {
        error_log("Execute failed: " . $stmt->error);
        $stmt->close();
        return null;
    }

    $result = $stmt->get_result();
    if ($result->num_rows !== 1) {
        $stmt->close();
        return null;
    }

    $row = $result->fetch_assoc();
    $stmt->close();
    return $row; 
}


?>