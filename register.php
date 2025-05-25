<?php
$username = $email = $password = "";
$username_err = $email_err = $password_err = $success_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email.";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must be at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($email_err) && empty($password_err)) {
      
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $success_msg = "Registration successful!<br>Username: " . htmlspecialchars($username) . "<br>Email: " . htmlspecialchars($email);

        $username = $email = $password = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Register Form</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 2rem auto; }
        form { border: 1px solid #ccc; padding: 1rem; border-radius: 5px; }
        input[type=text], input[type=email], input[type=password] { width: 100%; padding: 8px; margin: 6px 0 12px; box-sizing: border-box; }
        .error { color: red; font-size: 0.9em; }
        .success { background: #d4edda; color: #155724; padding: 10px; margin-bottom: 1rem; border-radius: 5px; border: 1px solid #c3e6cb; }
        button {
            width: 100%;
            padding: 12px;
            background-color:#003366;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #357ae8;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Register</h2>

<?php if ($success_msg): ?>
    <div class="success"><?= $success_msg ?></div>
<?php endif; ?>

<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?= htmlspecialchars($username) ?>" required>
    <div class="error"><?= $username_err ?></div>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>" required>
    <div class="error"><?= $email_err ?></div>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <div class="error"><?= $password_err ?></div>

    <button type="submit">Register</button>
</form>

</body>
</html>
