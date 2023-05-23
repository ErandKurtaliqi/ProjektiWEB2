<?php 
session_start();

if (isset($_SESSION['id_user_reg']) && isset($_SESSION['username_user_reg'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body style="background-image:url(images/backgroundSIGNUP.avif); background-position: center center; background-size: cover; background-repeat: no-repeat;">
     <h1>Hello, <?php echo  $_SESSION['name_user_reg']; ?></h1>
     <nav class="home-nav">
     <a href="change-password-u.php">Change Password</a>
     <a href="logout.php">Logout</a>
     <a href="histori.php">See your history</a>
     </nav>
</body>
</html>

<?php 

}else{
     header("Location: login.php");
     exit();
}

 ?>