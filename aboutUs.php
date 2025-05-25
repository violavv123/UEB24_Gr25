<!-- ABOUT US*/ -->

<?php
include './classes/aboutUs/Milestone.php';
include './classes/aboutUs/OurTeam.php';

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

$violaResyli = new OurTeam();
$violaResyli->setName("Viola Resyli");
$violaResyli->setRole("Founder & CEO");
$violaResyli->setImage("https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg");
$violaResyli->setDescription("Viola’s vision and leadership have been the cornerstone of LUXury Homes. With over a decade of experience in real estate and a passion for personalized service, she’s dedicated to making every client feel at home.");

$yllkaFejzullahu = new OurTeam();
$yllkaFejzullahu->setName("Yllka Fejzullahu");
$yllkaFejzullahu->setRole("Lead Agent");
$yllkaFejzullahu->setImage("yllkasphoto.jpg");
$yllkaFejzullahu->setDescription("Yllka brings unmatched local expertise and a keen eye for market trends. Whether you’re buying or selling, her strategic approach ensures the best results.");

$teamMembers = [
    $violaResyli,
    $yllkaFejzullahu,
    new OurTeam("Rudina Bulliqi", "Marketing Specialist", "rudinasphoto.jpg", "Rudina uses innovative marketing strategies to ensure your property stands out. From staging to social media campaigns, she’s got you covered."),
    new OurTeam("Kimete Sadiku", "Client Success Manager", "kimetesphoto.jpg", "Kimete ensures every client enjoys a seamless experience. From initial consultations to closing deals, she’s dedicated to keeping everything on track.")
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
	<style>
      .associative-arrays {
          margin-left: 20px;
      }

      .associative-arrays h2 {
          text-align: center;
          color: #003366;
          margin-bottom: 20px;
      }

      .associative-arrays form {
          background-color: #fff;
          padding: 30px 40px;
          border-radius: 12px;
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
          width: 100%;
          max-width: 500px;
      }

      .associative-arrays label {
          font-weight: 600;
          margin-bottom: 8px;
          display: block;
          color: #333;
      }

      .associative-arrays select {
          width: 100%;
          padding: 10px;
          margin-bottom: 20px;
          border: 1px solid #ccc;
          border-radius: 8px;
          font-size: 16px;
          background-color: #fff;
          color: #333;
      }

      .associative-arrays button {
          background-color: #003366;
          color: white;
          border: none;
          padding: 12px 20px;
          border-radius: 8px;
          font-size: 16px;
          cursor: pointer;
          transition: background-color 0.3s ease;
      }

      .associative-arrays button:hover {
          background-color: #e6ac00;
      }

      .associative-arrays #result {
          margin-top: 25px;
          background-color: #e9f7ef;
          padding: 15px 20px;
          border-left: 5px solid #28a745;
          border-radius: 8px;
          color: #155724;
          font-weight: 500;
      }
	</style>
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
				<li><a href="indexYllka.php">Listings</a></li>
				<li><a href="indexKimete.php">Contact Us</a></li>
				<li><a href="indexRudina.php">Blog</a></li>
				<li><a href="indexSignIn.php">Sign In</a></li>
				<li><a href="favorites.php">Favorites</a></li>
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


<h2><strong>Our Team</strong></h2>
<div class="team-section">
    <?php OurTeam::showTeam($teamMembers); ?>
</div>

<div class="associative-arrays">
    <h2><strong>Services and Staff</strong></h2>

    <form id="serviceForm">
        <label for="sherbimi">Select service:</label>
        <select id="sherbimi" name="sherbimi">
            <?php
            $personel = [
                "Uranit Vuçitërna" => ["sherbime" => ["Shitja e pasurive", "Qiradhënia e pasurive", "Konsulencë imobiliare"]],
                "Riga Zubaku" => ["sherbime" => ["Menaxhimi i marrëdhënieve me klientët", "Sigurimi i shërbimit të shkëlqyer për klientët", "Konsulencë për klientët"]],
                "Yllka Fejzullahu" => ["sherbime" => ["Konsulencë për shitjen e pasurive të luksit", "Përgatitja e dokumentacionit të shitjes", "Negociata me blerësit"]],
                "Viola Resyli" => ["sherbime" => ["Strategji për zhvillimin e biznesit", "Marrëdhënie me partnerë dhe investitorë", "Menaxhimi i ekipit"]],
                "Rudina Bulliqi" => ["sherbime" => ["Fushata marketingu për pasuri", "Përgatitja e materialeve promocionale", "Analiza e tregut dhe pozicionimi"]]
            ];

            $unique_services = [];
            foreach ($personel as $p) {
                foreach ($p['sherbime'] as $s) {
                    $unique_services[$s] = $s;
                }
            }

            foreach ($unique_services as $sherbimi) {
                echo "<option value=\"$sherbimi\">$sherbimi</option>";
            }
            ?>
        </select>

        <button type="submit">Find</button>
    </form>

    <div id="result"></div>
</div>

<h2>
	<strong>Our Office Locations</strong>
</h2>
<div id="map"></div>

<!--footer-->
<?php
include './classes/footer/footer.php';
?>


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
        e.preventDefault(); 
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

document.getElementById("serviceForm").addEventListener("submit", function (e) {
    e.preventDefault(); 

    const formData = new FormData(this);

    fetch("find_staff.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById("result").innerHTML = data;
    })
    .catch(err => {
        console.error(err);
        document.getElementById("result").innerText = "An error occurred.";
    });
});
</script>
</body>
</html>
