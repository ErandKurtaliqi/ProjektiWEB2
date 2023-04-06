<!--CDNjs, SWIPER, Google Fonts, CSS clip-path marker-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title> <!--Font awesome cdn link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <!-- header section starts -->
    <section class="header">

    <a href = "home.php" class = "logo">TRAVEL</a>

    <nav class = "navbar">
        <a href = "home.php">HOME</a>
        <a href = "about.php">ABOUT</a>
        <a href = "pageage.php">PACKAGE</a>
        <a href = "book_form.php">BOOK</a>
        <a href="contact.php">CONTACT</a>
    </nav>
    <nav class = "navbar23">
    <a href = "login.php" >Login</a>
    </nav>

    <div id = "menu-btn" class = "fas fa-bars"></div>

    </section>
    <!-- header section ends -->

    <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background:url(images/womense.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="pageage.php" class="btn">Discover more</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(images/mensa.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Discover the new places</h3>
                        <a href="pageage.php" class="btn">Discover more</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(images/antarctica.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="pageage.php" class="btn">Discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->













    <!-- services section starts -->
    <section class = "services">
        <h1 class = "heading-title">Our Services</h1>
        
        <div class = "box-container">
            <div class = "box">
                <img src = "images/Adventure.jpg" alt = "">
                <h3>Adventure</h3>
            </div>

            <div class = "box">
                <img src = "images/TourGuide.jpg" alt = "">
                <h3>Tour Guide</h3>
            </div>

            <div class = "box">
                <img src = "images/Trekking.jpg" alt = "">
                <h3>Trekking</h3>
            </div>

            <div class = "box">
                <img src = "images/CampFire.jpg" alt = "">
                <h3>Camp Fire</h3>
            </div>

            <div class = "box">
                <img src = "images/OffRoad.png" alt = "">
                <h3>Off Road</h3>
            </div>

            <div class = "box">
                <img src = "images/Camping.jpg" alt = "">
                <h3>Camping</h3>
            </div>

        </div>
</section>
    <!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">
    <div class="image">
        <img src="images/aboutas.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>We offer travels in the best destinations in world. In offert are included ticket for travel, 
            hotel where is center people, hotel is ALL INCLUSIVE and your wait is passion for we. 
        </p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!-- home about section ends -->

<!-- home package section starts -->

<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/tokyo-japan.jpg" alt="">
            </div>
            <div class="content">
                <h3>Tokyo & JAPAN</h3>
                <p>See city attractions like Meiji Shrine and the Imperial Palace, or discover Tokyo neighborhoods, depending on your interests. </p>
                <a href="book_form.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/honolulu-hawaii.jpg" alt="">
            </div>
            <div class="content">
                <h3>Honolulu & HAWAII</h3>
                <p>The Honolulu Museum of Art is Hawaiis largest fine arts museum. You can also tour 
                    Shangri-La, the stunning cliffside home of heiress Doris Duke, which now houses a notable 
                    collection of Islamic Art. If you book now you win ticket for museum free. </p>
                <a href="book_form.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/berlin-germany.jpg" alt="">
            </div>
            <div class="content">
                <h3>Berlin & GERMANY</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                <a href="book_form.php" class="btn">Book now</a>
            </div>
        </div>

    </div>

    <div class="load-more"><a href="pageage.php" class="btn">Load more</a></div>
</section>

<!-- home package section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="book_form.php" class="btn">Book now</a>
    </div>
</section>


<!-- home offer section ends -->

    <!-- footer section start -->
    <section class="footer" style = "background:url(images/Footer-Background-Image.png) no-repeat">
        <div class = "box-container">
            <div class = "box">
                <h3>Quick Links</h3>
            <a href = "home.php"><i class = "fas fa-angle-right"></i>HOME</a>
            <a href = "about.php"><i class = "fas fa-angle-right"></i>ABOUT</a>
            <a href = "pageage.php"><i class = "fas fa-angle-right"></i>PACKAGE</a>
            <a href = "book_form.php"><i class = "fas fa-angle-right"></i>BOOK</a>
            <a href = "contact.php"><i class = "fas fa-angle-right"></i>CONTACT</a>
            </div>

            <div class = "box">
                <h3>Extra Links</h3>
            <a href = "#"><i class = "fas fa-angle-right"></i>Ask Questions</a>
            <a href = "about.php"><i class = "fas fa-angle-right"></i>About Us</a>
            <a href = "#"><i class = "fas fa-angle-right"></i>Privacy Policy</a>
            <a href = "#"><i class = "fas fa-angle-right"></i>Terms of Use</a>
            <a href = "pay.php"><i class = "fas fa-angle-right"></i>Link For Pay</a>
            </div> 

            <div class = "box">
                <h3>Contact Info</h3>
                <a href = "#"><i class = "fas fa-phone"></i>+383 49 889 778</a>
                <a href = "#"><i class = "fas fa-phone"></i>+383 44 889 778</a>
                <a href = "contact.php"><i class = "fas fa-envelope"></i>erand.kurtaliqi@student.uni-pr.edu</a>
                <a href = "location.php"><i class = "fas fa-map"></i>Prishtine - Kosove</a>
            </div> 

            <div class = "box">
                <h3>Follow Us</h3>
            <a href = "https://www.facebook.com/maxtraveldream"><i class = "fab fa-facebook-f"></i>FACEBOOK</a>
            <a href = "#"><i class = "fab fa-twitter"></i>TWITTER</a>
            <a href = "https://www.instagram.com/maxtraveldream/"><i class = "fab fa-instagram"></i>INSTAGRAM</a>
            <a href = "#"><i class = "fab fa-linkedin"></i>LINKEDIN</a>

            </div>
         </div>

         <div class = "credit">Created by <span>mr. web designer</span> | all rights reserved!|</div>
    </section>

    <!-- footer section ends -->









    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
<script src ="script.js"></script>
</body>
</html>