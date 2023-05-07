<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	 <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               User
            </div>
            <div class="title signup">
               Admin
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">User</label>
               <label for="signup" class="slide signup">Admin</label>
               <div class="slider-tab"></div>  
            </div>
            <div class="form-inner">
               <form action="login-php.php" method="post" class="login">
			   <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
      
      <div class="field">
     	<input type="text" name="uname" id="placeholder" placeholder="User Name"><br>
			   </div>
		 <div class="field">
     	<input type="password" name="password" id="password" placeholder="Password"><br>
		 </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Log in">
                  </div><br><br>
				  <a href="signup.php" class="ca">Create an account</a>
                  <div class="signup-link">
                  </div>
               </form>
               <form action="controlPage-php.php" method="post" class="signup" name="forma2">
                  <?php if (isset($_GET['error'])) { ?>
     		         <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>
                  
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="user" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="pass1" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Log in">
                  </div>
               </form>
            </div>
         </div>
      </div>
      
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
      <link rel="stylesheet" href="controlPage.css">

</body>
</html>