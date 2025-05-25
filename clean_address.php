<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function cleanAddress($address)
    {
        $pattern = '/[^a-zA-Z0-9\s,.-]/';
        return preg_replace($pattern, '', $address);
    }

    $address = $_POST['address'] ?? '';

    if (!empty($address)) {
        $cleanedAddress = cleanAddress($address);
        echo "<div class='result'><strong>Adresa e pastruar:</strong> $cleanedAddress</div>";
    } else {
        echo "<div class='result' style='background-color: #f8d7da; border-color: #f5c6cb;'><strong>Ju lutem, futni një adresë.</strong></div>";
    }
}
?>
