<?php
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email      = $_POST['email'] ?? '';
    $phone    = $_POST['phone'] ?? '';
    $message    = $_POST['message'] ?? '';
    $agentId    = $_POST['agent_id'] ?? null;
    $propertyId = $_POST['property_id'] ?? null;

    $errors = [];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format invalid i email. Ju lutem provoni perseri!";
    }

     if (!preg_match("/^\+3834\d{7}$/", $phone)) {
        $errors[] = "Numri duhet te filloj me +3834 dhe te mbaroj me 7 numra tjera.";
    }

    if (strlen($message) < 10) {
        $errors[] = "Mesazhi duhet te permbaje te pakten 10 karaktere.";
    }

    if (empty($agentId)) {
        $errors[] = "Ju lutem zgjidhni një agjent.";
    }

    if (empty($propertyId)) {
        $errors[] = "Ju lutem zgjidhni një pronë.";
    }

    if (!empty($errors)) {
        echo "<ul style='color: red;'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='indexKimete.html'>Go Back</a>";
        exit;
    }


    $stmtUser = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmtUser->bind_param("s", $email);
    $stmtUser->execute();
    $resultUser = $stmtUser->get_result();

    if ($resultUser->num_rows === 0) {
        echo "Nuk u gjet përdorues me këtë email.";
        exit;
    }

    $user = $resultUser->fetch_assoc();
    $userId = $user['id'];

    $stmtBuyer = $conn->prepare("SELECT id FROM buyers WHERE user_id = ?");
    $stmtBuyer->bind_param("i", $userId);
    $stmtBuyer->execute();
    $resultBuyer = $stmtBuyer->get_result();

    if ($resultBuyer->num_rows === 0) {
        echo "Nuk u gjet blerësi për këtë përdorues.";
        exit;
    }

    $buyer = $resultBuyer->fetch_assoc();
    $buyerId = $buyer['id'];

    $stmtAgent = $conn->prepare("SELECT id FROM agents WHERE id = ?");
    $stmtAgent->bind_param("i", $agentId);
    $stmtAgent->execute();
    $resultAgent = $stmtAgent->get_result();
    if ($resultAgent->num_rows === 0) {
        echo "Agjenti i zgjedhur nuk ekziston.";
        exit;
    }

    $stmtProperty = $conn->prepare("SELECT id FROM properties WHERE id = ?");
    $stmtProperty->bind_param("i", $propertyId);
    $stmtProperty->execute();
    $resultProperty = $stmtProperty->get_result();
    if ($resultProperty->num_rows === 0) {
        echo "Prona e zgjedhur nuk ekziston.";
        exit;
    }

    $stmtInsert = $conn->prepare("INSERT INTO appointments (buyer_id, agent_id, property_id, telephone_number, message) VALUES (?, ?, ?, ?, ?)");
    $stmtInsert->bind_param("iiiss", $buyerId, $agentId, $propertyId, $phone, $message);

    if ($stmtInsert->execute()) {
        echo "<script>alert('Takimi u rezervua me sukses!'); window.location.href='indexKimete.php';</script>";
    } else {
        echo "Gabim gjatë regjistrimit të takimit: " . $conn->error;
    }
}
?>
