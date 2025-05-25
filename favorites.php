<?php
session_start();

$allListings = include 'listings.php';
$favoriteIds = $_SESSION['favorites'] ?? [];

$favoriteIds = array_map('intval', $favoriteIds);

$favorites = array_filter(
    $allListings,
    fn($id) => in_array($id, $favoriteIds, true),
    ARRAY_FILTER_USE_KEY
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Favorites</title>
	<link rel="stylesheet" href="styleYllka.css">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar">
	<div class="logo">
		<a href="/">
			<img src="logo.png" width="45" height="50" alt="Luxury Homes Logo">
		</a>
		<a href="#top" class="brand">LUXury Homes</a>
	</div>
	<div class="nav-button">
		<button class="menu-btn">
			<span class="hamburger-icon">&#9776;</span>
		</button>
		<div class="nav-links-container">
			<ul class="nav-links">
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="indexYllka.php">Listings</a></li>
				<li><a href="indexKimete.php">Contact Us</a></li>
				<li><a href="indexRudina.php">Blog</a></li>
				<li><a href="indexSignIn.php">Sign In</a></li>
				<li><a href="favorites.php">❤️</a></li>
			</ul>
		</div>
	</div>
</nav>
<h2 style="text-align:center; margin-top: 30px;">My Favorite Listings ❤️</h2>
<div class="listings" style="margin: 20px;">
    <?php if (empty($favorites)): ?>
			<p style="text-align:center;">No favorites yet.</p>
    <?php else: ?>
        <?php foreach ($favorites as $id => $listing): ?>
				<div class="favorite-card">
            <?= $listing->displayCard(); ?>
					<form method="POST" action="remove_favorite.php" style="margin-top:10px;">
						<input type="hidden" name="property_id" value="<?= htmlspecialchars($id) ?>">
						<button type="submit" class="remove-favorite-btn">Remove</button>
					</form>
				</div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php include './classes/footer/footer.php'; ?>

<script>
    // Navbar toggle JS
    const menuButton = document.querySelector('.menu-btn');
    const navContainer = document.querySelector('.nav-links-container');
    menuButton.addEventListener('click', () => {
        navContainer.classList.toggle('active');
    });
</script>
</body>
</html>