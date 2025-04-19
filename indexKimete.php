<?php
$errors = [];
$submitted = false;

function generateSecureKey() {
    return bin2hex(random_bytes(8));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $gender = $_POST['gender'] ?? '';
    $heardFrom = $_POST['heardFrom'] ?? [];
    $secureKey = $_POST['secureKey'] ?? '';

    // Name - letters and spaces only
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$", $name)) {
        $errors[] = "Name can only contain letters and spaces. No numbers or symbols allowed.";
    }

    // Email - basic pattern
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,}$/", $email)) {
        $errors[] = "Invalid email format. Please include '@' and a domain.";
    }

    // Phone - digits, +, -, (), and space
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match("/^[0-9+\s()-]+$", $phone)) {
        $errors[] = "Phone number can only contain digits, spaces, +, -, and (). No letters allowed.";
    }

    // Message
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // Gender
    if (empty($gender)) {
        $errors[] = "Please select your gender.";
    }

    // Checkboxes
    if (empty($heardFrom)) {
        $errors[] = "Please select at least one option for how you heard about us.";
    }

    // Secure Key
    if (empty($secureKey)) {
        $errors[] = "Secure key is required. Please generate it.";
    }

    if (empty($errors)) {
        $submitted = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Contact</title>
    <link rel="stylesheet" type="text/css" href="styleKimete.css">
    <!--font awesome for icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- google fonts -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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
        <li><a href="indexRudina.html">Blog</a></li>
    </ul>
    </div>
</nav>
       <div class="container">
      <!--Perdorimi i text fushave dhe password-->
        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form id="contactForm" action="#" method="POST">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" pattern="[A-Za-z\s]+" placeholder="Enter your full name" required title="Name can only contain letters and spaces.">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter a valid email address." placeholder="Enter your email" required>
                <label for="password">Password:</label>
<!-- <input type="password" id="password" name="password"
 pattern="[A-Za-z0-9!@#$%^&*_+=\-:;',.?/\\|`~]{6,}"
 title="Password must be at least 6 characters and can include letters, numbers, and symbols."
 placeholder="Enter your password" required> -->
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone"
           pattern="[0-9]{10,15}" title="Phone number must be between 10 to 15 digits."
           placeholder="Enter your phone number" required>          
                 <!-- <label for="message">Message:</label>
                 <textarea id="message" name="message"
              pattern="[\s\S]{10,}" title="Message must be at least 10 characters."
              placeholder="Enter your message" required></textarea> -->

            <br>
            <br>
            <!--Perdorimi i radio buttons-->
                <label>Gender:</label><br>
                <div class="gender-radio-buttons">
                <label for="male">
                <input type="radio" id="male" name="gender" value="male" required>
                    Male
                  </label>
                  <label for="female">
                  <input type="radio" id="female" name="gender" value="female" required>
                  Female
                 </label>
                </div>
<!--Perdorimi i checkboxes-->
<!--perdorimi i atributeve te inputit si checked, required, autocomplete etj -->
     <section class="checkboxes">
      <h2>Where did you hear about us:</h2>
      <div class="checkbox-group">
        <div class="checkbox-item">
          <label for="Social_Media">Social Media</label>
      <input type="checkbox" id="Social_Media" name="heardFrom[]" value="Social Media">
        </div>
        <div class="checkbox-item">
          <label for="Family_Friends">Family/Friends</label>
        <input type="checkbox" id="Family_Friends" name="heardFrom[]"  value="Family/Friends">
          </div>
        <div class="checkbox-item">
          <label for="Advertisements">Advertisements</label>
        <input type="checkbox" id="Advertisements" name="heardFrom[]"  value="Advertisment">
        </div>
        </div>
     </section>
              <!--keygen and output-->
              <input type="hidden" id="secureKeyInput" name="secureKey">
              <label>Generate a Secure Key:</label>
              <button type="button" id="generateKey">Generate Key</button>
       <output id="keyOutput">No key generated yet.</output>
              <!--Perdorimi i Submit butonit-->
          <button type="submit">Submit</button>
          <br>
           <!--Perdorimi i jQuery me Html(remove)-->
       <button type="button" id="removeFormButton">Remove Form</button>
           <!--Perdorimi i jQuery me Html(add)-->
       <button type="button" id="addFormButton">Add New Form</button>

      </form>
  </section>

        <section class="features">
            <h3 style="text-decoration: underline;">
                <em>Why Choose Us?</em>
            </h3>
            <!--Perdorimi i listave te parenditura-->
            <ul>
              <!--Perdorimi i tekstit te theksuar-->
                <li><mark>Affordable Real Estate Options</mark></li>
                <li><mark>Expert Guidance</mark></li>
                <li><mark>Hassle-Free Documentation</mark></li>
                <li><mark>Customer Support 24/7</mark></li>
            </ul>
            </section>

    </div>
 <!-- Leaflet Map Section -->
 <section class="map-section">
    <h2>Our Location</h2>
    <div id="map" style="height: 400px;"></div> <!-- Map container -->
  </section>


    <!--footer-->
    <footer class="responsive-footer" >
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
              <a href="indexRudina.php">Blog</a>
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


    <!--javascript-->
  <script>
    //Perdorimi jQuery me HTML(get)
     document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
            let message = document.getElementById('message').value;

            if (name && email && phone && message) {
                alert(`Thank you, ${name}! We recieved your message.`);
                document.getElementById('contactForm').reset();
            } else {
                alert('Please fill out all fields!');
            }


           //Kontrollo nëse emaili përmban simbolin @
            if (!email.includes('@')) {
            alert('Please enter a valid email address containing "@" symbol.');
            return;
        }
    });
    document.getElementById('generateKey').addEventListener('click', function() {
      //Funksioni per te krijuar nje celes rastesor me gjatesi te specifikuar
       function generateRandomKey(length) {
     //Grupi i karaktereve qe mund te perdoren ne celes
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let result = '';
        //Zgjedh karaktere rastesore dhe nderton celesin
        for (let i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        return result; //Kthen celesin e krijuar
    }
     // Gjenero celesin e sigurt me gjatesi 16 karaktere
    const secureKey = generateRandomKey(16);
    //Shfaq celesin ne elementin keyOutput
    document.getElementById('keyOutput').textContent = secureKey;
    //Vendos celesin ne nje input te fshehur "secureKeyInput" per ta ruajtur ose derguar
    document.getElementById('secureKeyInput').value = secureKey;
    });            
$(document).ready(function() {
  //Kur butoni për të hequr formularin klikohet
  $("#removeFormButton").click(function() {
      //Përdorimi i jQuery efekteve(Fade)
    $(".contact-form").fadeOut(1000,function(){ 
  $(this).remove(); //E heq nga Dom gradualishte
      });
    });
});
$(document).ready(function() {
  //Butoni me shtu nje formular te ri
  $("#addFormButton").click(function() {
      var newForm = `
      <section class="contact-form">
        <h2>Property Preferences</h2>
        <form>
          <label for="property-type">Property Type:</label>
          <select id="property-type" name="property-type" required>
            <option value="apartment">Apartment</option>
            <option value="house">House</option>
            <option value="office">Office</option>
            <option value="villa">Villa</option>
          </select>
          
          <label for="budget">Budget (in EUR):</label>
          <input type="number" id="budget" name="budget" placeholder="Enter your budget" required>
          
          <label for="location">Preferred Location:</label>
          <input type="text" id="location" name="location" placeholder="Enter your preferred location" required>
          
          <label for="bedrooms">Number of Bedrooms:</label>
          <input type="number" id="bedrooms" name="bedrooms" placeholder="Enter the number of bedrooms" required>
          <button type="submit">Submit</button>
        </form>
      </section>
    `;

    //Me shtu formularin e ri para footerit
    $("footer").before(newForm); 
      //Përdorimi i jQuery efekteve(Fade)
      $(".contact-form").hide().fadeIn(1000); //Shfaq formularin gradualishte
  });
});
      //Përdorimi i jQuery efekteve(animate)
         $(document).ready(function() {
    $("#generateKey").click(function() {
        $(this).animate({
            width: "150px", //Ndryshon gjeresine
            height: "50px"  //Ndryshon lartesine
        }, 1000); //Koha e animacionit 1 sekonde
    });
});


       // Inicializimi i Hartes me Leaflet
var map = L.map('map').setView([42.6026, 20.9026], 7); // Koordinatat e Kosoves

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Shenjat ne Harte
function addMarkerWithPopup(lat, lng, description) {
    L.marker([lat, lng]).addTo(map)
        .bindPopup(description)
        .on('click', function (e) {
            let popupContent = e.target.getPopup().getContent();
            if (popupContent.match(/Apartment/)) {
                popupContent = popupContent.replace(/Apartment/, 'Accommodation');
                e.target.getPopup().setContent(popupContent);
            }
        })
        .openPopup();
}


// Vendosja e shenjave
addMarkerWithPopup(42.65575228509542, 21.159112006476047, 'Apartment');
addMarkerWithPopup(42.67911292887467, 21.163043463037788, 'Apartment');
addMarkerWithPopup(42.659416550587906, 20.28741942269552, 'Apartment');
addMarkerWithPopup(42.218083890928476, 20.743623468641516, 'Apartment');
addMarkerWithPopup(42.22538928230871, 20.730259406786494, 'Villa');
addMarkerWithPopup(42.882798499295944, 20.853957675239798, 'Villa');
addMarkerWithPopup(42.39163821370002, 20.439327178135276, 'House');
addMarkerWithPopup(42.67139575852414, 21.155248202195352, 'House');
addMarkerWithPopup(42.88837439050088, 20.85854803808907, 'House');



//javascript per navbar
  const menuButton = document.querySelector('.menu-btn');
  const navContainer = document.querySelector('.nav-links-container');

  menuButton.addEventListener('click', () => {
  navContainer.classList.toggle('active'); // Show/hide the nav links
});
    </script>
</body>
</html>