<?php
// getCities.php
require 'conn.php';

$sql = "SELECT name FROM cities";
$result = $conn->query($sql);

$cities = [];
while ($row = $result->fetch_assoc()) {
    $cities[] = $row['name'];
}

header('Content-Type: application/json');
echo json_encode($cities);
