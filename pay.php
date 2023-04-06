<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Payment Form </title>
    <link rel="stylesheet" href="pay.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="booking">
    <form action="pay_php.php" method="post" class="book-forma">
        <div class="container">
            <h1> Confirm Your Payment</h1>

            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <span class="element">
          <label>Owner</label>
          <?php if (isset($_GET['name_client'])) { ?>
               <input type="text" 
                      name="name_client"
                      id="name_client" 
                      placeholder="Name Owner"
                      value="<?php echo $_GET['name_client']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="name_client"
                      id="name_client" 
                      placeholder="Name Owner">
          <?php }?>
           
          <span class="element">
          <label>PIN</label>
          <?php if (isset($_GET['pin_client'])) { ?>
               <input type="text" 
                      name="pin_client"
                      id="pin_client" 
                      placeholder="PIN"
                      value="<?php echo $_GET['pin_client']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="pin_client"
                      id="pin_client" 
                      placeholder="PIN">
          <?php }?>

          <span class="element">
          <label>Card Number</label>
          <?php if (isset($_GET['cardNumber_client'])) { ?>
               <input type="text" 
                      name="cardNumber_client"
                      id="cardNumber_client" 
                      placeholder="Card Number"
                      value="<?php echo $_GET['cardNumber_client']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="cardNumber_client"
                      id="cardNumber_client" 
                      placeholder="Card Number">
          <?php }?><br>

          <br><p>This is your price for pay</p><br>
               <div class="cards">
                <img src="images/visa.png">
                <img src="images/mastercard.png" alt="">
               </div> 
  
        <input type="submit" value="Confirm" class="btn" name="send">
    </form>
    </section>
</body>
</html>