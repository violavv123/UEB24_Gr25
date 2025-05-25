<?php
session_start();

if (isset($_POST['theme'])) {
    setcookie('theme', $_POST['theme'], time() + 3600 * 24 * 30, "/");
    $_COOKIE['theme'] = $_POST['theme'];

    $themeHistory = [];
    if (isset($_COOKIE['theme_history'])) {
        $themeHistory = json_decode($_COOKIE['theme_history'], true) ?: [];
    }
    $themeHistory[] = $_POST['theme'];
    setcookie('theme_history', json_encode($themeHistory), time() + 3600 * 24 * 30, "/");
    $_COOKIE['theme_history'] = json_encode($themeHistory);
}

if (isset($_POST['delete_theme'])) {
    setcookie('theme', '', time() - 3600, "/");
    unset($_COOKIE['theme']);
    $theme = 'light';
} else {
    $theme = $_COOKIE['theme'] ?? 'light';
}

if (isset($_POST['delete_theme_history'])) {
    setcookie('theme_history', '', time() - 3600, "/");
    unset($_COOKIE['theme_history']);
    $themeHistory = [];
} else {
    $themeHistory = [];
    if (isset($_COOKIE['theme_history'])) {
        $themeHistory = json_decode($_COOKIE['theme_history'], true) ?: [];
    }
}

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
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
 <style>
      body.dark-theme {
          background: #181818 !important;
          color: #f1f1f1 !important;
      }
      .theme-switcher-wrapper {
          margin-top: 20px;
          display: flex;
          gap: 10px;
          align-items: flex-start;
      }
      .theme-toggle-btn {
          background: #003366;
          color: #fff;
          border: none;
          border-radius: 20px;
          padding: 8px 18px;
          cursor: pointer;
          z-index: 9999;
          font-size: 15px;
          transition: background 0.2s;
      }
      .theme-toggle-btn:hover {
          background: #e6ac00;
          color: #222;
      }
      .delete-theme-btn, .delete-theme-history-btn {
          background: #e74c3c;
          color: #fff;
          border: none;
          border-radius: 20px;
          padding: 6px 16px;
          cursor: pointer;
          z-index: 9999;
          font-size: 13px;
          transition: background 0.2s;
      }
      .delete-theme-btn:hover, .delete-theme-history-btn:hover {
          background: #c0392b;
      }
      body.dark-theme h2 {
          color: #fff !important;
      }
      .theme-history-list {
          margin-top: 10px;
          font-size: 14px;
          color: #333;
      }
      body.dark-theme .theme-history-list {
          color: #f1f1f1;
      }
 </style>
</head>
<body class="<?= $theme === 'dark' ? 'dark-theme' : '' ?>">
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

<div class="theme-switcher-wrapper">
 <form method="POST" style="display:inline;">
  <input type="hidden" name="theme" value="<?= $theme === 'dark' ? 'light' : 'dark' ?>">
  <button type="submit" class="theme-toggle-btn">
   Switch to <?= $theme === 'dark' ? 'Light' : 'Dark' ?> Theme
  </button>
 </form>
 <?php if (isset($_COOKIE['theme'])): ?>
 <form method="POST" style="display:inline;">
  <input type="hidden" name="delete_theme" value="1">
  <button type="submit" class="delete-theme-btn">Delete Theme Cookie</button>
 </form>
 <?php endif; ?>
 <?php if (!empty($themeHistory)): ?>
 <form method="POST" style="display:inline;">
  <input type="hidden" name="delete_theme_history" value="1">
  <button type="submit" class="delete-theme-history-btn">Delete Theme History</button>
 </form>
 <?php endif; ?>
</div>
<?php if (!empty($themeHistory)): ?>
    <div class="theme-history-list">
        <strong>Theme history:</strong>
        <?= implode(', ', array_map('htmlspecialchars', $themeHistory)) ?>
    </div>
<?php endif; ?>

<h2 style="text-align:center; margin-top: 30px;">My Favorite Listings ❤️</h2>
<div class="listings" style="margin: 20px;">
    <?php if (empty($favorites)): ?>
   <p style="text-align:center;">No favorites yet.</p>
    <?php else: ?>
        <?php foreach ($favorites as $id => $listing): ?>
    <div class="favorite-card">
            <?= $listing->displayCard(); ?>
            <?php if (isset($_SESSION['user_id'])): ?>
       <form method="POST" action="remove_favorite.php">
        <input type="hidden" name="property_id" value="<?= htmlspecialchars($listing->id) ?>">
        <input type="hidden" name="redirect" value="<?= $_SERVER['REQUEST_URI'] ?>">
        <button type="submit" class="remove-favorite-btn">Remove</button>
       </form>
            <?php else: ?>
       <a href="indexSignIn.php">Sign in to add to favorites</a>
            <?php endif; ?>
    </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php include 'neighbourhoods.php'; ?>
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