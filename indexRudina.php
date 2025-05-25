<!DOCTYPE html>
<html lang="en">
<?php
// Define all posts in a single array
$posts = [
    // Post 1 (Modal1)
    [
        'id' => 'modal3',
        'title' => 'Top 10 Real Estate Trends to Watch in 2025',
        'image' => 'blog7.jpg',
        'category' => 'trend',
        'excerpt' => 'Whether you’re a buyer, seller, or investor, staying informed about emerging trends is crucial...',
        'content' => 'posts/post3-content.html'
    ],

    // Post 2 (Modal2) 
    [
        'id' => 'modal2',
        'title' => '5 Interior Design Secrets',
        'image' => 'blog5.webp',
        'category' => 'design',
        'excerpt' => 'Think of this like a free design consultation...',
        'content' => 'posts/post2-content.html'
    ],

    // Post 3 (Modal3)
    [
        'id' => 'modal1',
        'title' => 'How to know a house is right for you',
        'image' => 'blog1.png',
        'category' => 'buying',
        'excerpt' => 'Tips to help you decide if a home is right for you...',
        'content' => 'posts/post1-content.html'
    ],

    // Post 4 (Modal4)
    [
        'id' => 'modal4',
        'title' => '7 Home Remodel Tips for a Successful Renovation',
        'image' => 'blog4.jpg',
        'category' => 'design',
        'excerpt' => 'Tips on designing, renovation & remodeling of your home...',
        'content' => 'posts/post4-content.html'
    ],

    // Post 5 (Modal5)
    [
        'id' => 'modal5',
        'title' => 'The Top 2 Reasons To Look at Newly Built Homes',
        'image' => 'blog2.png',
        'category' => 'trend',
        'excerpt' => 'If you are considering looking at newly built homes, this article is for you...',
        'content' => 'posts/post5-content.html'
    ],

    // Post 6 (Modal6)
    [
        'id' => 'modal6',
        'title' => '5 Ways to Add Value to Your Home Before Selling',
        'image' => 'blog6.webp',
        'category' => 'trend',
        'excerpt' => 'If you are looking into selling your home, here are some tips that can help you...',
        'content' => 'posts/post6-content.html'
    ],

    // Post 7 (Modal7)
    [
        'id' => 'modal7',
        'title' => 'Prices of apartments in neighborhoods of Prishtina',
        'image' => 'blog31.png',
        'category' => 'buying',
        'excerpt' => 'If you are looking to buy an apartment in Prishtina, check this article out...',
        'content' => 'posts/post7-content.html'
    ],

    // Post 8 (Modal8)
    [
        'id' => 'modal8',
        'title' => 'Is It Better to Rent or Buy in Today’s Market?',
        'image' => 'blog8.webp',
        'category' => 'trend',
        'excerpt' => 'Thinking of renting or buying, read this article to get more informed...',
        'content' => 'posts/post8-content.html'
    ]

];
function includePostContent($file)
{
    if (file_exists($file)) {
        return file_get_contents($file);
    }
    return '<p class="error">Post content missing! Try again later.</p>';
}

// Perdorimi i var dump 
//var_dump($posts);

//Krjimi edhe qasja e variablave
$currentYear = date('Y');
$siteName = "LUXury Homes Blog";

//functions
function estimateReadingTime($content)
{
    $wordCount = str_word_count(strip_tags($content));
    return '<i>This article is a<i/> ' . ceil($wordCount / 200) . ' <i>min read<i/>'; // 200 words/minute
}


define('SITE_ADMIN_EMAIL', 'info@luxuryhomes.com');
define('POSTS_PER_PAGE', 6);

// Get current page from URL (default to 1)
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Slice posts array for pagination
$paginatedPosts = array_slice(
    $posts,
    ($currentPage - 1) * POSTS_PER_PAGE,
    POSTS_PER_PAGE
);


function getRelatedPosts($currentPostId, $currentPostCategory, $allPosts)
{
    return array_filter($allPosts, function ($post) use ($currentPostId, $currentPostCategory) {
        return $post['category'] === $currentPostCategory && $post['id'] != $currentPostId;
    });
}

session_start();

// Initialize views array if not exists
if (!isset($_SESSION['post_views'])) {
    $_SESSION['post_views'] = [];
}

// Function to increment views
function incrementViews($postId)
{
    $_SESSION['post_views'][$postId] = ($_SESSION['post_views'][$postId] ?? 0) + 1;
}


function getTrendingPosts($posts, $minViews = 5)
{
    // Get views from session (or default to 0)
    $viewCounts = $_SESSION['post_views'] ?? [];

    // Add view count to each post
    foreach ($posts as &$post) {
        $post['views'] = $viewCounts[$post['id']] ?? 0;
    }

    // Filter and sort
    $trending = array_filter($posts, fn($post) => $post['views'] >= $minViews);
    usort($trending, fn($a, $b) => $b['views'] - $a['views']);

    return array_slice($trending, 0, 2); // Top 2
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FAVICON-->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="stylesheet" href="styleRudina.css">
    <!--font awesome for icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title><?= $siteName ?></title>
    <style>
        /* General Container Styling */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 10px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-top: 20px;
        }

        .pagination a {
            padding: 5px 10px;
            border: 1px solid #ddd;
        }

        .pagination a.active {
            background: #000;
            color: white;
        }

        /* Articles Grid */
        .articles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        /* Article Cards */
        .article {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .article:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .article img {
            width: 100%;
            height: auto;
            display: block;
        }

        .article h2 {
            font-size: 1.5rem;
            margin: 15px;
        }

        .article p {
            font-size: 1rem;
            margin: 15px;
            color: #555;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 800px;
            max-height: 90%;
            overflow-y: auto;
        }

        .modal-content h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .modal-content img {
            max-width: 100%;
            height: auto;
            margin: 15px 0;
        }

        .modal-content ul,
        .modal-content ol {
            margin-left: 20px;
        }

        .close-button {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.5rem;
            color: #fff;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.7);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ol ul li {
            list-style-type: square;
        }

        .post-ul li::before {
            content: "★";
            /* Adds a star before each list item */
            margin-right: 8px;
        }

        .post-ul li {
            list-style-type: none;
        }

        .list-item {
            display: flex;
            align-items: flex-start;
            /* Align the image and text at the top */
            gap: 20px;
            /* Add spacing between the image and text */
        }

        .list-item img {
            max-width: 300px;
            /* Ensure the image width is restricted */
            border-radius: 8px;
            /* Optional styling for rounded corners */
        }

        .list-item p {
            flex: 1;
            /* Allow the text to take up the remaining space */
            margin: 0;
            margin-top: 20%;
            /* Remove extra margin for better alignment */
        }

        @media (max-width: 600px) {
            .list-item {
                flex-direction: column;
                /* Stack image and text vertically */
                align-items: flex-start;
                /* Align text to the left */
            }
        }

        /**per kalkulatorin magjik */
        .container-kalkulatori {
            background: white;
            padding: 20px;
            width: 400px;
            margin: auto;
            margin-bottom: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container-kalkulatori h2 {
            text-align: center;
            color: #003366;
        }

        .container-kalkulatori form div {
            margin-bottom: 15px;
            padding-right: 10px;
        }

        .container-kalkulatori label,
        input {
            display: block;
            width: 100%;
        }

        .container-kalkulatori input[type="number"],
        input[type="submit"] {
            padding: 8px;
            margin-top: 5px;
        }

        .container-kalkulatori .btn {
            background-color: #003366;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .container-kalkulatori .result {
            margin-top: 20px;
            background-color: #e9f5ff;
            padding: 10px;
            border-left: 5px solid #003366;
        }

        /**css per address cleaner  */
        .container-address-cleaner {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container-address-cleaner .form-group {
            margin-bottom: 15px;
        }

        .container-address-cleaner label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .container-address-cleaner input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .container-address-cleaner button {
            padding: 10px 15px;
            background-color: #003366;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container-address-cleaner button:hover {
            background-color: #e6ac00;
        }

        .container-address-cleaner.result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e7f7e7;
            border: 1px solid #d6f0d6;
            border-radius: 4px;
        }

        .related-posts {
            margin-top: 40px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .related-article {
            cursor: pointer;
            transition: transform 0.3s;
        }

        .related-article:hover {
            transform: translateY(-5px);
        }

        .related-article img {
            width: 100%;
            border-radius: 8px;
            height: 120px;
            object-fit: cover;
        }

        .related-article h4 {
            font-size: 0.9rem;
            margin-top: 8px;
        }

        .view-count {
            display: block;
            text-align: right;
            color: #666;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }

        /* Trending section */
        .trending-section {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .trending-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 15px;
        }

        .trending-article {
            cursor: pointer;
            transition: transform 0.3s;
        }

        .trending-article:hover {
            transform: translateY(-5px);
        }

        .trending-article img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 8px;
        }

        .trending-article h3 {
            font-size: 1.1rem;
            margin: 8px 0 4px;
        }

        .trending-article small {
            color: #666;
            font-size: 0.8rem;
        }

        .weather-box {
            max-width: 350px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 12px;
            background-color: #f4f4f4;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
            text-align: center;
        }

        .weather-box input {
            width: 80%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .weather-box button {
            background-color: #0058a3;
            color: white;
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .weather-box button:hover {
            background-color: #003d7a;
        }

        #weatherResult {
            margin-top: 15px;
            font-size: 16px;
        }

        #weatherResult img {
            margin-top: 10px;
            width: 64px;
            height: 64px;
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
        </div>
    </nav>

    <div class="pagination">
        <?php
        $totalPages = ceil(count($posts) / POSTS_PER_PAGE);
        for ($i = 1; $i <= $totalPages; $i++):
        ?>
            <a href="?page=<?= $i ?>"
                class="<?= $i === $currentPage ? 'active' : '' ?>">
                <?= $i ?>
            </a>
        <?php endfor; ?>
    </div>

    <div class="container">
        <h1>Tips, news and facts</h1>
        <div class="trending-section">
            <h2>🔥 Trending Now</h2>
            <div class="trending-grid">
                <?php foreach (getTrendingPosts($posts) as $post): ?>
                    <div class="trending-article" onclick="openModal('<?= $post['id'] ?>')">
                        <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
                        <h3><?= $post['title'] ?></h3>
                        <small><?= $post['views'] ?> views</small>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>



        <!-- Articles Grid -->
        <div class="articles">
            <?php foreach ($paginatedPosts as $post): ?>
                <article class="article" onclick="openModal('<?= $post['id'] ?>')">
                    <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
                    <h2><?= $post['title'] ?></h2>
                    <p><?= $post['excerpt'] ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Modals -->
    <?php foreach ($posts as $post): ?>
        <div id="<?= $post['id'] ?>" class="modal">
            <div class="modal-content">
                <!-- Reading time permes funksionit estimateReadingTime -->
                <p class="reading-time">
                    <?= estimateReadingTime(includePostContent($post['content'])) ?>
                </p>
                <small class="view-count">
                    Views: <?= $_SESSION['post_views'][$post['id']] ?? 0 ?>
                </small>
                <?= includePostContent($post['content']) ?>
                <?php
                $isAdmin = true;
                ?>

                <?php // if statement
                if ($isAdmin): ?>
                    <div class="admin-actions">
                        <button onclick="editPost('<?= $post['id'] ?>')">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                    </div>
                <?php endif; ?>
                &copy; <?= $currentYear ?> <!--qasje (acessing) e $currentYear -->
                <div class="related-posts">
                    <h3>You Might Also Like</h3>
                    <div class="related-grid">
                        <?php
                        $relatedPosts = getRelatedPosts($post['id'], $post['category'], $posts);
                        foreach ($relatedPosts as $related):
                        ?>
                            <div class="related-article" onclick="openModal('<?= $related['id'] ?>')">
                                <img src="<?= $related['image'] ?>" alt="<?= $related['title'] ?>">
                                <h4><?= $related['title'] ?></h4>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <span class="close-button" onclick="closeModal('<?= $post['id'] ?>')">&times;</span>
        </div>
    <?php endforeach; ?>
    <!-- #region -->

    <!-- Check Weather part -->
    <section class="weather-box">
        <h2>Check Weather</h2>
        <input type="text" id="cityInput" placeholder="Enter City..." />
        <button onclick="getWeather()">Show Weather</button>
        <div id="weatherResult"></div>
    </section>


    <!--pjesa e kalkulatorit magjik-->
    <div class="container-kalkulatori">
        <h2>Magic Calculator</h2>

        <div>
            <button class="btn" onclick="calculate('average')">Llogarit Mesataren e Qmimeve</button>
            <div id="avgResult" class="result"></div>
        </div>

        <div>
            <h4>Llogarit Zbritjen</h4>
            <input type="number" id="cmimi" placeholder="Çmimi Fillestar">
            <input type="number" id="zbritja" placeholder="Zbritja në %">
            <button class="btn" onclick="calculate('discount')">Llogarit Çmimin Pas Zbritjes</button>
            <div id="discountResult" class="result"></div>
        </div>

        <div>
            <h4>Përqindja e suksesit</h4>
            <input type="number" id="total" placeholder="Numri i Listimeve">
            <input type="number" id="sold" placeholder="Numri i Shitjeve">
            <button class="btn" onclick="calculate('success')">Llogarit Përqindjen e Suksesit</button>
            <div id="successResult" class="result"></div>
        </div>

        <div>
            <button class="btn" onclick="calculate('code')">Gjenero Kodin për Blerjen</button>
            <div id="codeResult" class="result"></div>
        </div>
    </div>
    <!--pjesa e address cleaner-->

    <div class="container-address-cleaner">
        <h2>Address Cleaner</h2>
        <form id="addressForm" method="POST">
            <div class="form-group">
                <label for="address">Type address:</label>
                <input type="text" id="address" name="address" placeholder="Shembull: Rruga XYZ!!, Tirana.#123">
            </div>
            <button type="submit">Clean address</button>
            <div id="result"></div>
        </form>
    </div>
    <!--footer-->
    <?php
    include './classes/footer/footer.php';
    ?>

    <script>
        function openModal(modalId) {

            // Close any open modals first
            document.querySelectorAll('.modal').forEach(modal => {
                modal.style.display = 'none';
            });
            // Send view count to PHP
            fetch(`update-views.php?post_id=${modalId}`)
                .then(() => {
                    document.getElementById(modalId).style.display = "flex";
                });
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = "none";
        }

        // Close modal when clicking outside the content
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        };

        //javascript per navbar
        const menuButton = document.querySelector('.menu-btn');
        const navContainer = document.querySelector('.nav-links-container');

        menuButton.addEventListener('click', () => {
            navContainer.classList.toggle('active'); // Show/hide the nav links
        });

        //per kalkulator
        function calculate(type) {
            let data = {
                action: type
            };

            if (type === "discount") {
                data.cmimi = document.getElementById("cmimi").value;
                data.zbritja = document.getElementById("zbritja").value;
            }

            if (type === "success") {
                data.total = document.getElementById("total").value;
                data.shitjet = document.getElementById("sold").value;
            }

            fetch("calculator.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(data)
                })
                .then(res => res.json())
                .then(result => {
                    if (type === "average") {
                        document.getElementById("avgResult").textContent = result.message;
                    } else if (type === "discount") {
                        document.getElementById("discountResult").textContent = result.message;
                    } else if (type === "success") {
                        document.getElementById("successResult").textContent = result.message;
                    } else if (type === "code") {
                        document.getElementById("codeResult").textContent = result.message;
                    }
                });
        }
        //address cleaner
        document.getElementById('addressForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('clean_address.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('result').innerHTML = data;
                })
                .catch(error => {
                    document.getElementById('result').innerHTML = "<div style='color:red;'>Gabim gjatë dërgimit.</div>";
                    console.error('Error:', error);
                });
        });

        // Weather js

        function getWeather() {
            const city = document.getElementById("cityInput").value;

            fetch("weatherApi.php?city=" + encodeURIComponent(city))
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        document.getElementById("weatherResult").innerText = "Gabim: " + data.error;
                    } else {
                        document.getElementById("weatherResult").innerHTML =
                            `<b>Temperature:</b> ${data.temperature}°C<br>
                     <b>Description:</b> ${data.description}<br>
                     <img src="${data.icon}" alt="icon moti">`;
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    document.getElementById("weatherResult").innerText = "Error with weather forecasting. Try again later!";
                });
        }
    </script>
</body>

</html>