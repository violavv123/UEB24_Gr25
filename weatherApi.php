<?php
if (!isset($_GET['city'])) {
    echo json_encode(['error' => 'City not provided']);
    exit;
}

$city = urlencode($_GET['city']);
$apiKey = 'ba8e5c50449b4c47a1a173904252505'; 

$url = "http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$city}&aqi=no";

$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data['current'])) {
    echo json_encode([
        'temperature' => $data['current']['temp_c'],
        'description' => $data['current']['condition']['text'],
        'icon' => $data['current']['condition']['icon']
    ]);
} else {
    echo json_encode(['error' => 'City not found or API error']);
}
?>
