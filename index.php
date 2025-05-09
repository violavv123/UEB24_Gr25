<!DOCTYPE html>
<!--krijimi i nje strukture bazike te nje HTML faqe-->
<html lang="en">
<head>
  <!--kuptimi i qellimit te krijimit dhe perdorimit te tagjeve kryesore-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--perdorim i titullit te faqes-->
    <title>LUXury Homes</title>
    <meta name="title" content="LUXury Homes">
    <meta name="description" content="Kjo eshte nje Real Estate Website e punuar nga grupi 25">
    <link rel="stylesheet" href="style.css">
     <!-- favicon - logo e bisnezit -->
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <!--font awesome for icons-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
     <!-- google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
     <!--css files-->
     <link rel="stylesheet" href="style.css">
     <!--jquery-->
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
     


    <style>
 input, textarea {
  color: black; 
  background-color: white; 
}
.numeric-arrays {
    background-color: #fff;
    border: 2px solid #003366; 
    border-radius: 15px;
    padding: 30px;
    max-width: 500px;
    margin: auto;
    margin-bottom: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .numeric-arrays h2 {
    color: #003366; 
    text-align: center;
    margin-bottom: 25px;
  }

  .numeric-arrays label {
    font-weight: bold;
    color: #000;
    display: block;
    margin-bottom: 8px;
  }

  .numeric-arrays input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 16px;
  }

  .numeric-arrays button {
    background-color:#003366 ; 
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
  }

  .numeric-arrays button:hover {
    background-color: #e6ac00;
  }

  .numeric-arrays p {
    font-size: 18px;
    margin-top: 20px;
    text-align: center;
    color: black;
  }
  
    </style>
</head>
<!--top per me kthy ne fillim te faqes-->
<body id="top">
<!--Navigation Bar-->
<!--perdorimi i elementeve te semantikes te html5-->
<nav class="navbar">
    <div class="logo">
        <!--perdorimi i atributeve width edhe height-->
        <a href="/">
        <img src="logo.png" width="45" height="50" alt="Luxury Homes Logo">
        </a>
        <!--perdorimi i atributit id ne linqe me top-->
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
    </ul>
    </div>
    </div>
</nav>
<!--Header me banner-->
<header class="banner">
    <div class="banner-overlay">
        <div class="banner-content">
            <h1 class="animated-text">Your Wish, Our Command!</h1>
            <p>Step into the genie’s world of luxurious living. Explore homes that redefine opulence and turn your dreams into reality.</p>
            <!-- Button styled link -->
             <!--hyperlink qe hapet ne tab te ri-->
            <a href="indexYllka.php" class="btn" target="_blank">Discover Your Dream Home</a>
        </div>
    </div>
</header>
<!-- Video and Text Section -->
<section class="video-text-section">
  <div class="audiovideo">
   <div class="video-frame">
    <!--perfshirja e fajllave video-->
    <video controls autoplay loop>
        <!--perdorimi i tagut src dhe te gjitha atributeve te tij-->
        <source src="SELL_YOUR_HOME.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
   </div>
   <div class="underneath">
    <button id="playPauseButton" class="btn">Play audio</button>
    <!--perfshirja e fajllave audio-->
    <audio id="myAudio" autoplay>
      <source src="music.m4a" type="audio/mp4">
      Your browser does not support the audio element.
      </audio>
   </div>
   </div>

    <div class="text-content">
        <h3>Why Choose Us?</h3>
        <!--perdorimi i tekstit te theksuar highlight me tagun mark-->
        <!--hyperlink per tek nje fajll qe mund te hapet ne shfletues-->
        <p >
            Our real estate agency offers personalized services to help you find your dream home quickly and easily. 
            <mark><a href="SELL_YOUR_HOME.mp4">Watch the video</a></mark> to learn more about our approach and commitment to excellence. Sign in for a more personalized experience. <br><br>
            <a href="indexKimete.php" class="btn">Sign In</a>
        </p>
    </div>
</section>


<div class="property-slideshow">
    <div class="slides-container">
        <!-- Slide 1 -->
        <div class="slide">
            <img src="https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Property 1">
            <div class="slide-caption">Modern House in Marigona</div>
        </div>
        <!-- Slide 2 -->
        <div class="slide">
            <img src="https://images.pexels.com/photos/1438832/pexels-photo-1438832.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Property 2">
            <div class="slide-caption">Luxury Villa in Prishtina</div>
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <img src="https://images.pexels.com/photos/208736/pexels-photo-208736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Property 3">
            <div class="slide-caption">House in Prishtina</div>
        </div>
        <!--Slide 4-->
        <div class="slide">
          <img src="https://images.pexels.com/photos/129494/pexels-photo-129494.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Property 4">
          <div class="slide-caption">Apartment in Prishtina</div>
        </div>
        <!--Slide 5-->
        <div class="slide">
        <img src="https://images.pexels.com/photos/277667/pexels-photo-277667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Property 5">
        <div class="slide-caption">Charming House in Peja</div>
        </div>
        <!--Slide 6-->
        <div class="slide">
        <img src="https://images.pexels.com/photos/1918291/pexels-photo-1918291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Property 3">
        <div class="slide-caption">Cozy Apartment in Peja</div>
        </div>
        <!--Slide 7-->
        <div class="slide">
        <img src="https://images.pexels.com/photos/323775/pexels-photo-323775.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Property 3">
        <div class="slide-caption">Beautiful House in Mitrovica</div>
        </div>
        
    </div>
    <!-- Navigation buttons -->
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
  </div>

  <div>
    <!--perdorimi i atributit align-->
    <!--Funksioni i tagjeve bazike ne krijimin e tabelave-->
    <!--Krijimi i tabelave-->
    <table align="center">
        <caption  style="color:#003366; font-size: 1.8rem;margin-bottom: 10px;">Real Estate Agency Service Costs</caption>
        <thead>
          <tr>
            <th>Service Type</th>
            <th>Description</th>
            <th>Cost</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Property Listing</td>
            <td>Includes online advertising and MLS listing</td>
            <td>$500 per listing</td>
          </tr>
          <tr class="highlight">
            <td>Home Staging</td>
            <td>Professional staging to showcase the property</td>
            <td>$1,000 - $3,000</td>
          </tr>
          <tr>
            <td>Photography & Videography</td>
            <td>High-quality photos and videos for marketing</td>
            <td>$300 - $800</td>
          </tr>
          <tr>
            <td>Open House Services</td>
            <td>Organizing and hosting open house events</td>
            <td>$200 per event</td>
          </tr>
          <tr class="highlight">
            <td>Legal Paperwork Assistance</td>
            <td>Help with contracts, title transfers, and closing documents</td>
            <td>$750 flat fee</td>
          </tr>
          <tr>
            <td>Market Analysis</td>
            <td>Detailed property market value report</td>
            <td>$150 per report</td>
          </tr>
          <tr>
            <td>Property Management</td>
            <td>Handling rentals, tenants, and maintenance</td>
            <td>10% of monthly rent</td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div class="specialevent">
    <h3 style="color:#003366;">Upcoming Open House</h3>
    <p >Don't miss our special event! The countdown has begun:</p>
    <p id="countdown">Event countdown will appear here...</p>
    </div>
   
  <!--perdorimi i headings dhe paragrafeve ne vend te duhur-->
    <section class="testimonial-section">
      <!--perdorimi i CSS per vendosje te tekstit me content te klasa for-content-->
        <h2 class="for-content"></h2>
        <div class="testimonials">
          <!-- Testimonial 1 -->
          <div class="testimonial">
            <p>
              Buying my dream home was seamless thanks to this agency! They handled everything professionally and quickly.
            </p>
            <div class="client">
              <!--perdorimi i atributit alt-->
              <img src="https://images.pexels.com/photos/3139611/pexels-photo-3139611.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client Photo">
              <div class="client-info">
                <h4>Dren Bujupi</h4>
                <span>Mitrovica</span>
              </div>
            </div>
          </div>

    
          <!-- Testimonial 2 -->
          <div class="testimonial">
            <p>
              Outstanding service! The team was helpful throughout the selling process, ensuring I got the best price for my property.
            </p>
            <div class="client">
              <!--zhvendosja e figures ne anen e majte dhe te djathte te tekstit-->
              <img src="https://images.pexels.com/photos/8400599/pexels-photo-8400599.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client Photo">
              <div class="client-info">
                <h4>Merita Sylejmani</h4>
                <span>Prizren</span>
              </div>
            </div>
          </div>
    
          <!-- Testimonial 3 -->
          <div class="testimonial">
            <p>
              Excellent communication and dedication. I highly recommend them for their attention to detail and customer care.
            </p>
            <div class="client">
              <img src="https://images.pexels.com/photos/28263303/pexels-photo-28263303/free-photo-of-fotografia-masculina.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client Photo">
              <div class="client-info">
                <h4>Jon Kelmendi</h4>
                <span>Gjilan</span>
              </div>
            </div>
          </div>

           <!-- Testimonial 4 -->
           <div class="testimonial">
            <p>
                From start to finish, the process was smooth and stress-free. The team went above and beyond to find the perfect property for my family.
            </p>
            <div class="client">
              <img src="https://images.pexels.com/photos/6635041/pexels-photo-6635041.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Client Photo">
              <div class="client-info">
                <h4>Ema Gashi</h4>
                <span>Prishtina</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <div class="numeric-arrays">

<h2 >Check if we offer services in your city</h2>
<form id="phpForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <label for="qyteti">Type the city:</label>
     <input type="text" name="qyteti" id="qyteti" required>
     <button type="submit">Check</button>
 </form>
 <?php
 
 $qytetet = ["Peja", "Prishtina", "Prizreni", "Gjakova", "Ferizaj", "Gjilani", "Podujeva","Mitrovica"];

 function kontrolloQytetin($qytet, $listaQyteteve) {
     if (in_array($qytet, $listaQyteteve)) {
         return " $qytet është në listën tonë të shërbimit.";
     } else {
         return " Na vjen keq, $qytet nuk është në listën tonë.";
     }
 }

 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $qytetiPerTeKontrolluar = trim($_POST["qyteti"]);
     echo "<p>" . kontrolloQytetin($qytetiPerTeKontrolluar, $qytetet) . "</p>";
 }

 //varibalat globale
$GLOBALS['propertyName'] = 'Luxury Villa';
$GLOBALS['propertyPrice'] = 500000;
$GLOBALS['propertyDescription'] = 'A beautiful luxury villa with 4 bedrooms, a swimming pool, and ocean view.';

function displayPropertyDetails() {
    global $propertyName, $propertyPrice, $propertyDescription;
    
    echo "Property Name: " . $propertyName . "<br>";
    echo "Price: $" . number_format($propertyPrice, 2) . "<br>";
    echo "Description: " . $propertyDescription . "<br>";
}

function updatePropertyPrice($newPrice) {
    global $propertyPrice;
    
    $propertyPrice = $newPrice;
    echo "The new property price is: $" . number_format($propertyPrice, 2) . "<br>";
}

displayPropertyDetails();

updatePropertyPrice(600000);

displayPropertyDetails();
?>
 </div>


<footer class="responsive-footer" >
    <div class="footer-container">
      <div class="logo-contact">
        <img src="logo.png" alt="Luxury Homes Logo" class="footer-logo">
        <!--perdorimi i tagut address-->
        <address>
          <p><i class="fas fa-map-marker-alt"></i> Rruga Gazmend Zajmi Nr.47 </p>
          <!--perdorimi i inline css-->
        <p style="padding-left: 15px;"> Prishtina 10000, Kosovo</p>
        <p><i class="fas fa-phone"></i> +383 49 790 117</p>
        <!--perdorimi i hyperlinkut per te derguar email-->
        <p><i class="fas fa-envelope"></i> <a href="mailto:viola.resyli@student.uni-pr.edu?subject=Feedback">info@luxuryhomes.com</a></p>
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
<?php
function validateEmail($email) {
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    return preg_match($pattern, $email);
}

$emailError = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["newsletter_email"]);

    if (empty($email)) {
        $emailError = "Ju lutem vendosni një email.";
    } elseif (!validateEmail($email)) {
        $emailError = "Formati i email-it nuk është i vlefshëm.";
    } else {
        $success = "Email-i u regjistrua me sukses!";
    }
}
?>
      <div class="newsletter">
        <h3 style="margin-top:5px;">SIGN UP FOR OUR NEWSLETTER</h3>
        <p>Join our community of savvy real estate enthusiasts.</p>
        <form method="POST" action="">
        <div class="newsletter-form">
            <input type="email" name="newsletter_email" placeholder="Your email address"
                   value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">
            <button type="submit"><i class="fas fa-paper-plane"></i></button>
        </div>
    </form>

    <?php if ($emailError): ?>
        <p style="color: red;"><?= $emailError ?></p>
    <?php elseif ($success): ?>
        <p style="color: green;"><?= $success ?></p>
    <?php endif; ?>

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

<!--javascript files-->
<script>
   let currentIndex = 0;
  
  function moveSlide(direction) {
      const slides = document.querySelectorAll('.slide');
      const totalSlides = slides.length;
      const slidesToShow = 3; // numri i sllajdeve qe shfaqen njekohesisht
  
      // Update indeksin ne baze te direction
      currentIndex += direction;
  
      //  nese indeksi tejkalon totalin e sllajdeve ktheu ne 0 
      //perdorimi i kushtezimeve if else
      if (currentIndex >= totalSlides - slidesToShow + 1) {
          currentIndex = 0;
      } else if (currentIndex < 0) {
          currentIndex = totalSlides - slidesToShow; 
      }
  
      
      const slidesContainer = document.querySelector('.slides-container');
      slidesContainer.style.transform = `translateX(-${currentIndex * (100 / slidesToShow)}%)`;
  }
  
  // Auto-rotate slides qdo 5 sekonda
  setInterval(() => moveSlide(1), 5000);
  
  const menuButton = document.querySelector('.menu-btn');
  const navContainer = document.querySelector('.nav-links-container');

  menuButton.addEventListener('click', () => {
  navContainer.classList.toggle('active'); //shfaq/hide linqet
});

const audio = document.getElementById('myAudio');
const playPauseButton = document.getElementById('playPauseButton');

playPauseButton.addEventListener('click', () => {
if (audio.paused) {
    audio.play(); 
    playPauseButton.textContent = 'Pause'; 
} else {
    audio.pause(); 
    playPauseButton.textContent = 'Play'; 
}
});

//perdorimi i objektit Date dhe try/catch
const eventDate = new Date("2025-01-15T00:00:00");
const countdownElement = document.getElementById("countdown");

function updateCountdown() {
  try {
    const now = new Date();
    const timeLeft = eventDate - now;

    if (timeLeft > 0) {
      const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

      countdownElement.textContent = `Time Left: ${days}d ${hours}h ${minutes}m ${seconds}s`;
    } else {
      countdownElement.textContent = "The event has started!";
    }
  } catch (error) {
    console.error("Error updating countdown:", error);
    countdownElement.textContent = "An error occurred while updating the countdown.";
  }
}

setInterval(updateCountdown, 1000);



</script>

   
</body>
</html>
