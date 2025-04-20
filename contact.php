 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $phone    = $_POST['phone'] ?? '';
    $message = $_POST['phone'] ?? '';

    $errors = [];

    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors[] = "Emri duhet te permbaje vetem shkronja ose hapesira. Nuk duhet te kete numra ose simbole!";
    }


    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $errors[] = "Format invalid i email.Ju lutem provoni perseri!";
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
        $errors[] = "Passwordi duhet te kete te pakten 8 karaktere, nje shkronje te madhe, nje shkronje te vogel dhe nje numer.";
    }

    if (!preg_match("/^\+3834\d{7}$/", $phone)) {
        $errors[] = "Numri duhet te filloj me +3834 dhe te mbaroj me 7 numra tjera.";
    }
    if (!preg_match("/^.{10,}$/s", $message)) {
        $errors[] = "Mesazhi duhet te permbaje te pakten 10 karaktere.";
    }
    



    if (!empty($errors)) {
        echo "<ul style='color: red;'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='indexKimete.html'>Go Back</a>";
    } else {
        echo "<script>alert('Te gjitha fushat jane valide!'); window.location.href='indexKimete.html';</script>";
    }
}
?> 