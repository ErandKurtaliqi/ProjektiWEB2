<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gmail Sender</title>
    <link rel="stylesheet" href="contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
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

    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          If you prefer to send us an email or call us to communicate, please provide us with your
           email address or phone number, and we will be happy to follow up with you. 
           If you prefer a personal meeting, please let us know a convenient time and place for you, and we
           will make efforts to arrange a meeting to discuss the topic of your interest.
           We thank you in advance for your interest and look forward to hearing from you.
            Please let me know if you are ready to start the conversation and how you prefer to communicate.</p>
            <p>Warmest regards,</p>
           <p>Team Travel</p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Ahmet Krasniqi, Artis Complex Llamella C 1-1, Cima, Arberi/Dragodan, 10000 Pristina</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>teamtravel@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>049-664-837</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/maxtraveldream">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/maxtraveldream/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
          <!-- // echo htmlspecialchars($_SERVER["PHP_SELF"])? -->
          <form action="https://formsubmit.co/erand.kurtaliqi@student.uni-pr.edu" method="post" required>
            <h3 class="title">Contact us</h3>
             <div class="input-container">
              <input type="text" name="name" class="input">
              <label for="">Username</label>
              <span>Username</span>
            </div>  
            <div class="input-container">
              <input type="email" name="email" id="email" class="input" required>
              <label for="">Your email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="subject" id="subject" class="input" required>
              <label for="">Subject</label>
              <span>Subject</span>
            </div>
            <div class="input-container textarea">
              <textarea name="body" id="body" class="input" required></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="SEND" class="btn">
          </form>
          
        </div>
      </div>
    </div>

    <!-- footer section start -->
    <link rel="stylesheet" href="style.css">
    <section class="footer" style = "background:url(images/Footer-Background-Image.png) no-repeat">
        <div class = "box-container">
            <div class = "box">
                <h3>Quick Links</h3>
            <a href = "home.php"><i class = "fas fa-angle-right"></i>HOME</a>
            <a href = "about.php"><i class = "fas fa-angle-right"></i>ABOUT</a>
            <a href = "pageage.php"><i class = "fas fa-angle-right"></i>PACKAGE</a>
            <a href = "book.php"><i class = "fas fa-angle-right"></i>BOOK</a>
            <a href = "contact.php"><i class = "fas fa-angle-right"></i>CONTACT</a>
            </div>

            <div class = "box">
                <h3>Extra Links</h3>
            <a href = "contact.php"><i class = "fas fa-angle-right"></i>Ask Questions</a>
            <a href = "about.php"><i class = "fas fa-angle-right"></i>About Us</a>
            <a href = "private.php"><i class = "fas fa-angle-right"></i>Privacy Policy</a>
            <a href = "public.php"><i class = "fas fa-angle-right"></i>Terms and Conditions</a>
            </div> 

            <div class = "box">
                <h3>Contact Info</h3>
                <a href = "#"><i class = "fas fa-phone"></i>+383 49 889 778</a>
                <a href = "#"><i class = "fas fa-phone"></i>+383 49 889 778</a>
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
         <div class = "credit">Created by <span>max travel </span> | all rights reserved! |</div>
    </section>

    <!-- footer section ends -->

    <script src="contact.js"></script>
    <script src="script.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js">
</script>

  </body>
</html>
