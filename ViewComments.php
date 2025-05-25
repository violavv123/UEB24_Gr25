<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentet nga përdoruesit</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px 40px;
            text-align: center;
        }

        nav {
            background-color: #005599;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
        }

        nav a:hover {
            text-decoration: underline;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            color: #003366;
        }

        .comments {
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            white-space: pre-wrap;
        }
    </style>
</head>
<body>

<header>
    <h1>Real Estate Company</h1>
</header>

<nav>
    <a href="index.php">Ballina</a>
    <a href="aboutUs.php">Rreth Nesh</a>
    <a href="listings.php">Pronat</a>
    <a href="contact.php">Kontakt</a>
    <a href="comments.php">Komentet</a>
</nav>

<h2>Komentet nga përdoruesit</h2>

<div class="comments">
<?php
$filePath = "logs/contact_messages.txt";

if (file_exists($filePath)) {
    $file = fopen($filePath, "r");
    $size = filesize($filePath);

    if ($size > 0) {
        $content = fread($file, $size);
        echo nl2br(htmlspecialchars($content)); 
    } else {
        echo "Nuk ka komente të regjistruara.";
    }

    fclose($file);
} else {
    echo "Fajlli i komenteve nuk ekziston.";
}
?>
</div>

<?php include 'includes/footer.php'; ?>
