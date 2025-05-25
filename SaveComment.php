<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $data = "Emri: $name\nEmail: $email\nMesazhi: $message\n---\n";

    $file = fopen("logs/contact_messages.txt", "a");
    fwrite($file, $data);
    fclose($file);

    echo "<script>alert('Mesazhi u ruajt me sukses!'); window.location.href='contact.php';</script>";
}
?>
