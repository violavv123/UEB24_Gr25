<?php
// addCity.php
require 'conn.php';

$data = json_decode(file_get_contents("php://input"), true);

$newCity = trim($data['city']); // merr emrin e qytetit

if (!empty($newCity)) {
    // Parandalon dublikatat
    $checkSql = "SELECT * FROM cities WHERE name = ?";
    $stmt = $conn->prepare($checkSql);
    $stmt->bind_param("s", $newCity);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // Shto qytetin e ri
        $insertSql = "INSERT INTO cities (name) VALUES (?)";
        $stmt = $conn->prepare($insertSql);
        $stmt->bind_param("s", $newCity);
        $stmt->execute();
    }
}
