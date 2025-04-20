<?php

$allListings = include 'listings.php';
$listings    = $allListings;


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

  <!--definimi dhe perdorimi i internal CSS-->
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

    /* Responsive Design */
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

    /* Logo Styling */
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

    <!-- Navigation Button -->
    <div class="nav-button">
      <button class="menu-btn">
        <!--Span element 2-->
        <span class="hamburger-icon">&#9776;</span>
      </button>

      <!-- Hidden Navigation Links -->
      <!--Div elementi 1-->
      <div class="nav-links-container">
        <ul class="nav-links">
          <!--perdorimi i atributeve brenda HTML elementeve-->
          <!--hyperlinks brenda HTML faqes-->
          <li><a href="aboutUs.php">About Us</a></li>
          <li><a href="indexYllka.php">Listings</a></li>
          <li><a href="indexKimete.html">Contact Us</a></li>
          <li><a href="indexRudina.php">Blog</a></li>
        </ul>
      </div>
  </nav>



  <section class="listing-section">
    <div class="container">
      <div class="filters">
        <div style="color: black; margin: 15px; padding-bottom: 15px;">
          <h2>Find your Dream Home</h2>
        </div>

        <form class="filter-form" method="GET">

        <!-- Sortimi sipas qmimit -->
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

          <!-- Sortimi sipas llojit te prones -->
          <div class="filter-item">
            <label for="property-type">Property Type</label>
            <select id="property-type" name="property-type">
              <option value="any" <?= ($_GET['property-type'] ?? 'any') === 'any' ? 'selected' : '' ?>>Any</option>
              <option value="apartment" <?= ($_GET['property-type'] ?? '') === 'apartment' ? 'selected' : '' ?>>Apartment</option>
              <option value="house" <?= ($_GET['property-type'] ?? '') === 'house' ? 'selected' : '' ?>>House</option>
            </select>
          </div>

          <!-- Sortimi sipas perdorimit te prones -->
          <div class="filter-item">
            <label for="property-use">Property Use</label>
            <select id="property-use" name="property-use">
              <option value="any" <?= ($_GET['property-use'] ?? 'any') === 'any' ? 'selected' : '' ?>>Buy</option>
              <option value="rent" <?= ($_GET['property-use'] ?? '') === 'rent' ? 'selected' : '' ?>>Rent</option>
            </select>
          </div>

          <!-- search button -->
          <div class="filter-item" style="text-align: center; margin-top: 15px;">
            <button type="submit" style="background-color: #007bff; color: white; padding: 10px 0px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px;">
              Search
            </button>
          </div>

        </form>

      </div>

      <!-- gjenerimi i cards me php -->
      <div class="listings">
  <?php foreach ($listings as $listing): ?>
    <?= $listing->displayCard(); ?>
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

  <!--footer-->
  <footer class="responsive-footer">
    <div class="footer-container">
      <div class="logo-contact">
        <img src="logo.png" alt="Luxury Homes Logo" class="footer-logo">
        <!--perdorimi i tagut address-->
        <address>
          <p><i class="fas fa-map-marker-alt"></i> Rruga Gazmend Zajmi Nr.47 </p>
          <p style="padding-left: 15px;"> Prishtina 10000, Kosovo</p>
          <p><i class="fas fa-phone"></i> +383 49 790 117</p>
          <p><i class="fas fa-envelope"></i> info@luxuryhomes.com</p>
        </address>
      </div>
      <div class="footer-links-container">
        <div class="footer-links">
          <h3>AGENT</h3>
          <a href="#">Login</a>
          <a href="#">Register</a>
        </div>
        <div class="footer-links">
          <h3>CITY LISTS</h3>
          <a href="#">Peja</a>
          <a href="#">Prishtina</a>
          <a href="#">Prizren</a>
          <a href="#">Others</a>
        </div>
        <div class="footer-links">
          <h3>QUICK LINKS</h3>
          <a href="#">Legal</a>
          <a href="#">Privacy Policy</a>
          <a href="indexRudina.html">Blog</a>
          <a href="#">Find an Agent</a>
        </div>
      </div>
      <div class="newsletter">
        <h3 style="margin-top:5px;">SIGN UP FOR OUR NEWSLETTER</h3>
        <p>Join our community of savvy real estate enthusiasts.</p>
        <div class="newsletter-form">
          <input type="email" placeholder="Your email address">
          <button type="submit"><i class="fas fa-paper-plane"></i></button>
        </div>
        <div class="social-icons">
          <!--Hyperlink tek nje URL tjeter-->
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
          <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    //javascript per navbar
    const menuButton = document.querySelector('.menu-btn');
    const navContainer = document.querySelector('.nav-links-container');

    menuButton.addEventListener('click', () => {
      navContainer.classList.toggle('active'); // Show/hide the nav links
    });
  </script>

</body>

</html>