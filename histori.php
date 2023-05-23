<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My History</title> <!--Font awesome cdn link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel = "stylesheet" href = "style.css">
	<link rel="stylesheet" href="bokk.css">
    <style>
        .error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
    </style>
</head>
<body>
    <!-- header section starts -->
    <section class="header">

    <a href = "home.php" class = "logo">TRAVEL</a>

    <nav class = "navbar">
        <a href = "home.php">HOME</a>
        <a href = "pageage.php">PACKAGE</a>
        <a href="contact.php">CONTACT</a>
    </nav>
    <div id = "menu-btn" class = "fas fa-bars"></div>

    </section>
    <!-- header section ends -->

    <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background:url(images/travels.jpg);">
                    <div class="content">
                        <span>Welcome</span>
                        <h3>Your history</h3>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(images/bookingPhoto.jpg) no-repeat;">
                    <div class="content">
                        <span>Welcome</span>
                        <h3>Your Booking</h3>
                    </div>
                </div>

                <div class="swiper-slide" style="background:url(images/offertPhoto.jpg) no-repeat;">
                    <div class="content">
                        <span>welcome</span>
                        <h3>Offert For You</h3>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->

<!-- home about section starts -->

<section class="home-about">
    <div class="image">
        <img src="images/aboutas.jpg" alt="">
    </div>

    <div class="content">
        <h3>Offer</h3>
        <p>Hello,

Thank you for choosing to do business with us! We are committed to ensuring that our customers have an excellent shopping experience and return to become repeat customers.

To thank you for your trust in us, we are happy to offer you some special offers that will help increase the value of your purchase and ensure the best shopping experience.

At present, we have some special offers for our most sought-after products and services. These offers are limited in time, so we encourage you to act quickly to take advantage of the best possible deals.

Thank you again for your trust in us, and we look forward to serving you in the future.

Respectfully,

Our Sales Team</p>
    </div>
</section>

<!-- home about section ends -->

<h1 style="align-items: center; font-size: 3rem; margin-left: 530px; margin-bottom: 10px;">My History</h1>
	<form action="histori-php.php" method="post" class="book-forma" background="none">
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		<label style="font-size: 3rem; position: relative; margin-top: 5px;">Username:</label><br>
		<input type="text" id="uname" name="username" style="border-radius: 5px; align-items: center; font-size: 3rem; " placeholder="Email"><br><br>
		<label style="font-size: 3rem; margin-top: 5px;">Password:</label><br>
		<input type="password" id="password" name="password" style="border-radius: 5px; font-size: 3rem;" placeholder="Password">
		<button type="submit">Shiko historine</button>
	</form>
	<div id="history"></div>

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
                <p>In Tokyo, you can visit ancient temples such as Senso-ji and Meiji Shrine, explore
                     the old town of Edo in Asakusa. Japanese Cuisine: In Tokyo, you can try delicious 
                     Japanese cuisine, including fresh sushi, authentic ramen, tempura, and much more.</p>
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
                <p>Visit the historic buildings of the Berlin Wall and Checkpoint Charlie, enjoy the green 
                    parks like Tiergarten, and explore the revitalized areas such as Potsdamer Platz. 
                    Experience the German cuisine in Berlin, a fusion of regional cuisines, and create 
                    unforgettable memories.</p>
                <a href="book_form.php" class="btn">Book now</a>
            </div>
        </div>

    </div>
</section>

<!-- home package section ends -->

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
            <a href = "contact.php"><i class = "fas fa-angle-right"></i>Ask Questions</a>
            <a href = "about.php"><i class = "fas fa-angle-right"></i>About Us</a>
            <a href = "private.php"><i class = "fas fa-angle-right"></i>Privacy Policy</a>
            <a href = "public.php"><i class = "fas fa-angle-right"></i>Terms and Conditions</a>
            <a href = "pay.php"><i class = "fas fa-angle-right"></i>Link For Pay</a>
            </div> 

            <div class = "box">
                <h3>Contact Info</h3>
                <a href = "#"><i class = "fas fa-phone"></i>+383 49 889 778</a>
                <a href = "#"><i class = "fas fa-phone"></i>+383 44 889 778</a>
                <a href = "contact.php"><i class = "fas fa-envelope"></i>maxtravel@gmail.com</a>
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

         <div class = "credit">Created by <span>max Travel</span> | all rights reserved! |</div>
    </section>

    <!-- footer section ends -->









    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
<script src ="script.js"></script>

</body>
</html>