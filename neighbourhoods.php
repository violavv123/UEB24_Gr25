<?php
include 'conn.php';

if (isset($_POST['action']) && $_POST['action'] === 'insert') {
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $city_id = intval($_POST['city_id'] ?? 0);

    if ($name && $city_id) {
        $stmt = $conn->prepare("INSERT INTO neighbourhoods (name, description, city_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $name, $description, $city_id);
        $stmt->execute();
        $stmt->close();
    }
}

if (isset($_POST['action']) && $_POST['action'] === 'update') {
    $id = intval($_POST['id'] ?? 0);
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $city_id = intval($_POST['city_id'] ?? 0);

    if ($id && $name && $city_id) {
        $stmt = $conn->prepare("UPDATE neighbourhoods SET name = ?, description = ?, city_id = ? WHERE id = ?");
        $stmt->bind_param("ssii", $name, $description, $city_id, $id);
        $stmt->execute();
        $stmt->close();
    }
}

if (isset($_POST['action']) && $_POST['action'] === 'delete') {
    $id = intval($_POST['id'] ?? 0);

    if ($id) {
        $stmt = $conn->prepare("DELETE FROM neighbourhoods WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}

$sql_neighbourhoods = "SELECT n.id, n.name, n.description, n.city_id, c.name AS city_name 
                       FROM neighbourhoods n 
                       LEFT JOIN cities c ON n.city_id = c.id 
                       ORDER BY n.id";
$neighbourhoods = $conn->query($sql_neighbourhoods)->fetch_all(MYSQLI_ASSOC);

$sql_cities = "SELECT id, name FROM cities ORDER BY name";
$cities = $conn->query($sql_cities)->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neighbourhoods Management</title>
    <style>
        table {
    border-collapse: collapse;
    width: 100%;
    margin: 20px 0;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

form {
    margin: 30px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input[type="text"], textarea, select {
    width: calc(100% - 12px);
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    padding: 10px 16px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
}

.tabela{
    padding: 20px;
}

    </style>
</head>
<body>

<h2 style="text-align: center;">My Favourite Neighbourhoods</h2>
<div class="tabela">
<form method="POST" action="">
    <input type="hidden" name="action" value="insert">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>
    
    <label for="city_id">City:</label>
    <select id="city_id" name="city_id" required>
        <option value="">-- Select a city --</option>
        <?php foreach ($cities as $city): ?>
            <option value="<?= $city['id'] ?>"><?= htmlspecialchars($city['name']) ?></option>
        <?php endforeach; ?>
    </select>
    
    <button type="submit">Add Neighbourhood</button>
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>City</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($neighbourhoods as $n): ?>
        <tr>
            <form method="POST" action="">
                <td><?= $n['id'] ?></td>
                <td>
                    <input type="text" name="name" value="<?= htmlspecialchars($n['name']) ?>" required>
                </td>
                <td>
                    <textarea name="description"><?= htmlspecialchars($n['description']) ?></textarea>
                </td>
                <td>
                    <select name="city_id" required>
                        <?php foreach ($cities as $city): ?>
                            <option value="<?= $city['id'] ?>" <?= $city['id'] == $n['city_id'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($city['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <input type="hidden" name="id" value="<?= $n['id'] ?>">
                    <button type="submit" name="action" value="update">Update</button>
                    <button type="submit" name="action" value="delete" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </form>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</body>
</html>
