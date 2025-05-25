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
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
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
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
}

if (isset($_POST['action']) && $_POST['action'] === 'delete') {
    $id = intval($_POST['id'] ?? 0);

    if ($id) {
        $stmt = $conn->prepare("DELETE FROM neighbourhoods WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
}

$sql_neighbourhoods = "SELECT n.id, n.name, n.description, n.city_id, c.name AS city_name 
                       FROM neighbourhoods n 
                       LEFT JOIN cities c ON n.city_id = c.id 
                       ORDER BY n.id";
$result = $conn->query($sql_neighbourhoods);
$neighbourhoods = [];
if ($result) {
    while ($row = $result->fetch_object()) {
        $neighbourhoods[] = $row;
    }
    $result->free();
}

$sql_cities = "SELECT id, name FROM cities ORDER BY name";
$result_cities = $conn->query($sql_cities);
$cities = [];
if ($result_cities) {
    while ($row = $result_cities->fetch_object()) {
        $cities[] = $row;
    }
    $result_cities->free();
}
?>
<h2 style="text-align: center;">My favourite neighbourhoods</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Përshkrimi</th>
            <th>Qyteti</th>
            <th>Veprime</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($neighbourhoods as $n): ?>
        <tr>
            <form method="POST" action="" style="margin:0;">
                <td><?= $n->id ?></td>
                <td>
                    <input type="text" name="name" value="<?= htmlspecialchars($n->name) ?>" required />
                </td>
                <td>
                    <textarea name="description"><?= htmlspecialchars($n->description) ?></textarea>
                </td>
                <td>
                    <select name="city_id" required>
                        <?php foreach ($cities as $city): ?>
                            <option value="<?= $city->id ?>" <?= $city->id == $n->city_id ? 'selected' : '' ?>>
                                <?= htmlspecialchars($city->name) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <input type="hidden" name="id" value="<?= $n->id ?>" />
                    <button type="submit" name="action" value="update">Përditëso</button>
                    <button type="submit" name="action" value="delete" onclick="return confirm('Jeni i sigurt që dëshironi të fshini këtë lagje?')">Fshi</button>
                </td>
            </form>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
