<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK NOW</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="bokk.css">
    <link rel = "stylesheet" href = "style.css">
    <script src="validation.js" defer></script>
    <script>
        function showSuggestion(str){
            if(str.length == 0){
                document.getElementById('output').innerHTML = '';
            }else{
                //  AJAX REQ

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "Countries.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
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

<div class = "heading" style = "background:url(images/snow.jpg)">
    <h1 style="color: black;">TRAVEL WITH US!</h1>
    <style>
        h1 {
            opacity: 0.8;   
        }

        .heading {
            opacity: 0.8;
        }
    </style>
</div>

<!--booking section starts-->

<section class="booking"> 

    <!-- <h1 class="heading-title">book your trip!</h1> -->
    <form action="book_form_php.php" method="post" class="book-forma" autocomplete="on">
     	<h2>You can book here!</h2>
        <style>
            h2 {
                color: black;
            }
        </style>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <span class="element">
          <!-- <label>Name</label> -->
          <?php if (isset($_GET['names'])) { ?>
               <input type="text" 
                      name="names"
                      id="names" 
                      placeholder="Name"
                      value="<?php echo $_GET['names']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="names"
                      id="names" 
                      placeholder="Name">
          <?php }?>

          <!-- <label>Email</label> -->
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>">
          <?php }else{ ?>
               <input type="email" 
                      name="email"
                      id="email" 
                      placeholder="Email">
          <?php }?>


     	<!-- <label>Phone</label> -->
        <?php if (isset($_GET['phone'])) { ?>
     	<input type="number" 
                 name="phone" 
                 id="phone"
                 placeholder="Phone"
                 value="<?php echo $_GET['phone']; ?>">
        <?php }else{ ?>
               <input type="text" 
                      name="phone"
                      id="phone" 
                      min="1"
                      placeholder="Phone">
        <?php }?>

        <!-- <label>Address</label> -->
        <select  class="io"
                 name="address" 
                 id="address"
                >
                <option>Prishtinë</option>
                <option>Mitrovicë</option>
                <option>Pejë</option>
                <option>Prizeren</option>
                <option>Ferizaj</option>
                <option>Gjilan</option>
                <option>Gjakovë</option>
                <option>Podujevë</option>
                <option>Vushtrri</option>
                <option>Suharekë</option>
                <option>Rahovecë</option>
                <option>Drenas</option>
                <option>Lipjan</option>
                <option>Malishevë</option>
                <option>Kamenicë</option>
                <option>Viti</option>
                <option>Deçan</option>
                <option>Istog</option>
                <option>Klinë</option>
                <option>Skenderaj</option>
                <option>Dragash</option>
                <option>Fushë Kosovë</option>
                <option>Kaçanik</option>
                <option>Shtime</option>
                <option>Obiliq</option>
                <option>Leposaviq</option>
                <option>Graçanicë</option>
                <option>Han i Elezit</option>
                <option>Zveqan</option>
                <option>Shtërpcë</option>
                <option>Novobërdë</option>
                <option>Zubin Potok</option>
                <option>Junik</option>
                <option>Mamusha</option>
                <option>Ranillug</option>
                <option>Kllokoti</option>
                <option>Parteshi</option>
        </select>

        <!-- <label>Location</label> -->
        <select  class="io"
                 name="location" 
                 id="location"
                >
                <option>Agra & INDIA</option>
                        <option>New York & USA</option>
                        <option>London & UK</option>
                        <option>Paris & FRANCE</option>
                        <option>Cairo & EGYPT</option>
                        <option>Berlin & GERMANY</option>
                        <option>Istanbul & TURKEY</option>
                        <option>Rome & ITALY</option>
                        <option>Tokyo & JAPAN</option>
                        <option>Lisbon & PORTUGAL</option>
                        <option>Barcelona & SPAIN</option>
                        <option>Honolulu & HAWAII</option>
                        <option>Venice & ITALY</option>
                        <option>Singapore & SINGAPORE</option>
                        <option>Toronto & CANADA</option>
                        <option>Sydney & AUSTRALIA</option>
                        <option>Lima & PERU</option>
                        <option>Beijing & CHINA</option>
        </select>

        <!-- <label>Guests</label> -->
        <?php if (isset($_GET['guests'])) { ?>
     	<input type="number" 
                 name="guests" 
                 id="guests"
                 placeholder="Guests"
                 value="<?php echo $_GET['guests']; ?>">
        <?php }else{ ?>
               <input type="number" 
                      name="guests"
                      id="guests" 
                      min="1"
                      placeholder="Guests">
        <?php }?>

        <!-- <label>Arrivals</label> -->
        <?php if (isset($_GET['arrivals'])) { ?>
     	<input type="date" 
                 name="arrivals" 
                 id="arrivals"
                 placeholder="Arrivals"
                 value="<?php echo $_GET['arrivals']; ?>">
        <?php }else{ ?>
               <input type="date" 
                      name="arrivals"
                      id="arrivals" 
                      placeholder="Arrivals">
        <?php }?>

        <!-- <label>Leaving</label> -->
        <?php if (isset($_GET['leaving'])) { ?>
     	<input type="date" 
                 name="leaving" 
                 id="leaving"
                 placeholder="Leaving"
                 value="<?php echo $_GET['leaving']; ?>">
        <?php }else{ ?>
               <input type="date" 
                      name="leaving"
                      id="leaving" 
                      placeholder="Leaving">
        <?php }?>
          </span>
        
        
        <button type="submit">BOOK</button>
        <a href="info.html" class="btn" style="margin-left: 355px;">Pay</a>
        <button onclick="window.print()" style="margin-left: 355px;">Print</button>

    </form>
</section> 



<!--booking section ends-->



    <!-- footer section start -->
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
            <a href = "#"><i class = "fas fa-angle-right"></i>Ask Questions</a>
            <a href = "about.php"><i class = "fas fa-angle-right"></i>About Us</a>
            <a href = "#"><i class = "fas fa-angle-right"></i>Privacy Policy</a>
            <a href = "#"><i class = "fas fa-angle-right"></i>Terms of Use</a>
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

         <div class = "credit">Created by <span>max travel</span> | all rights reserved! |</div>
    </section>

    <!-- footer section ends -->


<!-- // define variables and set to empty values
// $namesErr = $emailErr = $phoneErr = $addressErr = $locationErr = $guestsErr = $arrivalsErr = $leavingErr = "";
// $names = $email = $phone = $address = $location = $guests = $arrivals = $leaving = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["names"])) {
//     $namesErr = "Name is required";
//   } else {
//     $names = test_input($_POST["names"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z-' ]*$/",$names)) {
//       $namesErr = "Only letters and white space allowed";
//     }
//   }
  
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $emailErr = "Invalid email format";
//     }
//   }
    
//   if (empty($_POST["phone"])) {
//     $phoneErr = "Please your number";
//   } else if($phone <= 0){
//     $phoneErr = "Number is not valid";
//   }else {
//     $phone = test_input($_POST["phone"]);
//   }

//   if (empty($_POST["address"])) {
//     $addressErr = "Please valid address";
//   } else {
//     $address = test_input($_POST["address"]);
//   }

//   if (empty($_POST["location"])) {
//     $locationErr = "Is not valid";
//   } else {
//     $location = test_input($_POST["location"]);
//   }

//   if (empty($_POST["guests"])) {
//     $guestsErr = "Please a number";
//   } else if($guests <= 0){
//     $guestsErr = "No negative number";
//   }else {
//     $guests = test_input($_POST["guests"]);
//   }
// }

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// } -->




    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
<script src ="script.js"></script> 
<!-- <script src="validation.js"></script> -->

</body>
</html>

<!-- <span for="location">location </span>
                 <select name="location" id="location" >
                        <option value="INDIA">Agra & INDIA</option>
                        <option value="USA">New York & USA</option>
                        <option value="UK">London & UK</option>
                        <option value="FRANCE">Paris & FRANCE</option>
                        <option value="EGYPT">Cairo & EGYPT</option>
                        <option value="GERMANY">Berlin & GERMANY</option>
                        <option value="TURKEY">Istanbul & TURKEY</option>
                        <option value="ITALY">Rome & ITALY</option>
                        <option value="JAPAN">Tokyo & JAPAN</option>
                        <option value="PORTUGAL">Lisbon & PORTUGAL</option>
                        <option value="SPAIN">Barcelona & SPAIN</option>
                        <option value="HAWAII">Honolulu & HAWAII</option>
                        <option value="ITALY1">Venice & ITALY</option>
                        <option value="SINGAPORE">Singapore & SINGAPORE</option>
                        <option value="CANADA">Toronto & CANADA</option>
                        <option value="AUSTRALIA">Sydney & AUSTRALIA</option>
                        <option value="PERU">Lima & PERU</option>
                        <option value="CHINA">Beijing & CHINA</option>
                    </select> -->

                    







<!-- 

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if(isset($_POST[('send')])){
    $names = $_POST['names'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    
    $request = " insert into book_form1(names, email, phone, address, location, guests, arrivals, leaving) values
    ('$names', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

mysqli_query($connection, $request);


if(empty($_POST['names'])){
    echo "<script> alert('Please your name'); </script>";
}
else if (!preg_match("/^[a-zA-Z-' ]*$/",$names)) {
    echo "<script> alert('Only letters and white space allowed'); </script>";
}


else if (empty($_POST["email"])) {
    echo "<script> alert('Email is required'); </script>";
     } 
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script> alert('Invalid email format'); </script>";
}


else if (empty($_POST["phone"])) {
    echo "<script> alert('Please your number'); </script>";
} else if($phone <= 0){
    echo "<script> alert('Number is not valid'); </script>";
}

else if (empty($_POST["address"])) {
    echo "<script> alert('Please valid address'); </script>";
}


else if (empty($_POST["location"])) {
    echo "<script> alert('Is not valid'); </script>";
}
// else if ($places != $location){
//     echo "<script> alert('
//     please mark the name of the place where you want to go identically as Suggestions!'); </script>";
// }


else if (empty($_POST["guests"])) {
    echo "<script> alert('Please number for ticket'); </script>";
} else if($guests <= 0){
    echo "<script> alert('No negative number'); </script>";
}
else{
    echo "<script> alert('Successfully booked'); </script>";
    header("location: book.php");
}
}

  -->





  <!-- <label>Location</label>
        php if (isset($_GET['location'])) { ?>
        <input type="text"
                 name="location" 
                 id="location"
                 placeholder="Location"
                 value="?php echo $_GET['location']; ?>">
        php }else{ ?>
               <input type="text" 
                      name="location"
                      id="location" 
                      placeholder="Location">
        ?php }?> -->