<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="controlPage.css">
      <title>Login and Registration Form in HTML | CodingNepal</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
               <form action="home.php" class="login">
                  <p>If you want</p>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="See">
                  </div>
                  <div class="signup-link">
                  </div>
               </form>
               <form action="controlPage-php.php" method="post" class="signup" name="forma2">
                  <div class="field">
                     <input type="text" placeholder="Email Address" name="user" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="pass1" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
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