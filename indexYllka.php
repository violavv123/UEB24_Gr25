<?php
session_start();

$allListings = include 'listings.php';
$listings    = $allListings;

global $location, $type, $use, $shouldFilter;

$location   = $_GET['location']      ?? '';
$type       = $_GET['property-type'] ?? 'any';
$use        = $_GET['property-use']  ?? 'any';

$shouldFilter = $location !== '' || $type !== 'any' || $use !== 'any';
if ($shouldFilter) {
    $listings = array_filter($listings, function ($listing) use ($location, $type, $use) {
        $titleLower = strtolower($listing->title);

        $matchLocation = $location === 'All'
            || str_contains($titleLower, strtolower($location));

        $matchType = $type === 'any'
            || ($type === 'apartment' && $listing instanceof Apartment)
            || ($type === 'house'     && $listing instanceof House);

        $isRent   = str_ends_with($listing->priceDisplay, '/mo');
        $matchUse = $use === 'any'
            || ($use === 'rent' && $isRent)
            || ($use === 'buy'  && ! $isRent);

        return $matchLocation && $matchType && $matchUse;
    });
}

if (isset($_GET['sort'])) {
    if ($_GET['sort'] === 'asc') {
        usort($listings, fn($a, $b) => $a->price <=> $b->price);
    } elseif ($_GET['sort'] === 'desc') {
        usort($listings, fn($a, $b) => $b->price <=> $a->price);
    }
}

$favorites = $_SESSION['favorites'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listings</title>
	<!--External CSS-->
	<link rel="stylesheet" href="styleYllka.css">
	<!--font awesome for icons-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<!--perdorimi i JS se jashtme-->
	<script src="script.js" defer></script>

	<style>
      /* Footer Styling */
      .responsive-footer {
          background-color: black;
          color: white;
          padding: 20px;
      }
      .footer-container {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          align-items: center;
      }
      .logo-contact p {
          margin: 5px 0;
      }
      .logo-contact {
          flex: 1;
          min-width: 250px;
      }
      .footer-logo {
          max-width: 150px;
          margin-bottom: 10px;
      }
      .footer-links-container {
          display: flex;
          flex: 2;
          justify-content: space-around;
          min-width: 250px;
      }
      .footer-links {
          margin: 0 10px;
      }
      .footer-links h3 {
          margin-bottom: 10px;
      }
      .footer-links a {
          display: block;
          color: white;
          text-decoration: none;
          margin-bottom: 5px;
      }
      .footer-links a:hover {
          text-decoration: underline;
      }
      .newsletter {
          flex: 1.5;
          min-width: 250px;
      }
      .newsletter-form {
          display: flex;
          margin-top: 10px;
      }
      .newsletter-form input {
          flex: 1;
          padding: 8px;
          border: none;
          border-radius: 4px 0 0 4px;
      }
      .newsletter-form button {
          background-color: #00bcd4;
          color: white;
          border: none;
          padding: 8px 15px;
          cursor: pointer;
          border-radius: 0 4px 4px 0;
      }
      .newsletter-form button:hover {
          background-color: #008c9e;
      }
      .social-icons {
          margin-top: 15px;
      }
      .social-icons a {
          margin-right: 10px;
          font-size: 1.2em;
          color: #fff;
          text-decoration: none;
      }
      .social-icons .fab:hover {
          color: #00bcd4;
      }
      @media (max-width: 768px) {
          .footer-container {
              flex-direction: column;
              text-align: center;
          }
          .footer-links-container {
              flex-direction: column;
              align-items: center;
          }
          .footer-links {
              margin-bottom: 20px;
          }
          .newsletter-form {
              flex-direction: column;
          }
          .newsletter-form input,
          .newsletter-form button {
              width: 100%;
              margin: 10px 0;
          }
      }
      /*Navbar Styling */
      .navbar {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px 20px;
          background-color: #0d0d0d;
          color: white;
          position: sticky;
          top: 0;
          z-index: 1000;
      }
      .logo {
          display: flex;
          align-items: center;
      }
      .logo img {
          height: 40px;
          margin-right: 10px;
      }
      .brand {
          color: white;
          text-decoration: none;
          font-size: 1.5em;
      }
	</style>
</head>

<body>
<!--Navigation Bar-->
<nav class="navbar">
	<div class="logo">
		<a href="/">
			<img src="logo.png" width="45" height="50" alt="Luxury Homes Logo" />
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
          <?php if (isset($_SESSION['user_id'])): ?>
						<li><a href="logout.php">Sign Out</a></li>
						<li><a href="favorites.php">Favorites</a></li>
          <?php else: ?>
						<li><a href="indexSignIn.php">Sign In</a></li>
          <?php endif; ?>
			</ul>
		</div>
	</div>
</nav>

<section class="listing-section">
	<div class="container">
		<div class="filters">
			<div style="color: black; margin: 15px; padding-bottom: 15px;">
				<h2>Find your Dream Home</h2>
			</div>
			<form class="filter-form" method="GET">
				<div class="filter-item">
					<label for="sort" style="font-weight: bold;">Sort by Price:</label>
					<select name="sort" id="sort" style="margin-left: 10px; padding: 5px;">
						<option value="asc" <?= ($_GET['sort'] ?? '') === 'asc' ? 'selected' : '' ?>>Low to High</option>
						<option value="desc" <?= ($_GET['sort'] ?? '') === 'desc' ? 'selected' : '' ?>>High to Low</option>
					</select>
				</div>
				<div class="filter-item" style="position: relative;">
					<label for="location">Location</label>
					<input
									type="text"
									id="location"
									name="location"
									placeholder="Enter city or area"
									autocomplete="off"
									list="location-suggestions"
									value="<?= htmlspecialchars($_GET['location'] ?? 'All') ?>">
					<datalist id="location-suggestions">
						<option value="All">
						<option value="Prishtina">
						<option value="Peja">
						<option value="Prizren">
						<option value="Mitrovica">
						<option value="Podujeva">
						<option value="Gjakova">
						<option value="Ferizaj">
						<option value="Vushtrri">
						<option value="Gjilan">
					</datalist>
				</div>
				<div class="filter-item">
					<label for="property-type">Property Type</label>
					<select id="property-type" name="property-type">
						<option value="any" <?= ($_GET['property-type'] ?? 'any') === 'any' ? 'selected' : '' ?>>Any</option>
						<option value="apartment" <?= ($_GET['property-type'] ?? '') === 'apartment' ? 'selected' : '' ?>>Apartment</option>
						<option value="house" <?= ($_GET['property-type'] ?? '') === 'house' ? 'selected' : '' ?>>House</option>
					</select>
				</div>
				<div class="filter-item">
					<label for="property-use">Property Use</label>
					<select id="property-use" name="property-use">
						<option value="any" <?= ($_GET['property-use'] ?? 'any') === 'any' ? 'selected' : '' ?>>Buy</option>
						<option value="rent" <?= ($_GET['property-use'] ?? '') === 'rent' ? 'selected' : '' ?>>Rent</option>
					</select>
				</div>
				<div class="filter-item" style="text-align: center; margin-top: 15px;">
					<button type="submit" style="background-color: #007bff; color: white; padding: 10px 0px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px;">
						Search
					</button>
				</div>
			</form>
		</div>
		<div class="listings">
        <?php foreach ($listings as $listing): ?>
            <?= $listing->displayCard(in_array($listing->id, $favorites)); ?>
        <?php endforeach; ?>
		</div>
	</div>
</section>

<div id="modal-overlay"></div>
<div id="details-modal">
	<button class="close-btn">X</button>
	<h3 class="modal-title"></h3>
	<p class="modal-price"></p>
	<p class="modal-details"></p>
	<img class="main-image" src="" alt="Main Image">
	<div class="carousel"></div>
	<div class="details">
		<h4>More Information:</h4>
		<p class="additional-info"></p>
	</div>
</div>

<?php include './classes/footer/footer.php'; ?>

<script>
    //javascript per navbar
    const menuButton = document.querySelector('.menu-btn');
    const navContainer = document.querySelector('.nav-links-container');
    menuButton.addEventListener('click', () => {
        navContainer.classList.toggle('active');
    });

        document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.favorite-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const propertyId = this.getAttribute('data-id');
                const button = this;
                fetch('favorite.php', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    body: `property_id=${propertyId}&redirect=`
                })
                    .then(response => {
                        if (button.textContent.trim() === '♡') {
                            button.textContent = '❤️';
                        } else {
                            button.textContent = '♡';
                        }
                    });
            });
        });
    });
</script>
</body>
</html>