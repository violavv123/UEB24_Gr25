<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$action = $data['action'] ?? '';

switch ($action) {
    case 'average':
        $prices = [120000, 95000, 175000, 200000];
        $avg = array_sum($prices) / count($prices);
        echo json_encode(['message' => "Mesatarja: €" . number_format($avg, 2)]);
        break;

    case 'discount':
        $price = floatval($data['cmimi'] ?? 0);
        $discount = floatval($data['zbritja'] ?? 0);
        $newPrice = $price - $price * ($discount / 100);
        echo json_encode(['message' => "Çmimi pas zbritjes: €" . number_format($newPrice, 2)]);
        break;

    case 'success':
        $total = intval($data['total'] ?? 0);
        $sold = intval($data['shitjet'] ?? 0);
        if ($total > 0) {
            $percentage = round(($sold / $total) * 100, 2);
            echo json_encode(['message' => "Përqindja e suksesit: $percentage%"]);
        } else {
            echo json_encode(['message' => "0 listime."]);
        }
        break;

    case 'code':
        $id = rand(1, 9999);
        $code = "2025-" . str_pad($id, 4, '0', STR_PAD_LEFT);
        echo json_encode(['message' => "Kodi i Blerjes: $code"]);
        break;

    default:
        echo json_encode(['message' => "Kërkesë e panjohur."]);
}
?>