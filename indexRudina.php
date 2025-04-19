<!DOCTYPE html>
<html lang="en">

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

        <div class="articles">
            <!--POST 1-->
            <article class="article" onclick="openModal('modal1')">
                <img src="blog1.png" alt="family picking keys of new house">
                <h2>How to know a house is right for you: Picking your new home</h2>
                <p>In this post we included some tips to help you decide if a home is the right one for you to buy...
                </p>
            </article>
            <!-- Full Article Modal -->
            <div id="modal1" class="modal">
                <article class="modal-content">
                    <h2>How to know a house is right for you: Picking your new home</h2>
                    <p>Buying a home is more than a big financial commitment – it’s also emotional. If you don’t love or
                        at least like your home, the time and money you put into buying it may not feel worth it. It’s
                        also not always easy to know if a home is right for you. Sometimes, you’ll know the moment you
                        see it, but it often takes time and careful consideration to make a good decision.</p>
                    <h3><i>Most important points</i></h3>
                    <ul class="post-ul">
                        <li>Buying a home is a big deal, so you want to ensure you buy a home you’re happy to live in.
                        </li>
                        <li>Make a list of your wants, needs and must-haves, and make sure you know how much you can
                            afford before you start shopping.</li>
                        <li>Take your time to consider each property carefully, but also be ready to act quickly to
                            avoid losing out to another offer.</li>
                    </ul>
                    <h1>Choose a home that is right for you in 6 steps</h1>
                    <ol>
                        <li>
                            Affording the house
                            <ul>
                                <li>Following the 28/36 rule, which says your mortgage should take up no more than 28%
                                    of your gross monthly income and your total monthly debt payments – mortgage payment
                                    included – should total no more than 36% of your gross monthly income.</li>
                                <li>Limiting the amount you borrow for a mortgage to somewhere between two and three
                                    times your annual income.</li>
                            </ul>
                        </li>
                        <li>
                            Make A List Of Your Wants, Needs And Must-Haves
                            <ul>
                                <li>Must-haves are absolutely essential. Your agent shouldn’t even show you homes that
                                    don’t check these boxes. Examples include a specific number of bedrooms or a
                                    neighborhood with good schools and that’s close to work.</li>
                                <li>Needs are important, but you may be willing to compromise on one or two for an
                                    affordable property.</li>
                                <li>Wants are, of course, wants. You’d like to find a home with these features, but
                                    you’re willing to accept that you likely won’t get all of them. For example, having
                                    a pool might be nice, but you’re not going to pass on a home without one.</li>
                            </ul>
                        </li>
                        <li>
                            Narrow Down Where You Want To Live
                            <ul>
                                <li>Deciding where you want to live is important because a good location will help your
                                    home’s value grow over time, while even a great home might not appreciate as much in
                                    a less desirable area.</li>
                                <li>A good location can give you more than a higher likelihood that the home’s value
                                    will appreciate; it can mean a tolerable commute, a good school district, and easy
                                    access to restaurants, entertainment and shopping. </li>
                                <li>Finding the right location for your needs will likely make you much happier in the
                                    long run.</li>
                            </ul>
                        </li>
                        <li>
                            Work With A Real Estate Agent
                            <ul>
                                <li>A skilled real estate agent will get to know you and what you want in a home.
                                    They’ll then work to show you properties that fit the criteria you set.</li>
                            </ul>
                        </li>

                        <li>
                            Look For Potential Problems With The House
                            <ul>
                                <li>Research the area. Is the pond behind the house prone to flooding? Is it a safe
                                    area? How far away would you be from the nearest hospital? Go online and figure out
                                    the vital stuff like the area’s safety rating, as well as the fun things like nearby
                                    restaurants and the location of the closest gym.</li>
                                <li>Look at the plumbing. Look under sinks and behind toilets for signs of water damage
                                    or leaks. Be on the lookout for telltale discoloration of ceilings and walls as
                                    well. Check the basement for a mildew smell. </li>
                                <li>Test everything. Once you’ve determined that the house is a real contender, use your
                                    final walk-through to make sure everything works. Flip on all the light switches and
                                    flush the toilets. Turn on the shower. Turn on the tap and taste the water.</li>
                            </ul>
                        </li>
                        <li>
                            Red Flags To Watch For
                            <ul>
                                <li>Problems with flooring or tiling, or shoddy work. Damaged floors and tiles can
                                    indicate a lack of important maintenance. </li>
                                <li>Foundation damage. Small cracks in a home’s foundation, especially if the home is
                                    old, may be nothing to worry about, but large gaps and cracking are signs of major
                                    problems requiring expensive repairs. </li>
                                <li>Poor ventilation. Lack of proper ventilation also increases the risk of mold.</li>
                                <li>Window damage. Damaged windows or windows that don’t look properly installed could
                                    be a sign of poor remodeling work or an early indicator of problems with the
                                    foundation.</li>
                            </ul>
                        </li>

                    </ol>
                </article>
                <span class="close-button" onclick="closeModal('modal1')">&times;</span>
            </div>
            <!--POST 2-->
            <div class="article" onclick="openModal('modal2')">
                <img src="blog5.webp" alt="">
                <h2>These 5 Interior Design Secrets Will Change the Way You Decorate</h2>
                <p>Think of this like a free design consultation...</p>
            </div>
            <!-- Full Article Modal -->
            <div id="modal2" class="modal">
                <div class="modal-content" >
                    <h2>These 5 Interior Design Secrets Will Change the Way You Decorate</h2>
                    <p>Every home decor enthusiast can benefit from having a pro in their corner, offering guidance.</p>
                    <ol>
                        <li>
                            <h4>Make It Inviting</h4>

                            <div class="list-item">
                                <img src="blog51.avif" alt="">
                                <p>A home gym is still a gym, and if the space is cold, dingy, and blah, no amount of
                                    convenience will get you to use it. However, designer Tanya Ryno has a fix for that:
                                    “If
                                    it’s more inviting, you’ll use it.”</p>
                            </div>
                        </li>

                        <li>
                            <h4>Ensure There’s Enough Seating</h4>

                            <div class="list-item">
                                <img src="blog55.avif" alt="">
                                <p>If your family is an entertaining bunch, then you need to make sure that your home
                                    can
                                    comfortably accommodate the number of guests you’d like to bring in. A good rule of
                                    thumb,
                                    and a way to make sure you don’t over-invite, is matching your living room and
                                    dining
                                    room
                                    seating options, </p>
                            </div>
                        </li>

                        <li>
                            <h4>Blend In Rich Tones</h4>

                            <div class="list-item">
                                <img src="blog54.avif" alt="">
                                <p>When decorating in a mainly neutral color palette, making sure the space doesn’t feel
                                    one-dimensional is key. This interior design secret involves adding rich hues and
                                    textures
                                    as accents throughout.</p>
                            </div>
                        </li>

                        <li>
                            <h4>Combine Textures and Layering</h4>

                            <div class="list-item">
                                <img src="blog53.avif" alt="" style="border-radius: 8px;">
                                <p>“When things are really tonal, texture and layering are a must,” designer Michael
                                    Ellison
                                    says of this Nantucket home.</p>

                            </div>
                        </li>
                        <li>
                            <h4>Combine Traditional and Modern</h4>

                            <div class="list-item">
                                <img src="blog52.avif" alt="" style="border-radius: 8px;">
                                <p>In this Los Angeles home, designer Jeremiah Brent explains, “The goal was to find the
                                    balance between the pedigree of traditional design and the playfulness of modern
                                    design.”</p>
                            </div>
                        </li>
                    </ol>
                </div>
                <span class="close-button" onclick="closeModal('modal2')">&times;</span>
            </div>

            <!--POST 3-->
            <div class="article" onclick="openModal('modal3')">
                <img src="blog31.png" alt="apartment complex being build">
                <h2>Prices of apartments in neighborhoods of Prishtina</h2>
                <p>If you are looking to buy an apartment in Prishtina, check this article out...</p>
            </div>
            <!-- Full Article Modal -->
            <div id="modal3" class="modal">
                <div class="modal-content">
                    <h2>Prices of apartments in neighborhoods of Prishtina</h2>
                    <h4>Prices of apartments for m<sup>2</sup></h4>
                    <img src="blog3.png" alt="apartment complex being build">
                </div>
                <span class="close-button" onclick="closeModal('modal3')">&times;</span>
            </div>
            <!--POST 4-->
            <div class="article" onclick="openModal('modal4')">
                <img src="blog4.jpg" alt="image showing old and renovated home">
                <h2>7 Home Remodel Tips for a Successful Renovation</h2>
                <p>Tips on designing, renovation & remodeling of your home...</p>
            </div>
            <!-- Full Article Modal -->
            <div id="modal4" class="modal">
                <div class="modal-content">
                    <h2>7 Home Remodel Tips for a Successful Renovation</h2>
                    <p>If you’ve been hoping to level up your living space, you might be wondering how to get started
                        and ensure the process goes smoothly. With benefits that include improved functionality, better
                        aesthetics, and increased enjoyment of the home, it comes as no surprise that many homeowners
                        are choosing to tackle a renovation.</p>
                    <img src="blog41.webp" style="border-radius: 8px;" alt="image showing old and renovated home">
                    <ol>
                        <li>
                            <h4>Define your goals for the project</h4>
                            <p>Plan out the layout of the room, the storage spaces you need, and the general look you
                                want
                                to see. Choose what upgrades you desire and note anything you do not want to be changed.
                                Pick out materials that will complement the room and design. Measure the room to be sure
                                all
                                furniture and appliances you pick out will fit in the space.</p>
                        </li>
                        <li>
                            <h4>Make a budget ahead of time</h4>

                            <p>Once you have an estimated budget in mind, commit to sticking to it. Once your
                                renovations
                                begin, it can be easy to get talked into buying more expensive appliances or materials.
                                Your
                                budget will guide you on what you can and cannot afford throughout your remodel.</p>
                        </li>
                        <li>
                            <h4>Prepare your home for the remodel</h4>
                            <p>One of the most important remodeling tips is to ensure that your home is clear of clutter
                                and
                                ready for the renovation project to begin. Contractors will not be able to work
                                efficiently
                                in a room that is dirty or full of personal belongings. In the weeks leading up to your
                                remodel, pack up each space and store everything in a separate area or storage unit.</p>
                        </li>
                        <li>
                            <h4>Hire an experienced contractor</h4>

                            <p>Try to hire contractors with certifications and experience completing projects like
                                yours. If
                                possible, check out their “before and after” pictures of past projects. You will need to
                                be
                                in touch with your contractor throughout the entire remodel, so be sure to find someone
                                who
                                is easy to talk to and understands your vision for the project.</p>
                        </li>
                        <li>
                            <h4>Stay in touch with your contractor throughout the process</h4>

                            <p>By checking in consistently, you can ensure everything is going to plan while also
                                staying up
                                to date, on time, and hopefully under budget. Being present throughout your remodel will
                                allow your contractor to ask any clarifying questions. </p>
                        </li>
                        <li>
                            <h4>Plan for the unexpected</h4>

                            <p>When remodeling a home, sudden setbacks can pop up all the time. Flexibility and
                                preparation
                                for unexpected delays and expenses can keep your project on track. Adding extra time to
                                your
                                schedule and money to your budget can help you be prepared for whatever obstacles might
                                arise and keep stress out of your renovation.</p>
                        </li>
                        <li>
                            <h4>Team up with a real estate agent</h4>

                            <p>If you are thinking about remodeling and do not know where to start, contact one of our
                                experienced <a href="indexKimete.html">real estate agents</a> for guidance and advice.
                            </p>
                        </li>
                    </ol>
                </div>
                <span class="close-button" onclick="closeModal('modal4')">&times;</span>
            </div>
            <!--POST 5-->
            <article class="article" onclick="openModal('modal5')">
                <img src="blog2.png" alt="family in newly built house">
                <h2>The Top 2 Reasons To Look at Newly Built Homes</h2>
                <p>If you are considering looking at newly built homes, this article is for you...</p>
            </article>
            <!-- Full Article Modal -->
            <div id="modal5" class="modal">
                <article class="modal-content">
                    <h2>The Top 2 Reasons To Look at Newly Built Homes</h2>
                    <p>Here’s why a new build is worth considering – and how an agent can help you find one that meets
                        your needs and your budget.</p>
                    <img src="blog2.png" alt="family in newly built house">
                    <ol>
                        <li>
                            <h4>More Newly Built Homes Are Available Right Now</h4>
                            <p>Right now, the number of existing homes for sale is still low. And, if you’re struggling
                                to
                                find something you like because there aren’t that many existing homes for sale, opening
                                up
                                your search to include brand-new homes could really expand your options. </p>
                            <h3 style="color: blue;">Even though existing home sales have been stuck at low levels,
                                newly
                                constructed home sales look to mark one of its best annual performance in 15 years . . .
                                The
                                new home inventory has been consistently rising with homebuilders getting active and
                                making
                                up around 1/3 of total inventory.</h3>
                        </li>
                        <li>
                            <h4>Newly Built Homes Are Becoming Less Expensive</h4>
                            <p>Still skeptical if a new build is right for you or if they’re even in your budget? The
                                average cost of newly built homes has actually come down from a year ago.</p>
                            <h3><b>Builders are increasingly bringing smaller, more affordable homes to the market, so
                                    buyers may find more newly-built homes that fit their budget.</b></h3>
                        </li>
                    </ol>
                    <h4>Bottom line</h4>
                    <p>Depending on your needs and budget, a new build might be the opportunity you’ve been waiting for
                        to bring your homebuying vision to life. If you’re interested in a brand-new home, connect with
                        an agent so you can check out what builders in your area are up to.</p>
                </article>
                <span class="close-button" onclick="closeModal('modal5')">&times;</span>
            </div>



            <!--POST 6-->
            <div class="article" onclick="openModal('modal6')">
                <img src="blog6.webp" alt="image showing home on sale">
                <h2>5 Ways to Add Value to Your Home Before Selling</h2>
                <p>If you are looking into selling your home, here are some tips that can help you...</p>
            </div>
            <!-- Full Article Modal -->
            <div id="modal6" class="modal">
                <div class="modal-content">
                    <h2>5 Ways to Add Value to Your Home Before Selling</h2>
                    <p>Selling your home can be a big undertaking, but making a few strategic improvements can
                        significantly boost its value. Here are five ways to add value to your home before putting it on
                        the market:</p>
                    <img src="blog61.jpg" alt="agreement on selling house" style="border-radius: 8px;">
                    <ol>
                        <li>
                            <h4>Enhance Curb Appeal</h4>

                            <p>First impressions matter. Invest in landscaping, repaint your front door, and add
                                lighting to
                                create a welcoming exterior. A neat, attractive yard can instantly boost your home’s
                                appeal.
                            </p>
                        </li>
                        <li>
                            <h4>Update the Kitchen</h4>
                            <p>The kitchen is often considered the heart of the home. Simple upgrades like replacing
                                outdated appliances, installing new countertops, or painting cabinets can make a big
                                difference.
                        </li>
                        <li>
                            <h4>Refresh Bathrooms</h4>

                            <p>Modernizing bathrooms is another high-ROI project. Consider updating fixtures, adding a
                                new
                                vanity, or re-grouting tiles to give the space a fresh look.</p>
                        </li>
                        <li>
                            <h4>Paint and Declutter</h4>

                            <p>A fresh coat of paint can do wonders for your home’s interior. Stick to neutral colors
                                that
                                appeal to a wide range of buyers. Additionally, decluttering and staging your home can
                                help
                                buyers envision themselves living there.</p>
                        </li>
                        <li>
                            <h4>Invest in Energy Efficiency</h4>

                            <p>Energy-efficient upgrades like new windows, insulation, or a smart thermostat can attract
                                eco-conscious buyers and reduce utility costs, making your home more appealing.</p>
                        </li>
                    </ol>
                    <p> These improvements don’t have to break the bank, but they can significantly increase your home’s
                        marketability and selling price. Work with a real estate professional to identify the best
                        upgrades for your specific market.</p>
                    <p> If you are thinking about selling your house and do not know where to start, contact one of our
                        experienced <a href="indexKimete.html">real estate agents</a> for guidance and advice. </p>
                </div>
                <span class="close-button" onclick="closeModal('modal6')">&times;</span>
            </div>

            <!--POST 7-->
            <div class="article" onclick="openModal('modal7')">
                <img src="blog7.jpg" alt="real estate trends and predictions for 2025">
                <h2>Top 10 Real Estate Trends to Watch in 2025</h2>
                <p>Whether you’re a buyer, seller, or investor, staying informed about emerging trends is crucial...</p>
            </div>
            <!-- Full Article Modal -->
            <div id="modal7" class="modal">
                <div class="modal-content">
                    <h2>Top 10 Real Estate Trends to Watch in 2025</h2>
                    <p>The real estate market is constantly evolving, and 2025 is shaping up to be no exception. Here
                        are the top 10 real estate trends to watch in 2025:</p>
                    <ol>
                        <li>
                            <h4>Increased Demand for Smart Homes</h4>

                            <div class="list-item">
                                <img src="blog71.webp" alt="">
                                <p>Buyers are increasingly looking for homes equipped with smart features like automated
                                    lighting, energy-efficient thermostats, and advanced security systems.</p>
                            </div>
                        </li>
                        <li>
                            <h4>Sustainable Living on the Rise</h4>

                            <div class="list-item">
                                <img src="blog72.jpg" alt="">
                                <p>Features like solar panels, rainwater harvesting systems, and energy-efficient
                                    designs
                                    are becoming must-haves, driven by environmental awareness and cost savings.</p>
                            </div>
                        </li>
                        <li>
                            <h4>Remote Work Driving Suburban Growth</h4>

                            <div class="list-item">
                                <img src="blog73.jpg" alt="">
                                <p>The remote work trend is here to stay, and with it comes a surge in demand for homes
                                    in
                                    suburban and rural areas. Buyers are prioritizing properties with home offices and
                                    outdoor space.</p>
                            </div>
                        </li>
                        <li>
                            <h4>Urban Revitalization Projects</h4>

                            <div class="list-item">
                                <img src="blog74.jpg" alt="">
                                <p>Cities are investing in revitalizing older neighborhoods, making them attractive
                                    options
                                    for buyers looking for affordable homes with potential appreciation.</p>
                            </div>
                        </li>
                        <li>
                            <h4>Booming Short-Term Rentals</h4>
                            <div class="list-item">
                                <img src="blog75.webp" alt="">
                                <p>As travel rebounds, short-term rental properties continue to be a lucrative
                                    investment. Vacation hotspots are seeing increased interest from investors.</p>
                            </div>
                        </li>
                        <li>
                            <h4>Rising Popularity of Co-Living Spaces</h4>
                            <div class="list-item">
                                <img src="blog76.jpg" alt="">
                                <p>In urban areas, co-living arrangements are gaining traction, particularly among
                                    younger buyers and renters. These spaces offer affordability and a sense of
                                    community.</p>
                            </div>
                        </li>
                    </ol>
                    <p>By staying ahead of these trends, you can make informed decisions and capitalize on opportunities
                        in the real estate market.
                    <p>If you are thinking about investing, selling or buying in 2025 and do not know where to start,
                        contact one of our
                        experienced <a href="indexKimete.html">real estate agents</a> for guidance and advice.</p>
                </div>
                <span class="close-button" onclick="closeModal('modal7')">&times;</span>
            </div>

            <!---POST 8-->
            <div class="article" onclick="openModal('modal8')">
                <img src="blog8.webp" alt="">
                <h2>Is It Better to Rent or Buy in Today’s Market?</h2>
                <p>Thinking of renting or buying, read this article to get more informed...</p>
            </div>
            <!-- Full Article Modal -->
            <div id="modal8" class="modal">
                <div class="modal-content">
                    <h2>Is It Better to Rent or Buy in Today’s Market?</h2>
                    <p>Deciding whether to rent or buy a home is one of the most significant financial decisions you’ll
                        make. Each option has its pros and cons, and the right choice depends on your personal
                        circumstances and market conditions. Here’s a breakdown to help you decide:</p>
                    <ol>
                        <li>
                            <h4>Advantages of Renting</h4>
                            <img src="blog81.jpg" alt="" style="border-radius: 8px;">

                            <ul>
                                <li><b>Flexibility:</b> Renting offers the freedom to move without the long-term
                                    commitment of owning a home.</li>
                                <li><b>Lower Upfront Costs:</b> Renting typically requires a security deposit and first
                                    month’s rent, making it more affordable in the short term.</li>
                                <li><b>Minimal Maintenance:</b> Landlords are usually responsible for maintenance and
                                    repairs, saving renters both time and money.</li>
                            </ul>
                        </li>
                        <li>
                            <h4>Advantages of Buying</h4>
                            <img src="blog82.webp" alt="" style="border-radius: 8px;">
                            <ul>
                                <li><b>Building Equity:</b> Homeownership allows you to build equity over time, which
                                    can be a valuable financial asset.</li>
                                <li><b>Tax Benefits:</b> Homeowners may be eligible for tax deductions on mortgage
                                    interest and property taxes.</li>
                                <li><b>Stability:</b> Owning a home provides long-term stability, especially for
                                    families or individuals planning to stay in one place.</li>
                            </ul>
                        </li>
                    </ol>
                    <p>Where you are looking to rent or buy any property and do not know where to start, contact one of
                        our
                        experienced <a href="indexKimete.html">real estate agents</a> for guidance and advice. </p>
                </div>
                <span class="close-button" onclick="closeModal('modal8')">&times;</span>
            </div>

        </div>
    </div>


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
                <!--pjesa e address cleaner-->
                
<div class="container-address-cleaner">
    <h2>Address Cleaner</h2>
    <form method="POST">
        <div class="form-group">
            <label for="address">Type address:</label>
            <input type="text" id="address" name="address" placeholder="Shembull: Rruga XYZ!!, Tirana.#123">
        </div>
        <button type="submit">Clean address</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        function cleanAddress($address) {
            
            $pattern = '/[^a-zA-Z0-9\s,.-]/';
            $cleanedAddress = preg_replace($pattern, '', $address);
            return $cleanedAddress;
        }

       
        $address = $_POST['address'];
        if (!empty($address)) {
           
            $cleanedAddress = cleanAddress($address);
            echo "<div class='result'><strong>Adresa e pastruar:</strong> $cleanedAddress</div>";
        } else {
            echo "<div class='result' style='background-color: #f8d7da; border-color: #f5c6cb;'><strong>Ju lutem, futni një adresë.</strong></div>";
        }
    }
    ?>
</div>
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