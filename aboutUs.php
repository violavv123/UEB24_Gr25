<!-- ABOUT US*/ -->

<?php
include 'Milestone.php';

$milestone2022 = new Milestone();
$milestone2022->setYear("2022");
$milestone2022->setMilestone("LUXury Homes Founded");
$milestone2022->setDetails("Four passionate real estate visionaries—Viola Resyli, Yllka Fejzullahu, Kimete Sadiku, and Rudina Bulliqi—came together to create LUXury Homes. The goal was simple: to redefine real estate with honesty, innovation, and seamless service.");
$milestone2022->setImage("https://images.pexels.com/photos/7414310/pexels-photo-7414310.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");

$milestones = [
    $milestone2022,
    new Milestone("2023", "1,000 Happy Clients",
        "By the end of 2023, LUXury Homes had helped 1,000 clients find their dream homes, from cozy apartments to luxurious family estates. This milestone marked our first step toward becoming a leading real estate agency in Southeast Europe (SEE).",
        "https://images.pexels.com/photos/7641901/pexels-photo-7641901.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    ),
    new Milestone("2024", "Leading Real Estate Agency in SEE",
        "LUXury Homes expanded operations across Southeast Europe, becoming recognized for trust, transparency, and exceptional service. Our agency served over 3,000 happy clients while maintaining a commitment to sustainable practices and meaningful community engagement.",
        "https://images.pexels.com/photos/16574711/pexels-photo-16574711/free-photo-of-city-and-hills-behind.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    ),
    new Milestone("2025 & Beyond", "Shaping the Future",
        "Our mission continues: not just creating homes but building a legacy. We aim to lead innovation in real estate, embrace sustainable practices, and connect communities across the globe.",
        "https://images.pexels.com/photos/5217882/pexels-photo-5217882.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    )
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="aboutUs.css">
	<!--Leaflet js-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
	<!-- perdorimi i JS ne seksionin head -->
	<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
	<!--font awesome for icons-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
				rel="stylesheet">
	<title>About Us</title>
</head>
<body>
<!--Navigation Bar-->
<nav class="navbar">
	<div class="logo">
		<a href="/">
			<img src="logo.png" width="45" height="50" alt="Luxury Homes Logo"/>
		</a>
		<a href="#top" class="brand">LUXury Homes</a>
	</div>

	<!-- Navigation Button -->
	<div class="nav-button">
		<button class="menu-btn">
			<span class="hamburger-icon">&#9776;</span>
		</button>

		<!-- Hidden Navigation Links -->
		<div class="nav-links-container">
			<ul class="nav-links">
				<!--perdorimi i atributeve brenda HTML elementeve-->
				<!--hyperlinks brenda HTML faqes-->
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="indexYllka.html">Listings</a></li>
				<li><a href="indexKimete.html">Contact Us</a></li>
				<li><a href="indexRudina.html">Blog</a></li>
			</ul>
		</div>
</nav>

<header>
	<h1>Your Real Estate Genies</h1>
	<div class="hero">
		<!--perdorimi i heading tagjeve-->
		<h2>LUXury Homes</h2>
	</div>
</header>
<section class="our-story-section">
	<div class="story-content">
		<h2>Our Story</h2>
		<div class="content-wrapper">
			<!--Perdorimi i tagjeve bold, italic, underline-->
			<p>
				Welcome to <strong>LUXury Homes</strong>, where the art of exceptional living meets the science of seamless
				service. Since our inception in <i>2022</i>, we’ve reimagined what it means to find a home—not just a space to
				live, but a place to grow, dream, and thrive.
			</p>
			<p>
				At <strong>LUXury Homes</strong>, we understand that every individual has a unique vision of what "home" feels
				like. Whether it’s the warmth of a cozy fireplace, the serenity of a garden oasis, or the energy of a city
				skyline, we turn your desires into reality. From modern penthouses to timeless family estates, our properties
				are as diverse as the dreams they fulfill.
			</p>
			<p>
				Our mission goes beyond real estate. We’re building a legacy of trust, innovation, and community. Through
				sustainable practices and meaningful connections, we’re not just creating homes—we’re shaping the future.
			</p>
			<!--perdorimi i shkurtesave abbr-->
			<p>
				<strong>LUXury Homes:</strong> was founded with a simple goal: to make buying and selling homes easy, honest,
				and transparent. What started as a two-person team has now grown into a leading real estate agency in <abbr
								title="Southeast Europe">SEE</abbr> , serving over 3,000 happy clients.
			</p>
			<p class="tagline">
				<strong>LUXury Homes:</strong> Crafting lifestyles, one dream at a time.
			</p>
		</div>
	</div>
</section>

<!-- Drag and drop -->
<div class="gallery-container">
	<div id="gallery" class="gallery" draggable="false">
		<img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
				 alt="Office Aura" draggable="true" class="draggable">
		<img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
				 alt="Teamwork" draggable="true" class="draggable">
		<img src="https://images.pexels.com/photos/7641859/pexels-photo-7641859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
				 alt="Meeting with Clients" draggable="true" class="draggable">
		<img src="https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
				 alt="Elegant House" draggable="true" class="draggable">
	</div>
</div>

<div>
	<table>
		<tr>
			<th>Year</th>
			<th>Milestone</th>
			<th>Details</th>
			<th>Image</th>
		</tr>
      <?php Milestone::showTable($milestones); ?>
	</table>
</div>


<h2>
	<bold>Our Team</bold>
</h2>
<div class="team-section">
	<div class="team-member">
		<div class="team-card">
			<div class="team-card-front">
				<img src="https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg" alt="Viola, Founder">
				<h3>Viola Resyli</h3>
				<p>Founder & CEO</p>
			</div>
			<!--underline-->
			<div class="team-card-back">
				<p>Viola’s vision and leadership have been the cornerstone of <u>LUXury Homes</u>. With over a decade of
					experience in real estate and a passion for personalized service, she’s dedicated to making every client feel
					at home.</p>
			</div>
		</div>
	</div>
	<div class="team-member">
		<div class="team-card">
			<div class="team-card-front">
				<img src="yllkasphoto.jpg" alt="Yllka, Lead Agent">
				<h3>Yllka Fejzullahu</h3>
				<p>Lead Agent</p>
			</div>
			<div class="team-card-back">
				<p>Yllka brings unmatched local expertise and a keen eye for market trends. Whether you’re buying or selling,
					her strategic approach ensures the best results.</p>
			</div>
		</div>
	</div>
	<div class="team-member">
		<div class="team-card">
			<div class="team-card-front">
				<img src="rudinasphoto.jpg" alt="Rudina, Marketing Specialist">
				<h3>Rudina Bulliqi</h3>
				<p>Marketing Specialist</p>
			</div>
			<div class="team-card-back">
				<p>Rudina uses innovative marketing strategies to ensure your property stands out. From staging to social media
					campaigns, she’s got you covered.</p>
			</div>
		</div>
	</div>
	<div class="team-member">
		<div class="team-card">
			<div class="team-card-front">
				<img src="kimetesphoto.jpg" alt="Kimete, Client Success Manager">
				<h3>Kimete Sadiku</h3>
				<p>Client Success Manager</p>
			</div>
			<div class="team-card-back">
				<p>Kimete ensures every client enjoys a seamless experience. From initial consultations to closing deals, she’s
					dedicated to keeping everything on track.</p>
			</div>
		</div>
	</div>
</div>


<h2>
	<bold>Our Office Locations</bold>
</h2>
<div id="map"></div>

<footer class="responsive-footer">
	<div class="footer-container">
		<div class="logo-contact">
			<img src="logo.png" alt="Luxury Homes Logo" class="footer-logo">
			<p><i class="fas fa-map-marker-alt"></i> Rruga Gazmend Zajmi Nr.47 </p>
			<p style="padding-left: 15px;"> Prishtina 10000, Kosovo</p>
			<p><i class="fas fa-phone"></i> +383 49 790 117</p>
			<p><i class="fas fa-envelope"></i> info@luxuryhomes.com</p>
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
				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
				<a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
	</div>
</footer>


<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<!-- perdorimi i JS ne seksionin body -->
<script>
    var map = L.map('map').setView([42.6722, 21.1669], 5); // Centered on the first office

    // Use OpenStreetMap tile layer (free)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Locations of the offices (add your office lat/lng here)
    var locations = [
        {lat: 42.6722, lng: 21.1669}, // Prishtina
        {lat: 42.6742, lng: 20.2806}, // Peja
        {lat: 42.8853, lng: 20.8683}, // Mitrovica
        {lat: 42.2200, lng: 20.7383}, // Prizren
        {lat: 42.3803, lng: 20.4266}, // Gjakova

    ];

    locations.forEach(function (location) {
        L.marker([location.lat, location.lng]).addTo(map)
            .bindPopup("Office Location")
            .openPopup();
    });

    //javascript per navbar
    const menuButton = document.querySelector('.menu-btn');
    const navContainer = document.querySelector('.nav-links-container');

    menuButton.addEventListener('click', () => {
        navContainer.classList.toggle('active'); // Show/hide the nav links
    });

    // Drag and drop
    const gallery = document.getElementById('gallery');
    const draggables = document.querySelectorAll('.draggable');

    draggables.forEach(draggable => {
        draggable.addEventListener('dragstart', (e) => {
            draggable.classList.add('dragging');
        });

        draggable.addEventListener('dragend', () => {
            draggable.classList.remove('dragging');
        });
    });

    gallery.addEventListener('dragover', (e) => {
        e.preventDefault(); // Allows drop
        const afterElement = getDragAfterElement(gallery, e.clientX);
        const dragging = document.querySelector('.dragging');
        if (afterElement == null) {
            gallery.appendChild(dragging);
        } else {
            gallery.insertBefore(dragging, afterElement);
        }
    });

    function getDragAfterElement(container, x) {
        const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')];
        return draggableElements.reduce((closest, child) => {
            const box = child.getBoundingClientRect();
            const offset = x - box.left - box.width / 2;
            if (offset < 0 && offset > closest.offset) {
                return {offset: offset, element: child};
            } else {
                return closest;
            }
        }, {offset: Number.NEGATIVE_INFINITY}).element;
    }


</script>
</body>
</html>
