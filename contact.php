<?php
require_once 'conn.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email      = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone      = filter_var($_POST['phone'] ?? '', FILTER_SANITIZE_STRING);
    $message    = filter_var($_POST['message'] ?? '', FILTER_SANITIZE_STRING);
    $agentId    = filter_var($_POST['agent_id'] ?? null, FILTER_SANITIZE_NUMBER_INT);
    $propertyId = filter_var($_POST['property_id'] ?? null, FILTER_SANITIZE_NUMBER_INT);


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
 $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'yfejzullahuu@gmail.com';   
            $mail->Password   = 'qpmvzuliuipyqqwg';        
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('youremail@gmail.com', 'Agjensioni i Patundshmërive');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Rezervimi i Takimit me Agjentin';
            $mail->Body    = "
                <h3>Përshëndetje,</h3>
                <p>Takimi juaj është rezervuar me sukses.</p>
                <p>
                    <b>Agjenti ID:</b> $agentId<br>
                    <b>Prona ID:</b> $propertyId<br>
                    <b>Mesazhi:</b> $message<br>
                    <b>Telefoni:</b> $phone
                </p>
                <p>Faleminderit që na kontaktuat!</p>
            ";

            $mail->send();
            echo "<script>alert('Takimi u rezervua dhe emaili u dërgua me sukses!'); window.location.href='indexKimete.php';</script>";
        } catch (Exception $e) {
            echo "Takimi u regjistrua, por ndodhi një gabim gjatë dërgimit të emailit: {$mail->ErrorInfo}";
        }
    } else {
        echo "Gabim gjatë regjistrimit të takimit: " . $conn->error;
    }
}
?>
