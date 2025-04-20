<!DOCTYPE html>
<html lang="en">
<?php
// Define all posts in a single array
$posts = [
    // Post 1 (Modal1)
    [
        'id' => 'modal1',
        'title' => 'How to know a house is right for you',
        'image' => 'blog1.png',
        'excerpt' => 'Tips to help you decide if a home is right for you...',
        'content' => 'posts/post1-content.html'
    ],
    
    // Post 2 (Modal2)
    [
        'id' => 'modal2',
        'title' => '5 Interior Design Secrets',
        'image' => 'blog5.webp', 
        'excerpt' => 'Think of this like a free design consultation...',
        'content' => 'posts/post2-content.html'
    ],

    // Post 3 (Modal3)
    [
        'id' => 'modal3',
        'title' => 'Prices of apartments in neighborhoods of Prishtina',
        'image' => 'blog7.jpg', 
        'excerpt' => 'Whether you’re a buyer, seller, or investor, staying informed about emerging trends is crucial...',
        'content' => 'posts/post3-content.html'
    ],

    // Post 4 (Modal4)
    [
        'id' => 'modal4',
        'title' => '7 Home Remodel Tips for a Successful Renovation',
        'image' => 'blog4.jpg', 
        'excerpt' => 'Tips on designing, renovation & remodeling of your home...',
        'content' => 'posts/post4-content.html'
    ],

    // Post 5 (Modal5)
    [
        'id' => 'modal5',
        'title' => 'The Top 2 Reasons To Look at Newly Built Homes',
        'image' => 'blog2.png', 
        'excerpt' => 'If you are considering looking at newly built homes, this article is for you...',
        'content' => 'posts/post5-content.html'
    ],

    // Post 6 (Modal6)
    [
        'id' => 'modal6',
        'title' => '5 Ways to Add Value to Your Home Before Selling',
        'image' => 'blog6.webp', 
        'excerpt' => 'If you are looking into selling your home, here are some tips that can help you...',
        'content' => 'posts/post6-content.html'
    ],

    // Post 7 (Modal7)
    [
        'id' => 'modal7',
        'title' => 'Prices of apartments in neighborhoods of Prishtina',
        'image' => 'blog31.png', 
        'excerpt' => 'If you are looking to buy an apartment in Prishtina, check this article out...',
        'content' => 'posts/post7-content.html'
    ],

    // Post 8 (Modal8)
    [
        'id' => 'modal8',
        'title' => 'Is It Better to Rent or Buy in Today’s Market?',
        'image' => 'blog8.webp', 
        'excerpt' => 'Thinking of renting or buying, read this article to get more informed...',
        'content' => 'posts/post8-content.html'
    ]

];
function includePostContent($file) {
    if (file_exists($file)) {
        return file_get_contents($file);
    }
    return '<p class="error">Post content missing! Try again later.</p>';
}

// Helper function to format dates
function formatDate($date) {
    return date('F j, Y', strtotime($date));
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
    <title>Blog</title>
    <style>
        /* General Container Styling */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 10px;
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
             margin-bottom:20px;
             margin-top:20px;
             border-radius: 10px;
             box-shadow: 0 2px 10px rgba(0,0,0,0.1);
         }
         .container-kalkulatori h2 {
             text-align: center;
             color:#003366 ;
         }
         .container-kalkulatori form div {
             margin-bottom: 15px;
             padding-right:10px;
         }
         .container-kalkulatori label, input {
             display: block;
             width: 100%;
         }
         .container-kalkulatori input[type="number"], input[type="submit"] {
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
                    <li><a href="indexYllka.html">Listings</a></li>
                    <li><a href="indexKimete.html">Contact Us</a></li>
                    <li><a href="indexRudina.html">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Tips, news and facts</h1>
        
        <!-- Articles Grid -->
        <div class="articles">
            <?php foreach ($posts as $post): ?>
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
            <?= includePostContent($post['content']) ?>
        </div>
        <span class="close-button" onclick="closeModal('<?= $post['id'] ?>')">&times;</span>
    </div>
    <?php endforeach; ?>
    <!-- #region -->

    <!-- pjesa e kalkulatorit magjik -->
    <div class="container-kalkulatori">
     <?php
 $mesatarja = "";
 $zbritjaRe = "";
 $perqindja = "";
 $kodi = "";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (isset($_POST['llogarit_mesataren'])) {
         $cmimet = [120000, 95000, 175000, 200000];
         $mesatarja = array_sum($cmimet) / count($cmimet);
     }
 
     if (isset($_POST['llogarit_zbritjen'])) {
         $cmimi = floatval($_POST['cmimi']);
         $zbritja = floatval($_POST['zbritja']);
         $zbritjaRe = $cmimi - $zbritja*0.01*$cmimi;
     }
 
     if (isset($_POST['llogarit_suksesin'])) {
         $total = intval($_POST['total_listings']);
         $shitje = intval($_POST['shitjet']);
         if ($total > 0) {
             $perqindja = round(($shitje / $total) * 100, 2);
         } else {
             $perqindja = "(0 listings)";
         }
     }
 
     if (isset($_POST['gjenero_kodin'])) {
         $id = rand(1, 9999);
         $kodi = "2025-" . str_pad($id, 4, '0', STR_PAD_LEFT);
     }
 }
 ?>
         <h2>Magic calculator</h2>
         <form method="POST">
             <!-- Butoni 1: Mesatarja -->
             <div>
                 <input type="submit" name="llogarit_mesataren" value="Llogarit Mesataren e Qmimeve" class="btn">
                 <?php if ($mesatarja): ?>
                     <div class="result">Mesatarja: €<?= number_format($mesatarja, 2) ?></div>
                 <?php endif; ?>
             </div>
 
             <!-- Butoni 2: Llogarit Zbritjen -->
             <div>
                 <label for="cmimi">Çmimi Fillestar:</label>
                 <input type="number" step="0.01" name="cmimi" >
 
                 <label for="zbritja">Zbritja në %:</label>
                 <input type="number" step="0.01" name="zbritja" >
 
                 <input type="submit" name="llogarit_zbritjen" value="Llogarit Çmimin Pas Zbritjes" class="btn">
                 <?php if ($zbritjaRe !== ""): ?>
                     <div class="result">Çmimi pas zbritjes: €<?= number_format($zbritjaRe, 2) ?></div>
                 <?php endif; ?>
             </div>
 
             <!-- Butoni 3: Përqindja e suksesit -->
             <div>
                 <label for="total_listings">Numri i Listimeve:</label>
                 <input type="number" name="total_listings" >
 
                 <label for="shitjet">Numri i Shitjeve:</label>
                 <input type="number" name="shitjet" >
 
                 <input type="submit" name="llogarit_suksesin" value="Llogarit Përqindjen e Suksesit" class="btn">
                 <?php if ($perqindja !== ""): ?>
                     <div class="result">Përqindja e suksesit: <?= $perqindja ?>%</div>
                 <?php endif; ?>
             </div>
 
             <!-- Butoni 4: Gjenero Kodin -->
             <div>
                 <input type="submit" name="gjenero_kodin" value="Gjenero Kodin për Blerjen" class="btn">
                 <?php if ($kodi): ?>
                     <div class="result">Kodi i Blerjes: <?= $kodi ?></div>
                 <?php endif; ?>
             </div>
         </form>
     </div>
		<!--footer-->
    <?php
    include './classes/footer/footer.php';
    ?>

    <script>
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = "flex";
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = "none";
        }

        // Close modal when clicking outside the content
        window.onclick = function (event) {
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
    </script>
</body>

</html>