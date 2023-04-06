<?php 

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

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK NOW</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
                xmlhttp.open("GET", "Countres.php?q="+str, true);
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
        <a href = "book.php">BOOK</a>
        <a href="contact.php">CONTACT</a>
    </nav>

    <div id = "menu-btn" class = "fas fa-bars"></div>

    </section>
    <!-- header section ends -->

<div class = "heading" style = "background:url(images/paris.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<!--booking section starts-->

<section class="booking">

    <h1 class="heading-title">book your trip!</h1>
    <!-- php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" -->
    <form id="forma" action="book.php" method="post" class="book-form" >
      <div class="flex">
            <div class="inputBox">
                <span for="names">name</span>
                <input type="text" class="input-control" placeholder="enter your name" name="names"  id="names" value="" >
                 <!-- <span class="error"> echo $namesErr</span>  -->
            </div>

            <div class="inputBox">
                <span for="email">email </span>
                <input type="email" class="input-control"  placeholder="enter your email" name="email" id="email" value="" >
                <!-- <span class="error">* php echo $emailErr;?></span> -->
            </div>

            <div class="inputBox">
                <span for="phone">phone </span>
                <input type="number" class="input-control"  placeholder="enter your number" name="phone" id="phone" value="" >
                <!-- <span class="error"><hp echo $phoneErr;?></span> -->
            </div>

            <div class="inputBox">
                <span for="address">address </span>
                <input type="text" class="input-control" placeholder="enter your address" name="address" id="address" value="" >
                <!-- <span class="error">hp echo $addressErr;?></span> -->
             </div>

            <div class="inputBox">
                Location: <input type="text" name="location" class="form-control" onkeyup="showSuggestion(this.value)" placeholder="Where to" value="">
                <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
                <!-- <span class="error"> echo $locationErr;?></span> -->
            </div>

            <div class="inputBox">
                <span for="guests">guests </span>
                <input type="number" class="input-control" placeholder="number of guests" name="guests" id="guests" value="" >
                <!-- <span class="error"><hp echo $guestsErr;?></span> -->
            </div>

            <div class="inputBox">
                <span for="arrivals">arrivals </span>
                <input type="date" class="input-control" name="arrivals" id="arrivals" >
            </div>

            <div class="inputBox">
                <span for="leaving">leaving </span>
                <input type="date" class="input-control" name="leaving" id="leaving" value="">
            </div>

           <input type="submit" value="submit" class="btn" id="submit" name="send">
        </div>
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

                    