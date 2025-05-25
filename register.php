<?php
require_once "conn.php";
require_once "autorizimi.php";

$cities = [];
$result = $conn->query("SELECT id, name FROM cities ORDER BY name");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $cities[] = $row;
    }
    $result->free();
}

$username = $email = $password = $budget = $preferred_city = $property_type = "";
$username_err = $email_err = $password_err = $budget_err = $preferred_city_err = $property_type_err = "";
$success_msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = $conn->real_escape_string(trim($_POST["username"]));
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $username_err = "This username is already taken.";
        }
        $stmt->close();
    }

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email.";
    } else {
        $email = $conn->real_escape_string(trim($_POST["email"]));
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $email_err = "This email is already registered.";
        }
        $stmt->close();
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must be at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty(trim($_POST["budget"]))) {
        $budget_err = "Please enter a max budget.";
    } elseif (!is_numeric($_POST["budget"]) || floatval($_POST["budget"]) <= 0) {
        $budget_err = "Please enter a valid positive number for budget.";
    } else {
        $budget = floatval($_POST["budget"]);
    }

    if (empty($_POST["preferred_city"])) {
        $preferred_city_err = "Please select a preferred city.";
    } else {
        $preferred_city = intval($_POST["preferred_city"]);
        $valid_city = false;
        foreach ($cities as $city) {
            if ($city['id'] == $preferred_city) {
                $valid_city = true;
                break;
            }
        }
        if (!$valid_city) {
            $preferred_city_err = "Invalid city selected.";
        }
    }

    if (empty($_POST["property_type"])) {
        $property_type_err = "Please select a property type.";
    } else {
        $property_type = $_POST["property_type"];
        if (!in_array($property_type, ['apartment', 'house'])) {
            $property_type_err = "Invalid property type selected.";
        }
    }

   if (
    empty($username_err) && empty($email_err) && empty($password_err) &&
    empty($budget_err) && empty($preferred_city_err) && empty($property_type_err)
) {
    try {
        $conn->begin_transaction(); 

        $password_id = createPasswordEntry($conn, $password);
        if (!$password_id) {
            throw new Exception("Failed to save password.");
        }

        $stmt = $conn->prepare("INSERT INTO users (username, email, role, password_id) VALUES (?, ?, 'buyer', ?)");
        if (!$stmt) throw new Exception("Prepare failed for users insert: " . $conn->error);
        $stmt->bind_param("ssi", $username, $email, $password_id);
        if (!$stmt->execute()) throw new Exception("Execute failed for users insert: " . $stmt->error);
        $user_id = $stmt->insert_id;
        $stmt->close();

        $stmt = $conn->prepare("INSERT INTO buyers (user_id, preferred_city_id, budget, property_type) VALUES (?, ?, ?, ?)");
        if (!$stmt) throw new Exception("Prepare failed for buyers insert: " . $conn->error);
        $stmt->bind_param("iids", $user_id, $preferred_city, $budget, $property_type);
        if (!$stmt->execute()) throw new Exception("Execute failed for buyers insert: " . $stmt->error);
        $stmt->close();

        $conn->commit(); 

        $success_msg = "Registration successful! Username: " . htmlspecialchars($username) . " Email: " . htmlspecialchars($email);
        $username = $email = $password = $budget = $preferred_city = $property_type = "";

    } catch (Exception $ex) {
        $conn->rollback(); 
        $password_err = "Registration failed: " . $ex->getMessage();
        error_log("Registration failed: " . $ex->getMessage());
        echo "<pre>" . $ex->getMessage() . "</pre>";
    }
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
        input[type=text], input[type=email], input[type=password], select { width: 100%; padding: 8px; margin: 6px 0 12px; box-sizing: border-box; }
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

    <label for="budget">Max Budget:</label>
    <input type="text" name="budget" id="budget" value="<?= htmlspecialchars($budget) ?>" required>
    <div class="error"><?= $budget_err ?></div>

    <label for="preferred_city">Preferred City:</label>
    <select name="preferred_city" id="preferred_city" required>
        <option value="">Select City</option>
        <?php foreach ($cities as $city): ?>
            <option value="<?= $city['id'] ?>" <?= ($preferred_city == $city['id']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($city['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <div class="error"><?= $preferred_city_err ?></div>

    <label for="property_type">Property Type:</label>
    <select name="property_type" id="property_type" required>
        <option value="">Select Property Type</option>
        <option value="apartment" <?= ($property_type === 'apartment') ? 'selected' : '' ?>>Apartment</option>
        <option value="house" <?= ($property_type === 'house') ? 'selected' : '' ?>>House</option>
    </select>
    <div class="error"><?= $property_type_err ?></div>

    <button type="submit">Register</button>
</form>

</body>
</html>
